<?php

// Chargement des classes
require_once('models/PostManager.php');
require_once('models/CommentManager.php');

function listPosts()
{
    $postManager = new PostManager(); // Cr�ation d'un objet
    $posts = $postManager->getPosts(); // Appel d'une fonction de cet objet

    include('views/frontend/listPostsView.php');
}

function post()
{
    $postManager = new PostManager();
    $commentManager = new CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    include('views/frontend/detailPost.php');
}

function addComment($postId, $fullname, $content)
{
    $commentManager = new CommentManager(); // appel nouvelle objet CommentManager

    $affectedLines = $commentManager->postComment($postId, $fullname, $content); // rappel paramétre et fonction postComment avec préparation DB

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}
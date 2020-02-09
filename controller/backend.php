<?php

// Chargement des classes
require_once('models/PostManager.php');
require_once('models/CommentManager.php');

function createPostViews()
{
   include('views/backend/createPostView.php');
}

function addPost($title, $content) 
{
    $postManager = new PostManager();
    $affectedLines = $postManager->addPost($title, $content);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le nouveau chapitre !');
    }
    else {
        //echo "ajout ok";
        header('Location: index.php?action=adminPanel'); //redirection sur crud admin une fois l'action fini . 
    }
}
function listPostsAdmin()
{
    $postManager = new PostManager(); // Création d'un objet
    $posts = $postManager->getPosts(); // Appel d'une fonction de cet objet

    include('views/backend/adminPanel.php'); // inclure dans views front end listposts
}

function deletePost($postId)
{
    $postManager = new PostManager();
    $affectedLines = $postManager->deletePost($postId);

    if ($affectedLines === false) {
        throw new Exception('Impossible de supprimer cet article !');
    }
    else {
        //echo "ajout ok";
        header('Location: index.php?action=adminPanel'); //Pour rester sur la même page une fois l'action supprimer.
    }
}
function editPostView($id)
{
    $postManager = new PostManager(); // Création d'un objet
    $post = $postManager->getPost($id); // Appel d'une fonction de cet objet

    include('views/backend/editPostView.php'); // inclure dans views front end listposts
}
function editPost($postId, $title, $content)
{
    $postManager = new PostManager();
    $affectedLines = $postManager->editPost($postId, $title, $content);

    if ($affectedLines === false) {
        throw new Exception('Impossible de modifier cet article !'); // lever l'exception XXXX 
    }
    else {
        //echo "ajout ok";
        header('Location: index.php?action=adminPanel'); //Pour rester sur la même page une fois l'action supprimer.
    }
}
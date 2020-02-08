<?php

// Chargement des classes
require_once('models/PostManager.php');
require_once('models/CommentManager.php');

function createPostViews()
{
   include('views/backend/CreatePostView.php');
}

function addPost($title, $content) 
{
    $adminManager = new PostManager();
    $affectedLines = $adminManager->newPost($title, $content);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le nouveau chapitre !');
    }
    else {
        //echo "ajout ok";
        header('Location: index.php?action=listPostsAdmin'); //redirection sur crud admin une fois l'action fini . 
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
    
}
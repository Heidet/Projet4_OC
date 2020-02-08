<?php

// Chargement des classes
require_once('models/PostManager.php');
require_once('models/CommentManager.php');

function createPost()
{
   include('views/backend/CreatePostView.php');
}

function AddPost() 
{
    $adminManager = new PostManager();
    $affectedLines = $adminManager->newPost();

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le nouveau chapitre !');
    }
    else {
        //echo "ajout ok";
        header('Location: index.php?action=createPost');
    }
}
function listPostsAdmin()
{
    $postManager = new PostManager(); // Création d'un objet
    $posts = $postManager->getPosts(); // Appel d'une fonction de cet objet

    include('views/backend/adminPanel.php'); // inclure dans views front end listposts
}

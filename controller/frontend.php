<?php

// Chargement des classes
require_once('models/PostManager.php');
require_once('models/CommentManager.php');
require_once('models/adminManager.php');

function listPosts()
{
    $postManager = new PostManager(); // Création d'un objet
    $posts = $postManager->getPosts(); // Appel d'une fonction de cet objet

    include('views/frontend/listPostsView.php'); // inclure dans views front end listposts
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
function connexionView()
{
   include('views/frontend/adminConnect.php'); // inclure dans views front end listposts
}
function checkConnexion($username, $password)
{

    $adminManager = new adminManager();
    if($adminManager->checkConnexion($username, $password) == 1 ){
        $_SESSION['Logged'] = true;
        echo 'Bravo tu est bien connecter';
        header('Location: index.php?action=adminPanel');
    }
    return $adminManager->checkConnexion($username, $password);

}
function signaler($commentId)
{
    $commentManager = new CommentManager(); // appel nouvelle objet CommentManager

    $affectedLines = $commentManager->signal($commentId); // rappel paramétre et fonction postComment avec préparation DB

    if ($affectedLines === false) {
        throw new Exception('Impossible de signaler le commentaire !');
    }
    else {
        echo 'Commentaire bien signaler';
    }
}
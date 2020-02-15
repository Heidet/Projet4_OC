<?php
session_start(); // démarre le système de sessions. Si le visiteur vient d'arriver sur le site, alors un numéro de session est généré pour lui. 
error_reporting(E_ALL); // reporting des erreur sur la page
ini_set("display_errors", 1);
require_once('controller/frontend.php');


if (isset($_GET['action'])) {
    if ($_GET['action'] == 'listPosts') {
        listPosts();
    }
    elseif ($_GET['action'] == 'post') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            post();
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }
    elseif ($_GET['action'] == 'addComment') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            if (!empty($_POST['fullname']) && !empty($_POST['content'])) {
                addComment($_GET['id'], $_POST['fullname'], $_POST['content']);
            }
            else {
                echo 'Erreur : tous les champs ne sont pas remplis !';
            }
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyés';
        }
    }
    elseif ($_GET['action'] == 'signaler') {
        if (isset($_GET['commentId']) && $_GET['commentId'] > 0) {
            signaler(intval($_GET['commentId']));
        } 
    }
    elseif ($_GET['action'] == 'deleteComment') {
        require_once('controller/backend.php');
        if (isset($_GET['commentId']) && $_GET['commentId'] > 0) {
            deleteComment($_GET['commentId']);
        } 
    }
    elseif ($_GET['action'] == 'addPost') {
        require_once('controller/backend.php');
        if (isset($_POST['title']) && isset($_POST['content'])) { //SI l'action addpost et si on à du contenu dans titre et contenu
            addPost($_POST['title'], $_POST['content']);  //alors insertion post
        }
        else {  // SI NON affichage vu post. 
            createPostViews();
        }
    }
    elseif ($_GET['action'] == 'adminPanel') {
        require_once('controller/backend.php');
        listPostsAdmin();
    }
    elseif ($_GET['action'] == 'deletePost' ) {
        require_once('controller/backend.php');
       if (isset($_GET['id']) && $_GET['id'] > 0) {
            deletePost($_GET['id']); 
       }
       else {
            echo 'Erreur : Veuillez specifier l\'article à supprimer !';
       }
    }
    elseif ($_GET['action'] == 'editPost') { // SI l'action et edit post 
        require_once('controller/backend.php');
        if (isset($_GET['id']) && $_GET['id'] > 0) {  // ET SI l'id et bien défini  ( vérification isset) 2 OPTION = 
            if(isset($_POST['title']) && isset($_POST['content'])){ // SI les données du form on ete poster 
                 editPost($_GET['id'],  $_POST['title'], $_POST['content']);// alors edition article 
            }
            else{ // NON c'est que le formulaire n'a pas été valider 
                editPostView($_GET['id']); // Donc vue édition post 
            }
       }
       else{
            echo 'Erreur : Veuillez specifier l\'article à supprimer !';
       }
    }
    if ($_GET['action'] == 'connexion') {
        if(isset($_SESSION['Logged']) && $_SESSION['Logged'] =  true){
            header('Location: index.php?action=adminPanel');
         }
        if (isset($_POST['username']) && isset($_POST['password'])) {
            if (!empty($_POST['username']) && !empty($_POST['password'])) {
                checkConnexion($_POST['username'],  $_POST['password']);
            }
            else {
                echo 'Erreur : tous les champs ne sont pas remplis !';
            }
        }
        connexionView();
    }
    if ($_GET['action'] == 'deconnexion') {
        session_destroy();
        header('Location: index.php?action=connexion');
    }

}       


else {
    listPosts();
}

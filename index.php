<?php
error_reporting(E_ALL); // reporting des erreur sur la page
ini_set("display_errors", 1);
require_once('controller/frontend.php');
require_once('controller/backend.php');


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
    elseif ($_GET['action'] == 'addPost') {
        if (isset($_POST['title']) && isset($_POST['content'])) { //SI l'action addpost et si on à du contenu dans titre et contenu
            addPost($_POST['title'], $_POST['content']);  //alors insertion post
        }
        else {  // SI NON affichage vu post. 
            createPostViews();
        }
    }
    elseif ($_GET['action'] == 'listPostsAdmin') {
        listPostsAdmin();
    }
    elseif ($_GET['action'] == 'deletePost' ) {
       if (isset($_GET['id']) && $_GET['id'] > 0) {
            deletePost($_GET['id']); 
       }
       else {
            echo 'Erreur : Veuillez specifier l\'article à supprimer !';
       }
    }
    elseif ($_GET['action'] == 'editPost') { // SI l'action et edit post 
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
}       


else {
    listPosts();
}

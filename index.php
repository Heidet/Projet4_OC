<?php
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
            echo 'Erreur : aucun identifiant de billet envoy�';
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
            echo 'Erreur : aucun identifiant de billet envoy�';
        }
    }
    elseif ($_GET['action'] == 'createPost') { 
            createPost();
    }
}
else {
    listPosts();
}
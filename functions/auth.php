<?php 
function est_connecte (): bool {
    if (session_status () === PHP_SESSION_NONE) {
        session_start();
    }
    return !empty($_SESSION['connecte']);
}

function utilisateur_connecte (): void {
    if(!est_connecte()) { // si l'utilisateur n'est pas connecter alors
        header('Location: /login.php'); // renvoi vers la page d'identification
        exit();
    }
}
<?php 
function est_connecte (): bool {
    if (session_status () === PHP_SESSION_NONE) { // si session status et en base sur php session none 
        session_start(); // alors on lance une session 
    }
    return !empty($_SESSION['connecte']); 
}

function forcer_utilisateur_connecte (): void {
    if(!est_connecte()) { // si l'utilisateur n'est pas connecter alors
        header('Location: /login.php'); // renvoi vers la page d'identification
        exit();
    }
}
<?php
require_once('Manager.php');

class adminManager extends Manager
{
    public function checkConnexion($username, $password)
    {
        $db = $this->dbConnect();
        $connect = $db->prepare('SELECT COUNT(id) FROM author WHERE username = ? AND hash = ?'); // selectionner tout les utilisateur et verifier 
        $hash = hash('sha256', $password);
        $connect->execute(array($username, $hash)); // execute la requete SQL préparer avec passage paramétre par tableau au lieu d'utiliser des bindparam
        $resultat = $connect->fetch();
        
        return $resultat[0]; // retourner uniquement le 1er champs. 
    }

}
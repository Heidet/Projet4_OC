<?php
require_once('Manager.php');

class CommentManager extends Manager
{
    public function getComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT * FROM comments WHERE post_id = ? ORDER BY id DESC');
        $comments->execute(array($postId)); // execute la requete SQL préparer avec passage paramétre par tableau au lieu d'utiliser des bindparam

        return $comments;
    }

    public function postComment($postId, $fullname, $content)
    {
        $db = $this->dbConnect();
        $requete = $db->prepare('INSERT INTO comments (post_id, fullname, content, date) VALUES (?, ?, ?, CURRENT_TIMESTAMP)');
        $affectedLines = $requete->execute(array($postId, $fullname, $content));

        return $affectedLines; // retourne le resultat requete 
    }

}
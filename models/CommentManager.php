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
    
    public function signal($commentId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare("UPDATE comments SET `signal` = 1 WHERE id = ?");  
        $affectedLines = $req->execute(array($commentId)); // recupération title content 
        
        return $affectedLines;
    }
    public function getSignals()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM comments WHERE `signal` = 1 ORDER BY id DESC');

        return $req;
    }
    public function deleteComment($commentId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM comments WHERE id = ?');
        $affectedLines = $req->execute(array($commentId));

        return $affectedLines; 
    }
}
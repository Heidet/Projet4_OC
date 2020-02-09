<?php
require_once('Manager.php');
class PostManager extends Manager
{
    public function addPost($title, $content)
    {
        $db = $this->dbConnect();
        $req = $db->prepare("INSERT INTO `posts` (`title`, `date`, `content` ) VALUES (?, CURRENT_TIMESTAMP, ?);");
        $affectedLines = $req->execute(array($title, $content)); // recupération title content 

        return $affectedLines;
    }

    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM posts ORDER BY id DESC');

        return $req;
    }

    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM posts WHERE id = ?');
        $req->execute(array($postId)); // Bindparam
        $post = $req->fetch();

        return $post;
    }
    public function deletePost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM posts WHERE id = ?');
        $affectedLines = $req->execute(array($postId));

        return $affectedLines; 
    }
    
    public function editPost($postId, $title, $content)
    {
        $db = $this->dbConnect();
        $req = $db->prepare("UPDATE posts SET title = ?, content = ?  WHERE id = ?"); // mettre à jour la table poste ( titre = 1 champs, contenu = 2 ème champs) quand l'id = son ID 
        $affectedLines = $req->execute(array($title, $content, $postId)); // recupération title content 

        return $affectedLines;
    }
}

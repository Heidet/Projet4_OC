<?php
require_once('Manager.php');
class PostManager extends Manager
{
    public function createPost()
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO posts(title, content, date) VALUES (?, ?, CURRENT_TIMESTAMP)');
        $affectedLines = $req->execute(array($_POST['title'], $_POST['content'])); // execute l'insertion en DB du contenu title et content tinymce

        return $affectedLines;
    }

    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM posts ORDER BY id DESC LIMIT 0, 5');

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
}
<?php
require_once('Manager.php');
class PostManager extends Manager
{
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
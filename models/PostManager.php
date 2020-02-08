<?php
require_once('Manager.php');
class PostManager extends Manager
{

    public function newPost()
    {
        $db = $this->dbConnect();
        $req = $db->prepare("INSERT INTO `posts` (`title`, `date`, `content` ) VALUES (:title, CURRENT_TIMESTAMP, :content);");
        $affectedLines = $req->execute(array($_POST['title'], $_POST['content']));

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

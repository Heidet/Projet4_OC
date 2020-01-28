<?php
error_reporting(E_ALL); // reporting des erreur sur la page
ini_set("display_errors", 1);
?>
<?php 
error_reporting(E_ALL);
if (isset($_POST) && !empty($_POST)) { // variable post déjà déclarer et contenu variable vide 
    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=blog', 'blog', 'blog123'); 
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,true);  
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $title = $_POST['title']; 
    $content =  $_POST['content'];
    //$sql = "INSERT INTO `posts` (`title`, `date`, `content`) VALUES ('" . $_POST['title'] . "',  CURRENT_TIMESTAMP, '" . $_POST['content'] . "');";
    //$pdo->query($sql);
    $req = $pdo->prepare("INSERT INTO `posts` (`title`, `date`, `content` ) VALUES (:title, CURRENT_TIMESTAMP, :content);");
    $req->bindParam(':title', $title );
    $req->bindParam(':content', $content);
    $req->execute();
        /*echo "formulaire poster";
    echo "<br />";
    echo 'titre: &nbsp;' . $_POST['title'];
    echo "<br />";
    echo 'contenu: &nbsp;' . $_POST['content']; */
    $req = $pdo->query("SELECT * FROM posts ORDER BY id DESC LIMIT 1");
    $post = $req->fetch();
    echo $post['title'] .  "<br />"; // test echo post 
    echo $post['content'] . "<br />";
} else {
    
    require_once('views/backend/createPost.php');

}

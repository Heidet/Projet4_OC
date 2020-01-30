<?php 

require_once('config.php');
require_once('CommentManager.php');

class PostManager {
    private $id; //id post  
    private $title; 
    private $date;
    private $content; 

    private $DB;

    public function __construct($id = null, $title = null, $date = null, $content = null) {
        $this->DB = new PDO('mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_BASE, DB_USER, DB_PASS);// constante // création connecteur à la BDD  (init dans constructeur)
        $this->id = $id;
        $this->title = $title;
        $this->date = $date;
        $this->contact = $content;
    }
    
    public function __toString() {
        return $this->title;
    }

    public function getId() { // recupération id // accesseur 
        return $this->id; // retourne l'id récuperer
    }
    
    
    public function getTitle() { // recupération title 
        return $this->title; // retourne le titre récuperer
    }
    public function setTitle($title){ // changer le titre 
        $this->title = $title; // attribution valeur à variable 
    }

    public function getDate(){ //récuperation valeur de date
        return $this->date; // changement valeur a la variable 
    }
    public function setDate($date){
        $this->date = $date;
    }

    public function getContent(){
        return $this->content; 
    }
    public function setContent($content){
        $this->content = $content;
    }

    public function getComments(){
        $comments = array(); // liste de commentaire 
        $DB = new PDO('mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_BASE, DB_USER, DB_PASS);
        $req = $DB->prepare("SELECT * FROM comments WHERE post_id = :post_id"); //requet tout les commentaire du plus recent au plus anciens 
        $req->bindParam(':post_id', $this->id); // requete securisé Clé , valeur 
        $req->execute();
        foreach($req->fetchAll() as $comment){ // POUR CHAQUE commentaire 
            array_push($comments, new CommentManager( // Ajout dans le tableau comments les informations
                $comment['id'],
                $comment['fullname'],
                $comment['content'],
                $comment['date'],
                $this->id
            )); 
        }
        return $comments; // returne liste d'objet commentaire. 
    }
    

    public function save(){
        if (!empty($this->id)){ // si pas vide uptade 

        } else { // si non nouveau post
            $req = $this->DB->prepare("INSERT INTO `posts` (`title`, `date`, `content`) VALUES (:title, CURRENT_TIMESTAMP, :content);");
            $req->bindParam(':title', $this->title);
            $req->bindParam(':content', $this->content);
            $resp = $req->execute();  // stock le résultat de la requete dans une variable resp 
        }
    }
}

function getAllPosts(){ // Méthode de récupération tout les posts de la DB. 
    $posts = array(); // list posts
    $DB = new PDO('mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_BASE, DB_USER, DB_PASS);
    $req = $DB->query("SELECT * FROM posts ORDER BY id DESC"); //requet tout les posts
    foreach($req->fetchAll() as $post){ //parcourir les réponse et stockage variable post
        array_push($posts, new PostManager(
            $post['id'],
            $post['title'],
            $post['date'],
            $post['content']
        )); 
    }
    return $posts; // returne liste d'objet posts. 
}

function getPostById($post_id){
    $DB = new PDO('mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_BASE, DB_USER, DB_PASS);
    $req = $DB->prepare("SELECT * FROM posts WHERE id = :post_id"); //selectionne moi tout les champs de la table post ou l'id et égale à post ID 
    $req->bindParam(':post_id', $post_id); // requete preparer sécurisé au injection 
    $req->execute();  // execution de la requete . 
    $post = $req->fetch(); //
    return new PostManager(
        $post['id'],
        $post['title'],
        $post['date'],
        $post['content']
    );
}

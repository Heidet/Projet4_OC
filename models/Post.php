<?php 

class Post {
    private $id; //id post  
    private $title; 
    private $date;
    private $content; 

    private $DB;

    public function __construct($DB, $id = null, $title = null, $date = null, $contact = null) {
        $this->DB = $DB;
        $this->id = $id;
        $this->title = $title;
        $this->date = $date;
        $this->contact = $contact;
    }
    
    public function __toString() {
        return $this->title;
    }

    public static function getAllPosts($DB){ //appel méthode static à appeler sans instancier
        $posts = array(); // list posts
        $req = $DB->query("SELECT * FROM posts ORDER BY id DESC"); //requet tout les posts
        foreach($req->fetchAll() as $post){ //parcourir les réponse et stockage variable post
            array_push($posts, new Post(
                $DB,
                $post['id'],
                $post['title'],
                $post['date'],
                $post['content']
            )); //création objet stocket dans posts . 
        }
        return $posts; // returne liste d'objet posts. 
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

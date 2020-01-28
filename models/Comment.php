<?php 

require_once('config.php');

class Comment {
    private $id; //id post  
    private $fullname; 
    private $content;
    private $date; 
    private $post_id; 

    private $DB;

    public function __construct($id = null, $fullname = null, $content = null,  $date = null, $post_id = null) {
        $this->DB = new PDO('mysql:host=' . $DB_HOST . ';port=' . $DB_PORT . ';dbname=' . $DB_BASE, $DB_USER, $DB_PASS); // création connecteur à la BDD  (init dans constructeur)
        $this->id = $id;
        $this->fullname = $fullname;
        $this->content = $content;
        $this->date = $date; 
        $this->post_id = $post_id;
    }
    
    public function __toString() {
        return $this->content;
    }
    
    public function getFullname() { // recupération title 
        return $this->fullname; // retourne le titre récuperer
    }
    public function setFullname($fullname){ // changer le titre 
        $this->fullname = $fullname; // attribution valeur à variable 
    }

    public function getContent(){ //récuperation valeur de date
        return $this->content; // changement valeur a la variable 
    }
    public function setContent($content){
        $this->date = $content;
    }

    public function getDate(){ //récuperation valeur de date
        return $this->date; // changement valeur a la variable 
    }
    public function setDate($date){
        $this->date = $date;
    }

    public function getPostId(){
        return $this->post_id; 
    }
    public function setPostId($post_id){
        $this->post_id = $post_id;
    }
    

    public function save(){
        if (!empty($this->id)){  // Update si ID vide / new 

        } else { // si non nouveau comment
            $req = $this->DB->prepare("INSERT INTO `comments` (`fullname`, `content`, `date`, `post_id`) VALUES (:fullname, :content, CURRENT_TIMESTAMP, :post_id);");
            $req->bindParam(':fullname', $this->fullname); //requete preparer inserer les données de la variable dans la colonne. 
            $req->bindParam(':content', $this->content); 
            $req->bindParam(':post_id', $this->post_id);
            $resp = $req->execute();  // stock le résultat de la requete dans une variable resp 
        }
    }
}

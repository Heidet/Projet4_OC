<?php 

require_once('config.php');

class Author {
    private $id; //id post  
    private $username; 
    private $hash;

    private $DB;

    public function __construct($id = null, $username = null, $hash = null) {
        $this->DB = new PDO('mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_BASE, DB_USER, DB_PASS); // création connecteur à la BDD  (init dans constructeur)
        $this->id = $id;
        $this->fullname = $username;
        $this->content = $hash;
    }
    
    public function __toString() {
        return $this->username;
    }
    
    public function getUsername() { // recupération title 
        return $this->username; // retourne le titre récuperer
    }
    public function setUsername($username){ // changer le titre 
        $this->fullname = $username; // attribution valeur à variable 
    }

    public function getHash(){ //récuperation valeur de date
        return $this->hash; // changement valeur a la variable 
    }
    public function setPassword($password){
        $this->hash = hash('sha256', $password); //utilisation fonction hash pour hasher la valeurs du password avec la valeurs sha256
    }

    public function save(){
        if (!empty($this->id)){  // Update si ID vide / new 

        } else { // si non nouveau comment
            $req = $this->DB->prepare("INSERT INTO `author` (`username`, `hash`) VALUES (:username, :hash);");
            $req->bindParam(':username', $this->username); //requete preparer inserer les données de la variable dans la colonne. 
            $req->bindParam(':hash', $this->hash); 
            $resp = $req->execute();  // stock le résultat de la requete dans une variable resp 
        }
    }
}
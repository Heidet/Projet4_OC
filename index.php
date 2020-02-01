<?php

function debug($obj) {
    echo "<pre>";
    print_r($obj);
    echo "</pre>";
}

if(isset($_GET) && isset($_GET['action'])){ // si action est défini dans la variable GET il et égale a son contenu 
    $action = $_GET['action'];
}
else {
    $action = 'home';
}
$routes = [
    'home'=>'controlers/home.php',
    'detailPost'=>'controlers/detailPost.php',
];

include_once($routes[$action]);
// il va falloir routeur l'index sur le controleur 
//Chaque action utilisateur va devoir être defini (connexion , vue poste , ect ect)
// Exemple avec ation get action home 
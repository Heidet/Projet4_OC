<?php 
$action = $_GET['action'];
if($action == false){
    $action = 'home';
}
$routes = [
    'home'=>'controlers/home.php'
];

include_once($routes[$action]);

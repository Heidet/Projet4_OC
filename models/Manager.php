<?php
include('config.php');
class Manager
{
    protected function dbConnect()
    {
        //$db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
        $db = new PDO('mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_BASE, DB_USER, DB_PASS);
        return $db;
    }
}
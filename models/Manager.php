<?php
class Manager
{
    protected function dbConnect()
    {
        //$db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
        $db = new PDO('mysql:host=db5000299595.hosting-data.io;dbname=dbs292734', 'dbu142667', 'Lolilol.9090');
        return $db;
    }
}
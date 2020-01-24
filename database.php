<?php
require_once('config.php');

$DB = new PDO('mysql:host=' . $DB_HOST . ';port=' . $DB_PORT . ';dbname=' . $DB_BASE, $DB_USER, $DB_PASS);

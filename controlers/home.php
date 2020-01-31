<?php
include_once('models/PostManager.php');
//echo 'je suis la';
$posts = getAllPosts();

include_once('views/frontend/home.php');


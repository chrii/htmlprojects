<?php
$blogdb = new PDO 
(
    'mysql:host=localhost;dbname=blog', 
    'blog', 
    'pkiKIhj4haQsmKIb'
);
 

function getEntry()
{
    global $blogdb;
    return $blogdb->query("SELECT * FROM `posts`"); 
}

function getTitle($title)
{
    global $blogdb;
    $query = $blogdb->query("SELECT * FROM `posts` WHERE id = '{$title}'");
    return $query->fetch();
}

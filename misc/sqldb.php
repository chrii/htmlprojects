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
    $query = $blogdb->prepare("SELECT * FROM `posts` WHERE id = :id");
    $query->execute(['id' => $title]);
    // $query = $blogdb->query("SELECT * FROM `posts` WHERE id = '{$title}'"); <--- Unsicher
    return $query->fetch();
}

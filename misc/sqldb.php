<?php
$blogdb = new PDO 
(
    'mysql:host=localhost;dbname=blog', 
    'root', 
    ''
);
 

function getEntry()
{
    global $blogdb;
    return $blogdb->query("SELECT * FROM `posts`"); 
}

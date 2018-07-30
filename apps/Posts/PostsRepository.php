<?php
namespace App\Posts;
use PDO;

class PostsRepository 
{
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public function getAllEntrys()
    {
        $stmt = $this->pdo->query("SELECT * FROM `posts`"); 
        $allEntrys = $stmt->fetchAll(PDO::FETCH_CLASS, "App\\Posts\\EntryModelling");

        return $allEntrys;
    }
    
    public function getSingleEntry($id)
    {
        // $query = $blogdb->query("SELECT * FROM `posts` WHERE id = '{$title}'"); <--- Unsicher SQL Inject möglich
        $query = $this->pdo->prepare("SELECT * FROM `posts` WHERE id = :id");
        $query->execute(['id' => $id]);
        $query->setFetchMode(PDO::FETCH_CLASS, "App\\Posts\\EntryModelling");
        $entrySingleContent = $query->fetch();

        return $entrySingleContent;
    }
}
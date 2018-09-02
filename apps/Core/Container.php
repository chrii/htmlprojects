<?php 
namespace App\Core;
use PDO;
use App\Posts\PostsRepository;

class Container 
{
    private $blogdb; 
    private $postsrepo; 

    public function getDB()
    {
        if (!empty($this->blogdb))
        {
            return $this->blogdb;
        }
        $this->blogdb = new PDO 
        (
            'mysql:host=localhost;dbname=blog', 
            'blog', 
            'pkiKIhj4haQsmKIb'
        );
        $this->blogdb->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $this->blogdb;
    }

    public function getPostRepo()
    {
        if(!empty($this->postsrepo))
        {
            return $this->postsrepo;
        }
        
        $this->postsrepo = new PostsRepository(
            $this->getDB()
        );
        return $this->postsrepo;
    }
}
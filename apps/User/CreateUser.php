<?php 
namespace App\User;

class CreateUser 
{
    public function __construct($userdb)
    {
        $this->userdb = $userdb;
        var_dump($userdb);
    }
}
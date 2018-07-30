<?php
namespace App\Posts;

class EntryModelling
{
    public $id;
    public $title;
    public $postcontent;

    public function toShort($entry)
    {
        if (strlen($this->$entry) >= 10)
        {
            return substr($this->$entry, 0 , 10);
        }
    }
}
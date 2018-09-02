<?php
namespace App\Posts;
use ArrayAccess;

class EntryModelling implements ArrayAccess
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

    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
    
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
    
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
    
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
}
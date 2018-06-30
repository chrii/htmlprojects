<?php

class CreateTable 
{
    public function __construct($database)
    {
        $this->database = $database;
    }
    public function createRow()
    {
        foreach ($this->database AS $key => $row)
        {
            $id = $key +1;
            $fname = $this->database[$key]["firstname"];
            $sname = $this->database[$key]["surname"];
            $handle = $this->database[$key]["handle"];
            echo "<tr><th scope='row'>{$id}</th><td>{$fname}</td><td>{$sname}</td><td>{$handle}</td></tr>";
        }
    }
}
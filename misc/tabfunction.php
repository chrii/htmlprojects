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

function navItems($itemdb, $dropdowndb)
{
    foreach ($itemdb AS $key => $item)
    { 
        if ($item == "Projects")
        {
            echo "<li class='nav-item dropdown'>
            <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
            {$item}
            </a>
            <div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>";

            foreach ($dropdowndb AS $ddKey => $ddItem)
            {
                echo "<a class='dropdown-item' href='{$ddKey}.php'>{$ddItem}</a>";
            }
            echo "</div>";
        } else 
        {
            echo "<a class='nav-item nav-link' href='../pages/{$key}.php'>{$item}</a>";
        }
    }
}
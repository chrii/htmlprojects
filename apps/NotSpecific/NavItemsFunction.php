<?php 
namespace App\NotSpecific;
class NavItemsFunction 
{   
    public function navItems($itemdb, $dropdowndb = NULL, $dropdownTitle = NULL)
    {
        foreach ($itemdb AS $key => $item)
        { 
            if ($item == $dropdownTitle && isset($dropdowndb))
            {
                $this->dropDownMen($dropdowndb, $item);
            } 
            else 
            {
                echo "<a class='nav-item nav-link' href='/php/htmlprojects/pages/{$key}.php?id={$key}'>{$item}</a>";
            }
        }
    }
    public function dropDownMen($dropdowndb, $dropdownName = "DropDown")
    {
        echo "<li class='nav-item dropdown'>
            <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
            {$dropdownName}
            </a>
            <div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>";

        foreach ($dropdowndb AS $ddKey => $ddItem)
        {
            echo "<a class='dropdown-item' href='/php/htmlprojects/pages/{$ddKey}.php'>{$ddItem}</a>";
        }
        echo "</div>";
    }
}
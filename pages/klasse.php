<?php

$saetze = [
    7 => "Bananen",
    5 => "Äpfel",
    6 => "Birnen",
    9 => "Erdbeeren",
    8 => "Maracuja"    
];

strcmp(var_dump("Äpfel"), var_dump("Banane"));
echo "<br/>";
var_dump(strcmp("Apfel", "Bananennnnnnnnnnnnn"));
echo "<br/>";

usort($saetze, function($a, $b)
{
    $umlaute = ["ä","ö","ü", "Ä","Ö","Ü"];
    if ( substr($a, 0) == $umlaute)
    {
        return var_dump($a);
    } else 
    {
        return strcmp($a, $b);
    }
});
var_dump($saetze);
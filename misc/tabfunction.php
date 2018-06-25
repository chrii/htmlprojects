<?php

function tableBuild($id="none", $fname="Insert Name", $sname="Insert Surname", $handle="Handleshortcut")
{
    return "<tr><th scope='row'>{$id}</th><td>{$fname}</td><td>{$sname}</td><td>{$handle}</td></tr>";
}

function tabledb($database)
{
    foreach ($database AS $key => $row)
    {
        $count = $key +1;
        echo tableBuild($count, $database[$key]["firstname"], $database[$key]["surname"], $database[$key]["handle"]);
    }
}
<?php
function autoload($autoload)
{
    if (file_exists("../apps/{$autoload}.php"))
    {
        require "../apps/{$autoload}.php";
    }
}
spl_autoload_register("autoload");
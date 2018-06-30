<?php
function autoload ($autoload)
{
    if (file_exists("../misc/{$autoload}.php"))
    {
        require "../misc/{$autoload}.php";
    }
}
spl_autoload_register("autoload");
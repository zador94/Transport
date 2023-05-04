<?php
function spl_Autoloader($class)
{
    include $class . '.php';
}
spl_autoload_register('spl_Autoloader');

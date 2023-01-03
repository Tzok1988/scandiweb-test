<?php

function autoload($class)
{
    $path1 = "Classes/{$class}.php";
    $path2 = "Classes/products/{$class}.php";
    $array_paths = array($path1, $path2);

    foreach ($array_paths as $path) {
        if (is_file($path)) {
            include_once $path;
        }
    }
}

spl_autoload_register('autoload', true);

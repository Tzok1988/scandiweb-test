<?php

class Route
{
    public static $getRoutes = [];
    public static $postRoutes = [];

    public static function get($route, $function)
    {
        self::$getRoutes[] = $route;
        if ($_SERVER['REQUEST_URI'] == $route) {
            $function->__invoke();
        }
    }

    public static function post($route, $function)
    {
        self::$postRoutes[] = $route;
        if ($_SERVER['REQUEST_URI'] == $route) {
            $function->__invoke();
        }
    }
}

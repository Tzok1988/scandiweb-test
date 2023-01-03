<?php

interface Validation
{
    public static function required($attr, $args);

    public static function unique($attr, $args);

    public static function regular_expression($attr, $args);

    public static function digit($attr, $args);
}

<?php

class AddProductsRequest implements Validation
{
    private static $validatedData = [];
    private static $errors = [];




    public static function required($attr, $args)
    {
        if (empty($_POST[$attr])) {
            self::$errors[] = "$attr is  required";
        }
    }

    public static function unique($attr, $args)
    {
        $result = Database::query("SELECT * FROM $args[0] WHERE $attr=:data", [':data' => $_POST[$attr]]);
        if (!empty($_POST[$attr]) && count($result) > 0) {
            self::$errors[] = "$attr entered is already exists, please enter another $attr";
        }
    }

    //
    public static function regular_expression($attr, $args)
    {
        if (!empty($_POST[$attr]) && (!preg_match($args[0], $_POST[$attr]) && is_numeric($_POST[$attr]))) {
            self::$errors[] = "$attr should be words , not a number";
        }
    }

    public static function digit($attr, $args)
    {
        if (!empty($_POST[$attr]) && !is_numeric($_POST[$attr])) {
            self::$errors[] = "$attr must be number";
        }
    }

    // Custom validation rules

    public static function required_without_all($attr, $args)
    {
        $flag = false;
        foreach ($args as $arg) {
            if (!empty($_POST[$arg])) {
                $flag = true;
                break;
            }
        }

        if (!$flag) {
            self::$errors[] = "  product type  value is required and not zero";
        }
    }

    public static function required_with($attr, $args)
    {
        if (empty($_POST[$attr])) {
            foreach ($args as $arg) {
                if (!empty($_POST[$arg])) {
                    self::$errors[] = "$attr is  required and not zero";
                    break;
                }
            }
        }
    }

    public static function prohibited_if($attr, $args)
    {
        if ($_POST['type'] != $args[0]) {
            $_POST[$attr] = null;
        }
    }



    public static function validate($rules): array
    {
        foreach ($rules as $key => $rule) {
            foreach ($rule as $item => $values) {
                self::$item($key, $values);
            }
            self::$validatedData[$key] = $_POST[$key];
        }

        return self::$validatedData;
    }

    public static function getErrors(): array
    {
        return self::$errors;
    }
}

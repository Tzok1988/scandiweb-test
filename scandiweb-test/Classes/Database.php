<?php
class Database
{
    public static $host  = "localhost";
    public static $dbName = "id19982757_scandiweb";
    public static $username = "id19982757_localhost";
    public static $password = "123456789P@ss";

    private static function connect()
    {
        $pdo = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$dbName . ";charset=utf8", self::$username, self::$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

    public static function query($query, $params = array())
    {
        $statement = self::connect()->prepare($query);
        $statement->execute($params);

        if (explode(' ', $query)[0] == 'SELECT') {
            $data = $statement->fetchAll();
            return $data;
        }
    }
}

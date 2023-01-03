<?php

abstract class Product
{
    public $data;


    public function __construct($data)
    {
        $this->data = $data;
    }



    abstract public function getData();

    public static function all()
    {
        return Database::query("SELECT * FROM products ");
    }

    public function add()
    {
        return Database::query("INSERT INTO products (sku, name, price, size, weight, height, width, length) VALUES (:sku, :name, :price, :size, :weight, :height, :width, :length)", [
            ':sku' => $this->data['sku'],
            ':name' => $this->data['name'],
            ':price' => $this->data['price'],
            ':size' => $this->data['size'],
            ':weight' => $this->data['weight'],
            ':height' => $this->data['height'],
            ':width' => $this->data['width'],
            ':length' => $this->data['length'],
        ]);
    }


    public static function delete($id)
    {
        return Database::query("DELETE FROM products WHERE id=:id", [':id' => $id]);
    }
}

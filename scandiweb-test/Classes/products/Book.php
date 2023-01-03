<?php

class Book extends Product
{
    public function __construct($data)
    {
        parent::__construct($data);
    }

    public function getData()
    {
        $spec = "Weight: " . $this->data['weight'] . " KG";

        $jsonList = [
            'sku' => $this->data['sku'],
            'name' => $this->data['name'],
            'price' => $this->data['price'],
            'spec' => $spec
        ];

        return $jsonList;
    }
}

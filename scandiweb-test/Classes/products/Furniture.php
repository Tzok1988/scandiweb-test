<?php

class Furniture extends Product
{
    public function __construct($data)
    {
        parent::__construct($data);
    }

    public function getData()
    {
        $spec = "Dimension: " . $this->data['height'] . "X" .  $this->data['width'] . "X" . $this->data['length'];

        $jsonList = [
            'sku' => $this->data['sku'],
            'name' => $this->data['name'],
            'price' => $this->data['price'],
            'spec' => $spec
        ];

        return $jsonList;
    }
}

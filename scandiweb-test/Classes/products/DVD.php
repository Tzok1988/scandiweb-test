<?php

class DVD extends Product
{
    public function __construct($data)
    {
        parent::__construct($data);
    }

    public function getData()
    {
        $spec = "Size: " . $this->data['size'] . " MB";

        $jsonList = [
            'sku' => $this->data['sku'],
            'name' => $this->data['name'],
            'price' => $this->data['price'],
            'spec' => $spec
        ];

        return $jsonList;
    }
}

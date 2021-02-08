<?php

class Product {
    public $name;
    public $price;

    function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getPrice(){
        return number_format($this->price, 2);
    }
}

$product1 = new Product("iPhone", 22);

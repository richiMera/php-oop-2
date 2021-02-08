<?php

require_once __DIR__. "/Product.php";

class Category extends Product{
    public $category;

    function __construct($name, $price, $category) {
        parent::__construct($name, $price);
        $this->category = $category;
    }

}

$product2 = new Category("iPhone", 880, "Technology");
var_dump($product2);
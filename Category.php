<?php

require_once __DIR__. "/Product.php";

class Category extends Product{
    public $category;

    function __construct($name, $price, $category) {
        parent::__construct($name, $price);
        $this->category = $category;
    }

}


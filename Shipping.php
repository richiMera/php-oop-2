<?php

require_once __DIR__. "/Product.php";

class Shipping extends Product {
    
    public $shippingCost;
    function __construct($name, $price, $shippingCost = "") {
        parent::__construct($name, $price);
        $this->shippingCost = $shippingCost;
    }

    public function shippingCostCalculator() {
        if ($this->price > 40) {
            $this->shippingCost = 0;
        } else {
            $this->shippingCost = 5;
        }
        return $this->shippingCost;
    }
}

// $product3 = new Shipping("iPhone", 35 );
// $product3-> shippingCostCalculator();


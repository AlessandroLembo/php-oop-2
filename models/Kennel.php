<?php

require_once __DIR__ . '/Product.php';

class Kennel extends Product
{
    public $measures;


    public function __construct($name, $code, $price, $category, $description, $product_weight, $quantity_available, $measures)
    {

        parent::__construct($name, $code, $price, $category, $description, $product_weight, $quantity_available);

        $this->measures = $measures;
    }
}

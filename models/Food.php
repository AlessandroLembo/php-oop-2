<?php

require_once __DIR__ . '/Product.php';

class Food extends Product
{
    public $ingredient;
    public $expiry_date;


    public function __construct($image, $name, $code, $price, Category $category, $description, $product_weight, $shipment, $quantity_available, $ingredient, $expiry_date)
    {

        parent::__construct($image, $name, $code, $price, $category, $description, $product_weight, $shipment, $quantity_available);

        $this->ingredient = $ingredient;
        $this->expiry_date = $expiry_date;
    }
}

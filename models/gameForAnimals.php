<?php

require_once __DIR__ . '/Product.php';

class Game extends Product
{
    public $material;
    public $return_product;
    public $color;


    public function __construct($image, $name, $code, $price, $category, $description, $product_weight, $quantity_available, $material, $return_product, $color)
    {

        parent::__construct($image, $name, $code, $price, $category, $description, $product_weight, $quantity_available);

        $this->material = $material;
        $this->return_product = $return_product;
        $this->color = $color;
    }
}

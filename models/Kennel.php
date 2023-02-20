<?php

require_once __DIR__ . '/GameForAnimals.php';

class Kennel extends Game
{
    public $measures;


    public function __construct($image, $name, $code, $price, $category, $description, $product_weight, $quantity_available, $material, $return_product, $color, $measures)
    {

        parent::__construct($image, $name, $code, $price, $category, $description, $product_weight, $quantity_available, $material, $return_product, $color);

        $this->measures = $measures;
    }
}

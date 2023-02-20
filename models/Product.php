<?php

class Product
{
    public $image;
    public $name;
    public $code;
    public $price;
    public $category;
    public $description;
    public $product_weight;
    public $shipment;
    public $quantity_available;


    public function __construct($image, $name, $code, $price, $category, $description, $product_weight, $quantity_available)
    {
        $this->image = $image;
        $this->name = $name;
        $this->code = $code;
        $this->price = $price;
        $this->category = $category;
        $this->description = $description;
        $this->product_weight = $product_weight;
        $this->quantity_available = $quantity_available;
    }

    public function uppercaseName()
    {
        return strtoupper($this->name);
    }

    public function getDiscountedPrice($percentage)
    {
        $discount = $this->price - ($this->price * ($percentage / 100));

        return number_format($discount, 2);
    }
}

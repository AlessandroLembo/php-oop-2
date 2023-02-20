<?php

class Product
{
    public $image;
    public $name;
    private $code;
    private $price;
    private $category;
    public $description;
    public $product_weight;
    public $shipment;
    public $quantity_available;


    public function __construct($image, $name, $code, $price, $category, $description, $product_weight, $quantity_available)
    {
        $this->image = $image;
        $this->name = $name;
        $this->setCode($code);
        $this->setPrice($price);
        $this->setCategory($category);
        $this->description = $description;
        $this->product_weight = $product_weight;
        $this->quantity_available = $quantity_available;
    }

    private function setCode($code)
    {
        if (is_numeric($code) || $code == '') return false;
        $this->code = $code;
    }

    public function getCode()
    {
        return $this->code;
    }

    private function setPrice($price)
    {
        if (!is_numeric($price) || $price < 0)  return false;
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    private function setCategory($category)
    {
        if ($category == '' || is_numeric($category)) return false;
        $this->category = $category;
    }

    public function getCategory()
    {
        return $this->category;
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

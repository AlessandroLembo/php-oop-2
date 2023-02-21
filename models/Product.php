<?php

require_once __DIR__ . '/Category.php';

class Product
{
    private $image;
    private $name;
    private $code;
    private $price;
    protected $category;
    public $description;
    public $product_weight;
    public $shipment;
    public $quantity_available;


    public function __construct($image, $name, $code, $price, Category $category, $description, $product_weight, $quantity_available)
    {
        $this->setImage($image);
        $this->setName($name);
        $this->setCode($code);
        $this->setPrice($price);
        $this->setCategory($category);
        $this->description = $description;
        $this->product_weight = $product_weight;
        $this->quantity_available = $quantity_available;
    }

    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setCode($code)
    {
        if (is_numeric($code) || $code == '') return false;
        $this->code = $code;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function buildTextCode()
    {
        return "Codice prodotto: " . $this->getCode();
    }

    public function setPrice($price)
    {
        if (!is_numeric($price) || $price < 0)  return false;
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function buildTextPrice()
    {
        return "Prezzo originale Euro " . $this->getPrice();
    }

    public function setCategory($category)
    {
        if ($category instanceof Category === false) return false;
        $this->category = $category;

        return $this;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function buildTextCategory()
    {
        return "Prodotto per " . $this->getCategory();
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

    public function buildTextDiscount()
    {
        return "Prezzo scontato Euro " . $this->getDiscountedPrice(15);
    }
}

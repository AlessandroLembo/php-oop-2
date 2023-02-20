<?php

class Product
{
    // public $image;
    public $name;
    public $code;
    public $price;
    public $category;
    public $description;
    public $product_weight;
    public $shipment;
    public $quantity_available;


    public function __construct($name, $code, $price, $category, $description, $product_weight, $quantity_available)
    {
        // $this->image = $image;
        $this->name = $name;
        $this->code = $code;
        $this->price = $price;
        $this->category = $category;
        $this->description = $description;
        $this->product_weight = $product_weight;
        $this->quantity_available = $quantity_available;
    }
}

$product1 = new Product('scatoletta pollo', 22345, 4, 'dog', 'Traboccante di carne magra di pollo e tacchino', '300 grams', 12);

echo $product1->description;



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop online</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>

</body>

</html>
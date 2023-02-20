<?php
require __DIR__ . '/models/Product.php';
require __DIR__ . '/models/Food.php';
require __DIR__ . '/models/gameForAnimals.php';
require __DIR__ . '/models/Kennel.php';



// $product1 = new Product('scatoletta pollo', 22345, 4, 'dog', 'Traboccante di carne magra di pollo e tacchino', '300 grams', 12);
// $food1 = new Food('scatoletta pollo', 22345, 4, 'dog', 'Traboccante di carne magra di pollo e tacchino', '300 grams', 12, 'water', '23-08-2023');
// $game1 = new Game('scatoletta pollo', 22345, 4, 'dog', 'Traboccante di carne magra di pollo e tacchino', '300 grams', 12, 'wood', 'yes', 'red');
$kennel1 = new Kennel('scatoletta pollo', 22345, 4, 'dog', 'Traboccante di carne magra di pollo e tacchino', '300 grams', 12, '50 height, 90 width, 50 depth');
echo $kennel1->measures;



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
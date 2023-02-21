<?php

require __DIR__ . '/data.php';

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

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-5">Scegli ciò che ti serve per il tuo animale domestico!</h1>
        <div class="row">
            <h2 class="text-center fs-1 text-uppercase mt-5">Food category</h2>
            <?php foreach ($foods as $food) include __DIR__ . '/models/card/Food_card.php'; ?>

        </div>

        <div class="row">
            <h2 class="text-center fs-1 text-uppercase mt-5">Games category</h2>
            <?php foreach ($games as $game) include __DIR__ . '/models/card/Game_card.php'; ?>

        </div>

        <div class="row">
            <h2 class="text-center fs-1 text-uppercase mt-5">Kennel category</h2>
            <?php foreach ($kennels as $kennel) include __DIR__ . '/models/card/Kennel_card.php'; ?>

        </div>
    </div>

</body>

</html>
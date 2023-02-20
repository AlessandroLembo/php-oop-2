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
            <?php foreach ($products as $product) : ?>
                <div class="col-4 my-5">
                    <div class="card pb-5" style="width: 18rem;">
                        <img src="<?= $product->image ?>" class="card-img-top" alt="<?= $product->name ?>">
                        <div class="card-body text-center">
                            <h2 class="card-title fs-5"><?= $product->uppercaseName() ?></h2>
                            <p class="card-text">Prezzo originale Euro <?= $product->price ?></p>
                            <p class="card-text">Prezzo scontato Euro <?= $product->getDiscountedPrice(20) ?></p>
                            <p class="card-text">Prodotto per <?= $product->category ?></p>
                            <p class="card-text fst-italic">Codice prodotto: <?= $product->code ?></p>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game card</title>
</head>

<body>
    <div class="col-6 my-5 p-5">
        <div class="card pb-5 mx-auto text-center card-product">
            <p class="card-text fs-4 pt-3"><strong>Prodotto per </strong><i class="<?= $game->getCategory()->getIcon() ?>"></i></p>
            <img src="<?= $game->getImage() ?>" class="card-img-top" alt="<?= $game->getName() ?>">
            <div class="card-body">
                <h2 class="card-title fs-5"><?= $game->uppercaseName() ?></h2>
                <p class="card-text"><?= $game->buildTextPrice() ?></p>
                <p class="card-text"><?= $game->buildTextDiscount() ?></p>
                <p class="card-text fst-italic"><?= $game->buildTextCode() ?></p>
                <p class="card-text fst-italic">Materiale prodotto: <?= $game->material ?></p>
                <p class="card-text fst-italic">Colore prodotto: <?= $game->color ?></p>
                <p class="card-text text-success">Possibiltà di reso: <i class="<?= $game->return_product ?>"></i></p>
            </div>
        </div>
    </div>
</body>

</html>
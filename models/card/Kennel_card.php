<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kennel card</title>
</head>

<body>
    <div class="col-6 my-5">
        <div class="card pb-5 mx-auto text-center card-product" style="width: 18rem;">
            <p class="card-text fs-4 pt-3"><strong>Prodotto per </strong><i class="<?= $kennel->getCategory()->getIcon() ?>"></i></p>
            <img src="<?= $kennel->getImage() ?>" class="card-img-top" alt="<?= $kennel->getName() ?>">
            <div class="card-body">
                <h2 class="card-title fs-5"><?= $kennel->uppercaseName() ?></h2>
                <p class="card-text"><?= $kennel->buildTextPrice() ?></p>
                <p class="card-text"><?= $kennel->buildTextDiscount() ?></p>
                <p class="card-text fst-italic"><?= $kennel->buildTextCode() ?></p>
                <p class="card-text fst-italic">Materiale prodotto: <?= $kennel->material ?></p>
                <p class="card-text fst-italic">Colore prodotto: <?= $kennel->color ?></p>
                <p class="card-text text-danger">Possibiltà di reso: <i class="<?= $kennel->return_product ?>"></i></p>

            </div>
        </div>
    </div>
</body>

</html>
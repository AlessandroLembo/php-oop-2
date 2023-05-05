<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food card</title>
</head>

<body>
    <div class="col-6 my-5">
        <div class="card pb-5 mx-auto text-center card-product" style="width: 18rem;">
            <p class="card-text fs-4 pt-3"><strong>Prodotto per </strong><i class="<?= $food->getCategory()->getIcon() ?>"></i></p>
            <img src="<?= $food->getImage() ?>" class="card-img-top" alt="<?= $food->getName() ?>">
            <div class="card-body">
                <h2 class="card-title fs-5"><?= $food->uppercaseName() ?></h2>
                <p class="card-text"><?= $food->buildTextPrice() ?></p>
                <p class="card-text"><?= $food->buildTextDiscount() ?></p>
                <p class="card-text fst-italic"><?= $food->buildTextCode() ?></p>

            </div>
        </div>
    </div>
</body>

</html>
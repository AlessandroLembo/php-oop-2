<?php
require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/Food.php';
require_once __DIR__ . '/models/GameForAnimals.php';
require_once __DIR__ . '/models/Kennel.php';



$chicken_can = new Food(
    'https://www.isoladeitesori.it/dw/image/v2/BGRZ_PRD/on/demandware.static/-/Sites-it-master-catalog/default/dwe881004e/idt/naturalpet_vaschetta_adult_pollo__tacchino_e_verdure_150_gr__8032611671562_160924.jpg?sw=800&sh=800',
    'Scatoletta di pollo',
    'Food - 22345',
    4,
    $category_dog,
    'Traboccante di carne magra di pollo e tacchino',
    '300 grams',
    3.99,
    12,
    'chicken',
    '08-2023'
);


$beef_can = new Food(
    'data:image/jpeg;base64,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',
    'Scatoletta di manzo',
    'Food - 18341',
    7,
    $category_cat,
    'Alimento umido completo per gatti adulti in lattina, che assicura freschezza e varietà per ogni pasto!',
    '340 grams',
    3.99,
    9,
    'beef',
    '01-2024'
);

$bone = new Game(
    'https://shop-cdn-m.mediazs.com/bilder/osso/gioco/hunter/per/ligiene/dentale/dei/cani/0/400/d_top_seller_1000x1000_0.jpg',
    'Hunter bone',
    'Game - 37890',
    18,
    $category_dog,
    'Osso gioco Hunter per la cura dei denti e delle gengive dei cani di taglia media e grande',
    '180 grams',
    3.99,
    6,
    'rubber',
    'fa-solid fa-circle-check',
    'orange/black',
);

$yoyo = new Game(
    'https://images.eprice.it/nobrand/0/Lightbox/150/213534150/B28DA8CA-73EF-4C44-B5B9-C55DF670132C.jpg',
    'Yo yo ball',
    'Game - 41232',
    5,
    $category_cat,
    'Giocattolo Elettrico Per Gatti Giocattolo Interattivo',
    '260 grams',
    3.99,
    14,
    'plastic',
    'fa-solid fa-circle-check',
    'pink/black',
);

$kennel_dog = new Kennel(
    'https://shop-cdn-m.mediazs.com/bilder/cuccia/per/cani/spike/classic/1/400/icon_topseller_1_56__1.jpg',
    'Spike kenel',
    'Kennel - 23767',
    34,
    $category_dog,
    'Cuccia per cani Spike Comfort in legno pretrattato, resistente alle intemperie, con tetto spiovente ',
    '4,5 kilograms',
    3.99,
    3,
    'wood',
    'fa-solid fa-xmark',
    'brown',
    'P 72 x L 76 x H 76 cm'
);


$bed_cat = new Kennel(
    'https://shop-cdn-m.mediazs.com/bilder/letto/cozy/kingdom/9/400/catbed_tree_11_63_9.jpg',
    'Cozy Cord',
    'Kennel - 11889',
    29,
    $category_cat,
    'Morbido letto Cozy Cord per cani e gatti in simil velluto a coste larghe grigio scuro',
    '2,3 kilograms',
    'gratis',
    5,
    'peluche',
    'fa-solid fa-xmark',
    'grey',
    'L 51 x P 43 x H 15 cm'
);


$foods = [$chicken_can, $beef_can];
$games = [$bone, $yoyo];
$kennels = [$kennel_dog, $bed_cat];

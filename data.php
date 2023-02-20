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
    '<i class="fa-solid fa-dog"></i>',
    'Traboccante di carne magra di pollo e tacchino',
    '300 grams',
    12,
    'chicken',
    '08-2023'
);

$beef_can = new Food(
    'https://www.isoladeitesori.it/dw/image/v2/BGRZ_PRD/on/demandware.static/-/Sites-it-master-catalog/default/dw0009e0ac/idt/142645_1_2.jpg?sw=800&sh=800',
    'Scatoletta di manzo',
    'Food - 18341',
    5,
    '<i class="fa-solid fa-cat"></i>',
    'Alimento umido completo per gatti adulti in lattina, che assicura freschezza e varietà per ogni pasto!',
    '340 grams',
    9,
    'beef',
    '01-2024'
);

$bone = new Game(
    'https://shop-cdn-m.mediazs.com/bilder/osso/gioco/hunter/per/ligiene/dentale/dei/cani/0/400/d_top_seller_1000x1000_0.jpg',
    'Hunter bone',
    'Game - 37890',
    8,
    '<i class="fa-solid fa-dog"></i>',
    'Osso gioco Hunter per la cura dei denti e delle gengive dei cani di taglia media e grande',
    '180 grams',
    6,
    'rubber',
    'yes',
    'orange/black'
);

$yoyo = new Game(
    'https://images.eprice.it/nobrand/0/Lightbox/150/213534150/B28DA8CA-73EF-4C44-B5B9-C55DF670132C.jpg',
    'Yo yo ball',
    'Game - 41232',
    5,
    '<i class="fa-solid fa-cat"></i>',
    'Giocattolo Elettrico Per Gatti Giocattolo Interattivo',
    '260 grams',
    14,
    'plastic',
    'yes',
    'pink/black'
);

$kennel_dog = new Kennel(
    'https://shop-cdn-m.mediazs.com/bilder/cuccia/per/cani/spike/classic/1/400/icon_topseller_1_56__1.jpg',
    'Spike kenel',
    'Kennel - 23767',
    34,
    '<i class="fa-solid fa-dog"></i>',
    'Cuccia per cani Spike Comfort in legno pretrattato, resistente alle intemperie, con tetto spiovente ',
    '4,5 kilograms',
    3,
    'wood',
    'no',
    'brown',
    'P 72 x L 76 x H 76 cm'
);

$bed_cat = new Kennel(
    'https://shop-cdn-m.mediazs.com/bilder/letto/cozy/kingdom/9/400/catbed_tree_11_63_9.jpg',
    'Cozy Cord',
    'Kennel - 11889',
    29,
    '<i class="fa-solid fa-cat"></i>',
    'Morbido letto Cozy Cord per cani e gatti in simil velluto a coste larghe grigio scuro',
    '2,3 kilograms',
    5,
    'peluche',
    'no',
    'grey',
    'L 51 x P 43 x H 15 cm'
);

$products = [$chicken_can, $beef_can, $bone, $yoyo, $kennel_dog, $bed_cat];

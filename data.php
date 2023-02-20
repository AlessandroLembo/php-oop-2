<?php
require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/Food.php';
require_once __DIR__ . '/models/GameForAnimals.php';
require_once __DIR__ . '/models/Kennel.php';


$chicken_can = new Food(
    'scatoletta di pollo',
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
    'scatoletta di manzo',
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

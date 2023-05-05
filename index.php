<?php require __DIR__ . '/data.php'; ?>

<?php include __DIR__ . '/head.php'; ?>

<body>
    <div class="container">
        <h1 class="text-center mt-5">Scegli ciò che ti serve per il tuo animale domestico!</h1>
        <div class="row wrapper">
            <h2 class="text-center fs-1 text-uppercase mt-5">Food category</h2>
            <?php foreach ($foods as $food) include __DIR__ . '/models/card/Food_card.php'; ?>

        </div>

        <div class="row wrapper">
            <h2 class="text-center fs-1 text-uppercase mt-5">Games category</h2>
            <?php foreach ($games as $game) include __DIR__ . '/models/card/Game_card.php'; ?>

        </div>

        <div class="row wrapper">
            <h2 class="text-center fs-1 text-uppercase mt-5">Kennel category</h2>
            <?php foreach ($kennels as $kennel) include __DIR__ . '/models/card/Kennel_card.php'; ?>

        </div>
    </div>

</body>

</html>
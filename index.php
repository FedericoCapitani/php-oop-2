<?php

require __DIR__ . '/db.php';
include __DIR__ . '/models/Product.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodotti per animali</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Prodotti per animali</h1>
    </header>
    <main>
        <div class="container">
            <?php foreach ($products as $product) : ?>
            <div class="card">
                <img src="<?php echo $product->img_path ?>" alt="">
                <p>Nome articolo: <?php echo $product->name?></p>
                <p>Tipo di articolo: <?php echo $product->type_of_article ?></p>
            </div>
            <?php endforeach ?>
        </div>
    </main>
</body>
</html>
<?php

require __DIR__ . '/db.php';
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
                <p>Nome articolo: <?php echo $product->name ?></p>
                <p>Prezzo: <?php echo $product->price ?> €</p>
                <p>Ha sconto: <?php echo $product->sconto ?> </p>
                <? if($product->type_of_article == 'cibo'): ?>
                <p>Peso: <?php echo $product->weight ?> Kg</p>
                <p>Scade il: <?php echo $product->expiration_date ?></p>
                <? elseif($product->type_of_article == 'essenziali'): ?>
                <p>Dimensioni: <?php echo $product->dimensions ?> </p>
                <p>Taglia: <?php echo $product->size ?> </p>
                <? endif; ?>
                <?php if($can_buy) { ?>
                    <button class="can_buy">Compra subito</button>
                <?php }else{ ?>
                    <button class="cannot_buy">carta scaduta</button>
                <?php } ?>
            </div>
            <?php endforeach ?>
        </div>
    </main>
</body>
</html>
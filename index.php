<?php
require_once __DIR__ . '/Prodotti.php';
require_once __DIR__ . '/Sconto_flash.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    
</head>
<body>
    <header>
        <h1>Prodotti</h1>
    </header>
    <main>
        <div class="prod">
            <?php //istanza prodotto
                $prodotto1 = new Prodotti('T-shirt', 'Abbigliamento', '22');
            ?>
            <h2>
                <?php echo $prodotto1->getNome();?>
            </h2>
            <h3>
                <?php echo $prodotto1->getTipo();?>
            </h3>
            <h3>
                Prezzo: <?php echo $prodotto1->getPrezzo() . ' ' . 'euro';?> 
            </h3>
            <p>
                Sconto: <?php echo $prodotto1->getSconto(); ?>%
            </p>
        </div>
        <div class="prod">
            <?php //istanza prodotto
                $prodotto2 = new Prodotti('Tazza', 'Prodotti per la casa', '11');
            ?>
            <h2>
                <?php echo $prodotto2->getNome();?>
            </h2>
            <h3>
                <?php echo $prodotto2->getTipo();?>
            </h3>
            <h3>
                Prezzo: <?php echo $prodotto2->getPrezzo() . ' ' . 'euro';?> 
            </h3>
            <p>
                Sconto: <?php echo $prodotto2->getSconto(); ?>%
            </p>
        </div>
        <div class="prod">
            <?php //istanza prodotto
                $prodotto3 = new Prodotti('Sapone', 'Cosmetici', '5');
            ?>
            <h2>
                <?php echo $prodotto3->getNome();?>
            </h2>
            <h3>
                <?php echo $prodotto3->getTipo();?>
            </h3>
            <h3>
                Prezzo: <?php echo $prodotto3->getPrezzo() . ' ' . 'euro';?> 
            </h3>
            <p>
                Sconto: <?php echo $prodotto3->getSconto(); ?>%
            </p>
        </div>
        <div class="prod">
            <?php //istanza prodotto
                $flash1 = new Sconto_flash('Pennarello', 'Cancelleria', '9', 'si');
            ?>
            <h2>
                <?php echo $flash1->getNome();?>
            </h2>
            <h3>
                <?php echo $flash1->getTipo();?>
            </h3>
            <h3>
                Prezzo: <?php echo $flash1->getPrezzo() . ' ' . 'euro';?> 
            </h3>
            <p>
                Sconto della giornata: <?php echo $flash1->getSconto(); ?>%
            </p>

            
        </div>
    </main>
</body>
</html>
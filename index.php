<?php
require_once __DIR__ . '/User.php';
require_once __DIR__ . '../Products/Ball.php';
require_once __DIR__ . '../Products/Jersey.php';
require_once __DIR__ . '../Products/Sweatshirt.php';

$palla = Palla('Spalding', 'G7', '49,99');
$canotta = Canotta('Golden State Warriors Nike Canottiera Icon Swingman - Stephen Curry - Uomo', 'M', '89,95');
$felpa = Felpa('Felpa con cappuccio con logo Vintage Vibe Graphic di Golden State Warriors Fanatics - Uomo', 'M', '63,00');


$nicolo = new User('Nicolò', 'Carluccio', 'nicolo.carluccio3@gmail.com');
$nicolo->aggiungiProdotto($palla);
$nicolo->aggiungiProdotto($canotta);
$nicolo->aggiungiProdotto($felpa);
$nicolo_carrello = $nicolo->getCarrello();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YamamotoNutriotionSite</title>
</head>
<body>
    <h1>Welcome <?php echo $nicolo->getFullName(); ?> this is a your basket </h1>

    <?php foreach($nicolo_carrello as $product) { ?>
        <div>
            <h2><?php echo $product->nameProduct ?></h2>
            <h3> <?php echo $product->size; ?></h3>
             <h3> <?php echo $product->price; ?> £</h3>
        </div>
    <?php } ?>
</body>
</html>
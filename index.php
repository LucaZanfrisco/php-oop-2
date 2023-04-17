<?php
require_once __DIR__ . '/Models/Category/Food.php';
require_once __DIR__ . '/Models/Category/Toys.php';
require_once __DIR__ . '/Models/Category/Accessories.php';
$productFood = new Food('Royal Canin Mini ', 20, 'immagine', 200, 'dog', array('carne', 'verdure'));
$productToy = new Toy('nome', 20, 'immagine', 200, 'dog', 'Rimbalza male', array(20, 30));
$productAccessory = new Accessory('nome', 20, 'immagine', 200, 'dog', 'Legno', array(20, 50, 30));
$results= [$productFood,$productToy,$productAccessory];
var_dump($results);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BoolShop</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="src/style/style.css">
</head>

<body>
    <div class="container">
        <?php foreach($results as $result): ?>
            <div><?php echo $result ?></div>
        <?php endforeach ?>
    </div>
</body>

</html>
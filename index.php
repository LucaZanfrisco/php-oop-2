<?php 
    require_once __DIR__ . '/Models/Animals.php';
    $product = new Product('Cibo per cani', 20,'prova',200, new Category('gioco'));
    var_dump($product);
?>

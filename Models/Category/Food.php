<?php 
    require_once __DIR__ . '/../Animals.php';

    class Food extends Animal{
        public array $ingredients;

        public function __construct($_name, $_price, $_image, $_weight, $_animal, $_ingredient)
        {
            parent::__construct($_name, $_price, $_image, $_weight, $_animal);
            $this->ingredients = $_ingredient;
        }
    }
    
?>
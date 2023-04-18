<?php 
    require_once __DIR__ . '/../Animals.php';

    class Food extends Animal{
        private array $ingredients;

        public function __construct($_name, $_price, $_image, $_weight, $_animal, $_ingredient)
        {
            parent::__construct($_name, $_price, $_image, $_weight, $_animal);
            $this->ingredients = $_ingredient;
        }

        public function get_ingredients(){
            return $this->ingredients;
        }
    }
    
?>
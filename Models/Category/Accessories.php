<?php
    require_once __DIR__ . '/../Animals.php';
    
    class Accessory extends Animal{
        private string $material;
        private array $dimension;

        public function __construct($_name, $_price, $_image, $_weight, $_animal,$_material,$_dimension){

            parent::__construct($_name, $_price, $_image, $_weight, $_animal);
            $this->material = $_material;
            $this->dimension = $_dimension;

        }
    }
?>
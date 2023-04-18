<?php 
    require_once __DIR__ . '/../Animals.php';
    class Toy extends Animal{
        private string $description;
        private array $dimension;

        public function __construct($_name, $_price, $_image, $_weight, $_animal, $_description, $_dimension)
        {
            parent::__construct($_name, $_price, $_image, $_weight, $_animal);
            $this->description = $_description;
            $this->dimension = $_dimension;
        }

        public function get_description(){
            return $this->description;
        }

        public function get_dimension(){
            return $this->dimension;
        }
    }
?>
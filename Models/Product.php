<?php  
    class Product {
        private string $name;
        private float $price;
        private string $image;
        private int $weight;
        private string $type;

        public function __construct($_name,$_price,$_image,$_weight, Category $_type){
            $this->name = $_name;
            $this->price = $_price;
            $this->image = $_image;
            $this->weight = $_weight;
        }
    }
?>
<?php  
    class Product {
        public string $name;
        public float $price;
        public string $image;
        public int $weight;

        public function __construct($_name,$_price,$_image,$_weight){
            $this->name = $_name;
            $this->price = $_price;
            $this->image = $_image;
            $this->weight = $_weight;
        }
    }
?>
<?php  
    class Product {
        private string $name;
        private float $price;
        private string $image;
        private int $weight;

        public function __construct($_name,$_price,$_image,$_weight){
            $this->name = $_name;
            $this->price = $_price;
            $this->image = $_image;
            $this->weight = $_weight;
        }

        public function get_name(){
            return $this->name;
        }
        public function get_price(){
            return $this->price;
        }
        public function get_image(){
            return $this->image;
        }
        public function get_weight(){
            return $this->weight;
        }
    }
?>
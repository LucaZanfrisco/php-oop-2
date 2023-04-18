<?php  
    require_once __DIR__ . '/../Traits/Shop.php';
    class Product {

        use Shop;

        private string $name;
        private $price;
        private string $image;
        private int $weight;

        public function __construct($_name,$_price,$_image,$_weight){
            $this->name = $_name;
            $this->set_price($_price);
            $this->image = $_image;
            $this->weight = $_weight;
        }

        public function get_name(){
            return $this->name;
        }
        public function set_price($_price){
            if(!is_float($_price) && $_price <= 0){
                throw new Exception('il prezzo deve essere un numero e maggiore di zero');
            }
            $this->price = $_price;
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
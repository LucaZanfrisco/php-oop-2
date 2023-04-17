<?php
    require_once __DIR__ . '/Product.php';
    
    class Animal extends Product{
        private string $AnimalType;
        private string $petIcon;

        public function __construct($_name, $_price, $_image, $_weight,$_animal)
        {
            parent::__construct($_name, $_price, $_image, $_weight);
            $this->AnimalType = $_animal;
            $this->petIcon = $this->set_pet_icon();
        }

        public function set_pet_icon(){
            switch($this->AnimalType){
                case 'dog':
                    return '<i class="fa-solid fa-dog"></i>';
                    break;
                case 'bird': 
                    return '<i class="fa-solid fa-dove"></i>';
                    break;
                case 'cat':
                    return '<i class="fa-solid fa-cat"></i>';
                    break;
                case 'fish':
                    return '<i class="fa-solid fa-fish"></i>';
                    break;  
                default:
                    return '<i class="fa-solid fa-exclamation"></i>';  
            }
        }
    }
?>
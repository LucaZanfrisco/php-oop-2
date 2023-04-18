<?php
require_once __DIR__ . '/Product.php';

/**
 * Animal
 */
class Animal extends Product
{
    private string $AnimalType;
    private string $petIcon;
    
    /**
     * __construct
     *
     * @param  string $_name
     * @param  float $_price
     * @param  string $_image
     * @param  int $_weight
     * @param  string $_animal
     * @return void
     */
    public function __construct($_name, $_price, $_image, $_weight, $_animal)
    {
        parent::__construct($_name, $_price, $_image, $_weight);
        $this->AnimalType = $_animal;
        $this->petIcon = $this->set_pet_icon();
    }

    /**
     * get_animal_type
     *  permette di stampare in pagina il contenuto privato di AnimalType
     * @return string
     */
    public function get_animal_type()
    {
        return $this->AnimalType;
    }

    /**
     * set_pet_icon
     * imposta l'icona del prodotto in base alla categoria di animale
     * @return string
     */
    public function set_pet_icon()
    {
        switch ($this->AnimalType) {
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
                return 'nessun animale';
        }
    }

    /**
     * get_pet_icon
     * permette di stampare in pagina il contenuto privato di petIcon
     * @return string
     */
    public function get_pet_icon()
    {
        return $this->petIcon;
    }
}

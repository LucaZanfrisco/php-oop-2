<?php
require_once __DIR__ . '/../Animals.php';

/**
 * Food
 * classe Cibo estensione della classe animale
 */
class Food extends Animal
{
    private array $ingredients;

    /**
     * __construct
     *
     * @param  string $_name
     * @param  float $_price
     * @param  string $_image
     * @param  int $_weight
     * @param  string $_animal
     * @param  array $_ingredient
     * @return void
     */
    public function __construct($_name, $_price, $_image, $_weight, $_animal, $_ingredient)
    {
        parent::__construct($_name, $_price, $_image, $_weight, $_animal);
        $this->ingredients = $_ingredient;
    }

    /**
     * get_ingredients
     *  ritorna una lista di ingredienti
     * @return array
     */
    public function get_ingredients()
    {
        return $this->ingredients;
    }
}

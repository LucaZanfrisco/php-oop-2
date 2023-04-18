<?php
require_once __DIR__ . '/../Animals.php';
/**
 * Toy
 * Classe gioco estensione della classe animale
 */
class Toy extends Animal
{
    private string $description;
    private array $dimension;

    /**
     * __construct
     *
     * @param  string $_name
     * @param  float $_price
     * @param  string $_image
     * @param  int $_weight
     * @param  string $_animal
     * @param  string $_description
     * @param  array $_dimension
     * @return void
     */
    public function __construct($_name, $_price, $_image, $_weight, $_animal, $_description, $_dimension)
    {
        parent::__construct($_name, $_price, $_image, $_weight, $_animal);
        $this->description = $_description;
        $this->dimension = $_dimension;
    }
    
    /**
     * get_description
     *  ritorna la descrizione del gioco
     * @return string
     */
    public function get_description()
    {
        return $this->description;
    }
    
    /**
     * get_dimension
     *  ritorna la lista delle dimensioni del gioco 
     * @return array
     */
    public function get_dimension()
    {
        return $this->dimension;
    }
}

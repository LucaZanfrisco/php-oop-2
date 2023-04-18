<?php
require_once __DIR__ . '/../Animals.php';

/**
 * Accessory
 * classe accessori estensione della classe animale
 */
class Accessory extends Animal
{
    private string $material;
    private array $dimension;

    /**
     * __construct
     * @param  string $_name
     * @param  float $_price
     * @param  string $_image
     * @param  int $_weight
     * @param  string $_animal
     * @param  string $_material
     * @param  array $_dimension
     * @return void
     */
    public function __construct($_name, $_price, $_image, $_weight, $_animal, $_material, $_dimension)
    {

        parent::__construct($_name, $_price, $_image, $_weight, $_animal);
        $this->material = $_material;
        $this->dimension = $_dimension;
    }

    /**
     * get_material
     * ritorna la tipologia di materiale dell'accessorio
     * @return string
     */
    public function get_material()
    {
        return $this->material;
    }

    /**
     * get_dimension
     *  ritorna le lista delle dimensioni dell'accessorio
     * @return array
     */
    public function get_dimension()
    {
        return $this->dimension;
    }
}

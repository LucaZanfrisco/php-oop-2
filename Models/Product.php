<?php
require_once __DIR__ . '/../Traits/Shop.php';
/**
 * Product
 * Classe generale di un prodotto
 */
class Product
{

    use Shop;

    private string $name;
    private $price;
    private string $image;
    private int $weight;

    /**
     * __construct
     *
     * @param  string $_name
     * @param  float $_price
     * @param  string $_image
     * @param  int $_weight
     * @return void
     */
    public function __construct($_name, $_price, $_image, $_weight)
    {
        $this->name = $_name;
        $this->set_price($_price);
        $this->image = $_image;
        $this->weight = $_weight;
    }

    /**
     * get_name
     * ritorna il valore inserito all'interno di name
     * @return string
     */
    public function get_name()
    {
        return $this->name;
    }

    /**
     * set_price
     * inserisce il valore passato del prezzo del prodotto e nel caso in cui sia stato inserito un valore sbagliato ritorna una Eccezione
     * @param  float $_price
     */
    public function set_price($_price)
    {
        if (!is_float($_price) && $_price <= 0) {
            throw new Exception('il prezzo deve essere un numero e maggiore di zero');
        }
        $this->price = $_price;
    }
    
    /**
     * get_price
     * ritorna il valore all'interno della variabile prezzo
     * @return float
     */
    public function get_price()
    {
        return $this->price;
    }

    /**
     * get_image
     * ritorna la path dell'immagine del prodotto
     * @return string
     */
    public function get_image()
    {
        return $this->image;
    }

    /**
     * get_weight
     *  ritonrna il valore del peso del prodotto
     * @return int
     */
    public function get_weight()
    {
        return $this->weight;
    }
}

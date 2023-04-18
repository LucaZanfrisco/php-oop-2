<?php 
trait Shop {
    private string $ShopName;
    private float $lat = 22.7;
    private float $long = 13.4;
    
    /**
     * set_shop_name
     * imposta il nome del negozio
     * @param  string $_shopName
     * @return void
     */
    public function set_shop_name($_shopName){
        $this->ShopName = $_shopName;
    }    

    /**
     * get_shop_name
     *  ritorna il nome del negozio
     * @return string
     */
    public function get_shop_name(){
        return $this->ShopName;
    } 

    /**
     * set_lat
     *  imposta la latitudine del negozio
     * @param  float $_lat
     * @return void
     */
    public function set_lat($_lat){
        $this->lat = $_lat;
    }

    /**
     * set_long
     *  imposta la longitudione del negozio
     * @param  float $_long
     * @return void
     */
    public function set_long($_long){
        $this->long = $_long;
    }  
      
    /**
     * get_distance
     *  calcola la distanza da te ed il negozio
     * @return float
     */
    public function get_distance(){
        $distance = sqrt(pow(($this->lat-0),2)+pow(($this->long-0),2));
        return number_format($distance,2,'.');
    }
}
?>
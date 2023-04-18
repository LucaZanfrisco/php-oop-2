<?php 
trait Shop {
    private $ShopName;
    private $lat = 22.7;
    private $long = 13.4;

    public function set_shop_name($_shopName){
        $this->ShopName = $_shopName;
    }
    public function get_shop_name(){
        return $this->ShopName;
    }
    public function set_lat($_lat){
        $this->lat = $_lat;
    }
    public function set_long($_long){
        $this->long = $_long;
    }
    public function get_distance(){
        $distance = sqrt(pow(($this->lat-0),2)+pow(($this->long-0),2));
        return number_format($distance,2,'.');
    }
}
?>
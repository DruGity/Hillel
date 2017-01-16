<?php

namespace classes;

class Model extends Product 
{
    const TIME_FOR_OFFER2 = '01.01.2017';
    
    public $specialOffer;

    public function __construct($type = "", $name = "", $price = "", $descr = "", $manuf = "", $color = "", $so = "")
    {
        parent::__construct($type, $name, $price, $descr, $manuf, $color);
        $this->specialOffer = $so;
    }

    public function show()
    {
        parent::show(); 
        echo "Special Offer: " . $this->specialOffer . "<br />";
    }

    public function getSpecial()
    {
        return $this->specialOffer;
    }


}
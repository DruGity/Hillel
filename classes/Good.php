<?php

namespace classes;

class Good extends Product 
{
    private $specialOffer2;

    const TIME_FOR_OFFER = '04.02.2017';

    public function __construct($type = "", $name = "", $price = "", $descr = "", $manuf = "", $color = "", $so2 = "")
    {
        parent::__construct($type, $name, $price, $descr, $manuf, $color);
        $this->specialOffer2 = $so2;
    }

    public function show()
    {
        parent::show();
        echo "Special Offer: " . $this->specialOffer2 . "<br />";
        
    }

    public static function showCounter()
    {
          echo "Counter: " . self::$counter . "<br />";
    }

    public function getSpecialOf(){

        return $this->specialOffer2;
    }


    
}
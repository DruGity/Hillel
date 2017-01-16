<?php

namespace classes;


   class Product extends BaseProduct
{   
    

    public function __construct($type = "", $name = "", $price = "", $descr = "", $manuf = "", $color = "")
    {   $this->prodType = $type;
        $this->prodName = $name;
        $this->prodPrice = $price;
        $this->prodDescription = $descr;
        $this->prodManufacturer = $manuf;
        $this->prodColor = $color;
    }

    public function show()
    {   echo "Type: " . $this->prodType . "<br />";
        echo "Name: " . $this->prodName . "<br />";
        echo "Price: " . $this->prodPrice . "<br />";
        echo "Description: " . $this->prodDescription . "<br />";
        echo "Manufacturer: " . $this->prodManufacturer . "<br />";
        echo "Color: " . $this->prodColor . "<br />";  
        self::$counter++;
    }

    public static function showCounter()
    {
        echo "Counter: " . self::$counter . "<br />";
    }
    

   
}
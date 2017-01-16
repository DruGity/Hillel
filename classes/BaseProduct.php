<?php

namespace classes;

abstract class BaseProduct   {

	public $prodType;

    public $prodName;

    public $prodPrice;

    public $prodDescription;

    public $prodManufacturer;

    public $prodColor;

    static $counter;

    public function __construct($type = "", $name = "", $price = "", $descr = "", $manuf = "", $color = "")
    {   
        $this->prodType = $type;
        $this->prodName = $name;
        $this->prodPrice = $price;
        $this->prodDescription = $descr;
        $this->prodManufacturer = $manuf;
        $this->prodColor = $color;
    }

    public function show()
    {   
       echo "Type: " . $this->prodType . "<br />";
        echo "Name: " . $this->prodName . "<br />";
        echo "Price: " . $this->prodPrice . "<br />";
        echo "Description: " . $this->prodDescription . "<br />";
        echo "Manufacturer: " . $this->prodManufacturer . "<br />";
        echo "Color: " . $this->prodColor . "<br />";  
        echo "Counter: " . self::$counter++ . "<br />";
    }

    public static function showCounter()
    {
        echo "Counter: " . self::$counter . "<br />";
    }

    public function getType()
    {
        return $this->prodType;
    }

    public function getName()
    {
        return $this->prodName;
    }

    public function getPrice()
    {
        return $this->prodPrice;
    }

    public function getDescription()
    {
        return $this->prodDescription;
    }

    public function getManufacturer()
    {
        return $this->prodManufacturer;
    }

    public function getColor()
    {
        return $this->prodColor;
    }
}
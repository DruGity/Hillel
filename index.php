<?php

use classes\Product;
use classes\Model;
use classes\Good;
use classes\ORM;

include "Init.php";

$prod = new Product("Smartphone", "Iphone7", "1000", "Very expensive phone", "Apple", "White");

$prod2 = new Model("Tablet", "Ipad mini", "599", "Pretty nice product", "Apple", "Black", "-100$ till " . " " . Model::TIME_FOR_OFFER2);

$prod3 = new Good("Headphones", "CX300II", "50", " Its comfortable headphones ", "sennheiser ", "yellow", "-10$ till" . " " . Good::TIME_FOR_OFFER);

$orm = new ORM("mysql:dbname=myshop;host=127.0.0.1", "root");


//$orm->saveProduct($prod);

//$orm->saveModel($prod2);

//$orm->saveGood($prod3);

$product = $orm->getProductById(1);
$product->show(); 
$product->showCounter();

echo "<br />";

$model = $orm->getModelById(1);
$model->show();
$model->showCounter();


echo "<br />";

$good = $orm->getGoodById(1);
$good->show();
$good->showCounter();

//$arr = [$prod, $prod2, $prod3];

//foreach ($arr as $index => $value) {
//	echo  "<br />";
//	$value->show();
  //  Product::showCounter();
//}









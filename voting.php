<?php

use answers\OrmForVoting;
use answers\OS;

include "Init.php";

$orm = new OrmForVoting("mysql:dbname=answers;host=127.0.0.1", "root");

$all = $orm->getAnswerAll();


$ans = new OS ($all[0], $all[1], $all[2]);


if (!empty($_POST["a1"]))  {

	$var1 = $_POST["a1"];
}

if (!empty($_POST["a2"]))  {

	$var2 = $_POST["a2"];
}

if (!empty($_POST["a3"]))  {

	$var3 = $_POST["a3"];
}



if ( 
(isset($var1) and isset($var2)) or 
(isset($var2) and isset($var3)) or 
(isset($var1) and isset($var3)) or 
(isset($var1) and isset($var2) and isset($var3))) 
{

	echo "Вы должны выбрать только один вариант";
}
elseif (isset($var1)) {

	$golos1 = $orm->saveWindows($ans);
	$ans->show();

}
elseif(isset($var2)) {

	$golos2 = $orm->saveLinux($ans);
	$ans->show();
} 
elseif(isset($var3)) {

	$golos3 = $orm->saveMac($ans);
	$ans->show();
} 

else{

echo "Вы не выбрали ни одного варианта";

}







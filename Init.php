<?php

function __autoload($c)
{
    
    $classFileName = $c . ".php";
    require_once $classFileName;
}




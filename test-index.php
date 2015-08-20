<?php
$secretkey = "klucz";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require("Model\Comparison.php"); 


parse_str(implode('&', array_slice($argv, 1)), $_GET);

$apikey = $_GET['key'];
$urlFile = $_GET['file'];


if($apikey == $secretkey){
    if(isset($urlFile)){

        $dane = New Comparison;
        print_r($dane->init($urlFile));
        echo "Memory Usage: " . memory_get_usage()/1048576 . " MB \n";
    }
}else {echo "Klucz API nieprawidłowy";}

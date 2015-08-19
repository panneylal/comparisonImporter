<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require("Model\Comparison.php"); 


$dane = New Comparison;
print_r($dane->startParsing('http://www.w3schools.com/xml/note.xml'));
echo "ENd!";

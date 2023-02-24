<?php
$numerito = "123";

var_dump($numerito); #Aqui es un string
$numerito = (int) $numerito; //Aqui es un int
var_dump($numerito);

echo "\n";

$dias = 5.89;
$dias = (int) $dias; //Quita la parte decimal y mantiene la parte entera
var_dump($dias);

echo "\n";

$bandera = 412;
$bandera = (bool) $bandera; //Si se hace casting de un numero randon, siempre sera true
var_dump($bandera);
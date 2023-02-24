<?php

echo "Convertidor de tiempo a segundos\n\n";
$horas = (float)readline("Ingresa las horas: ");
$minutos = (float)readline("ahora pon los minutos: ");
$segundos = (float)readline("Por ultimos los segundos: ");

$horas = $horas ?? 0;
$minutos = $minutos ?? 0;
$segundos = $segundos ?? 0;

define("HORA_SEGUNDOS",3600); # 1 hora equivale a 3600 segundos
define("MINUTO_SEGUNDOS",60); #1 minuto equivale a 60 segundos

$resultado = $horas*HORA_SEGUNDOS + $minutos*MINUTO_SEGUNDOS + $segundos;

echo "Tiempo ingresado: $horas : $minutos : $segundos \n";
echo "El tiempo en segundos es ". number_format ($resultado,2)." segundos";
<?php
$michis_felinos = true;
$michis_4_patas = true;
$michis_vuelan = false;
$michis_programan_con_PHP = false;

echo "Operador AND \n";
var_dump($michis_felinos && $michis_4_patas);
var_dump($michis_4_patas && $michis_vuelan);
var_dump($michis_vuelan and $michis_programan_con_PHP);

echo "\n";

echo "Operador OR\n";
var_dump($michis_felinos || $michis_vuelan);
var_dump($michis_felinos || $michis_programan_con_PHP);
var_dump($michis_vuelan or $michis_programan_con_PHP);

#Rompiendo el sistema
$resultado = $michis_felinos and $michis_programan_con_PHP;
var_dump ($resultado); #Aqui el resultado da true
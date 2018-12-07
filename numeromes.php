<?php
require ('../Ejercicios_php_7/funcion.php');
//recoger datos

$num =funcion:: datoIntroducido('num');
$res= funcion::numeromes($num);
$salida= 'El numero introducido corresponde al mes de : '.$res;
print_r($salida);
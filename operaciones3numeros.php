<?php
require ('../Ejercicios_php_7/funcion.php');
//recoger Datos

$num1 = funcion:: datoIntroducido('num1');
$num2 = funcion:: datoIntroducido('num2');
$num3 = funcion:: datoIntroducido('num3');

$res =funcion:: operaciones3numeros($num1,$num2,$num3);
print_r($res);
<?php

require ('../Ejercicios_php_7/funcion.php');
//recoger Datos

$max = funcion::datoIntroducido('max');

$res= funcion::sumaPares_ProductoImpares($max);
$salida= 'Resultado: '.$res;
print_r($salida);
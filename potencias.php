<?php
require ('../Ejercicios_php_7/funcion.php');
//recoger Datos

$base = funcion::datoIntroducido('base');
$exp = funcion::datoIntroducido('exp');
$res= funcion::potencia($base,$exp);
$salida= 'Resultado: '.$res;
print_r($salida);
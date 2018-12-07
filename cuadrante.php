<?php
require ('../Ejercicios_php_7/funcion.php');
//recoger datos

$x=funcion::datoIntroducido('num1');
$y=funcion::datoIntroducido('num2');
$res = funcion::cuadrante($x,$y);
print_r($res);
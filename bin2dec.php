<?php
require ('../Ejercicios_php_7/funcion.php');
//obtener datos



$num1= funcion::datoIntroducido('dig1');
$num2= funcion::datoIntroducido('dig2');
$num3= funcion::datoIntroducido('dig3');
$num4= funcion::datoIntroducido('dig4');
$num5= funcion::datoIntroducido('dig5');

$res = funcion::bin2dec($num1,$num2,$num3,$num4,$num5);
print_r ($res);
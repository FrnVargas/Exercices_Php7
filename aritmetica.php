<?php
require ('../Ejercicios_php_7/funcion.php');
//recoger datos

$num1 =funcion:: datoIntroducido('num1');
$num2 =funcion:: datoIntroducido('num2');

$res = funcion:: aritmetica($num1,$num2);
print_r ($res);
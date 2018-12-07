<?php
error_reporting(E_ALL);
require ('../Ejercicios_php_7/funcion.php');
//recoge datos

$x1 = funcion:: datoIntroducido('x1');
$y1 = funcion:: datoIntroducido('y1');

$x2 = funcion:: datoIntroducido('x2');
$y2 = funcion:: datoIntroducido('y2');

$res = funcion::calcPendiente($x1,$y1,$x2,$y2);
print_r ('La pendiente vale:  '.$res);


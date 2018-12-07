<?php
require ('../Ejercicios_php_7/funcion.php');
//recoger datos

//$datos = new funcion();
$nombre =funcion:: datoIntroducido('nombre');
$nacAnno =funcion::datoIntroducido('nac');
$res = funcion:: anno30($nombre,$nacAnno);
print_r ($res);
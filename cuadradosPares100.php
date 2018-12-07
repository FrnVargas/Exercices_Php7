<?php
require ('../Ejercicios_php_7/funcion.php');
//recoge datos
$num = funcion::datoIntroducido('num');
$res = funcion::cuadradosPares($num);
print_r($res);

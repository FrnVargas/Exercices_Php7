<?php
error_reporting ( E_ALL );
require ('../Ejercicios_php_7/funcion.php');
// recoger Datos

// numeros enteros
$entero1 = funcion::datoIntroducido ( 'num1' );
$entero2 = funcion::datoIntroducido ( 'num2' );
$res1 = funcion::suma2Enteros ( $entero1, $entero2 );
$res2 = funcion::parImpar ( $entero1, $entero2 );
$res3 = funcion::compara ( $entero1, $entero2 );
$res4 = funcion::segunsean ( $entero1, $entero2 );
$res5 = funcion::numeroveces ( $entero1, $entero2 );
// nombres
$nombre = funcion::datoIntroducido ( 'nombre' );
$apellido = funcion::datoIntroducido ( 'apellido' );

$salidaA = 'Hola ' . $nombre . ' ' . $apellido . '<br>';

$salidaB = 'La suma es :  ' . $res1 . '<br>' .
'Pares e impares :  ' . $res2 . '<br>' . 
'Mayor o menor   :  ' . $res3 . '<br>' .
'si el primero es menor si no se multiplicaran:  ' . $res4 . '<br>'.
'numeroveces'.$res5;
;

print_r ( $salidaA . '  ' . $salidaB );

?>
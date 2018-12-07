<?php
require ('../Ejercicios_php_7/funcion.php');

// coleccion de datos

$tipo = funcion::datoIntroducido ( 'source' );


switch ($tipo) {
	case "moto" :
		$tm = 0.0;
		$km = 0.0;
		break;
	case "coche" :
		$tm = 0.0;
		$km = funcion::datoIntroducido ( 'kmC' );
		break;
	case "autobus":
		$tm = 0.0;
		$km = funcion::datoIntroducido ( 'kmA' );
		break;
	case "camion":	
		$km = funcion::datoIntroducido ( 'kmCA' );
		$tm = funcion::datoIntroducido ( 'tmCA' );
		break;
}

$solucion=funcion::peaje($tipo,$km,$tm);

print_r ( 'Tipo de vehiculo: '.$tipo.'<br/>'.
		'Km recorridos:  '.$km.'<br/>'.
		'Peso del transporte: '.$tm.'<br/>'.
		'  IMPORTE_PEAJE  =   '.$solucion. ' EUROS' );
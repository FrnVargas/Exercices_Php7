<?php
require ('../Ejercicios_php_7/funcion.php');
error_reporting ( E_ALL );

$tipo=funcion::datoIntroducido('source');

switch($tipo){
	case 'radian':
		$tmp=funcion::datoIntroducido('rad');print_r($tmp .'rad = ');
		funcion::rad2grado($tmp);break;
		
	case 'grado':
		$tmp=funcion::datoIntroducido('grado');print_r($tmp.'grado= ');
		funcion::grado2rad($tmp);break;
	
}
<?php

require ('../Ejercicios_php_7/funcion.php');


$tipo=funcion::datoIntroducido('source');

switch($tipo){
	case 'celsius':
		$tmp1=funcion::datoIntroducido('c');
		funcion::conversor($tipo,$tmp1);break;
	case 'fahrenheit':
		$tmp2=funcion::datoIntroducido('f');
		funcion::conversor($tipo,$tmp2);break;

}




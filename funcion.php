<?php
error_reporting ( E_ALL );

// funcion::hello ();
// funcion::suma2enteros ( 2, 4 );
class funcion {
  

	/* Mostrar la frase 'hola',mundo */
	public static function hello() {
		$frase = 'Hello,World';
		print_r ( $frase ) . '<br>';
	}
	/* mostrar la suma de dos numeros enteros */
	public static function suma2enteros(int $num1, int $num2) {
		$suma = ($num1) + ($num2);
		return ($suma);
	}
	// capturar datos introducido
	public static function datoIntroducido(string $var) {
		$s = $_REQUEST [$var];
		$tmp = (isset ( $s )) ? trim ( htmlspecialchars ( $s, ENT_QUOTES, 'UTF-8' ) ) : "";
		return $tmp;
	}
	public static function parImpar(int $num1, int $num2) {
		$resto1 = $num1 % 2;
		$resto2 = $num2 % 2;

		$resto1 == 0 ? $salida1 = ($num1 . ' es par') : $salida1 = ($num1 . ' es impar');
		$resto2 == 0 ? $salida2 = ($num2 . ' es par') : $salida2 = ($num2 . ' es impar');
		return ($salida1 . ' ' . $salida2);
	}
	public static function compara(int $num1, int $num2) {
		$num1 > $num2 ? $salida3 = ($num1 . ' es mayor') : $salida3 = ($num1 . ' es menor');
		return $salida3;
	}
	public static function potencia(int $base, int $exp) {
		$res = 1; // valor minimo de una potencia
		for($i = 1, $k = $exp; $i <= $k; $i ++) {
			$res *= $base;
		}
		return $res;
	}
	public static function sumaPares_ProductoImpares(int $max) {
		$sumaPares = 0;
		$prodImpares = 1;

		for($i = 1, $j = $max; $i <= $j; $i ++) {
			if ($i % 2 == 0) {
				$sumaPares += $i;
			} else {
				$prodImpares *= $i;
			}
		}
		$salida1 = ("La suma da : " . $sumaPares);
		$salida2 = ("El producto da : " . $prodImpares);
		$salT = ($salida1 . ' ' . $salida2);
		return $salT;
	}
	public static function ordena3num(int $a, int $b, int $c) {

		// calculo
		// mas pequeño
		if (($a < $b) && ($a < $c)) {
			$p = $a;
		} else {
			if (($b < $a) && ($b < $c)) {
				$p = $b;
			} else {

				$p = $c;
			}
		}

		// el mas grande
		if (($a > $b) && ($a > $c)) {
			$g = $a;
		} else {
			if (($b > $a) && ($b > $c)) {
				$g = $b;
			} else {

				$g = $c;
			}
		}
		// el mas mediano
		if (($a >= $b) && ($a <= $c)) {
			$m = $a;
		} else {
			if (($b < $a) && ($b > $c)) {
				$m = $b;
			} else {
				$m = $c;
			}
		}

		$sal = ('ordenando ' . $a . ',' . $b . ',' . $c . 'queda ' . $p . ',' . $m . ',' . $g);
		return $sal;
	}
	public static function segunsean(int $a, int $b) {
		if ($a < $b) {
			$res = $a + $b;
		} else {

			$res = $a * $b;
		}
		return $res;
	}
	public static function numeroveces(int $a, int $b) {
		for($i = 0; $i <= $a; $i ++) {
			$sal = '' . $b;
			print_r ( $sal );
		}
	}
	public static function tablamultiplicar(int $a) {
		for($i = 0; $i <= 100; $i ++) {

			$salida = $a . 'x' . $i . '=' . $a * $i . '<br />';
			return ($salida);
		}
	}
	public static function numeromes(int $a) {
		if (($a > 0) && ($a <= 12)) {
			switch ($a) {

				case 1 :
					$numMes = 'Enero';
					break;
				case 2 :
					$numMes = 'Febrero';
					break;
				case 3 :
					$numMes = 'Marzo';
					break;
				case 4 :
					$numMes = 'Abril';
					break;
				case 5 :
					$numMes = 'Mayo';
					break;
				case 6 :
					$numMes = 'Junio';
					break;
				case 7 :
					$numMes = 'Julio';
					break;
				case 8 :
					$numMes = 'Agosto';
					break;
				case 9 :
					$numMes = 'Septiembre';
					break;
				case 10 :
					$numMes = 'Octubre';
					break;
				case 11 :
					$numMes = 'Noviembre';
					break;
				case 12 :
					$numMes = 'Diciembre';
					break;
			}
		} else {
			$numMes = ('No has introducido numero de mes valido');
		}

		return $numMes;
	}
	public static function aritmetica(int $num1, int $num2) {
		$suma = $num1 + $num2;

		$resta = $num1 - $num2;
		$prod = $num1 * $num2;
		$div = (! $num2 == 0) ? $num1 / $num2 : 'No es posible realizar division por 0';

		$sal = 'Suma =' . $suma . '<br />' . 'Resta =' . $resta . '<br />' . 'Multiplicacion = ' . $prod . '<br />' . 'Division = ' . $div . '<br />';
		return ($sal);
	}
	public static function resta(int $a, int $b) {
		$resta = ($a - $b);
		return $resta;
	}
	public static function producto(int $a, int $b) {
		$prod = $a * $b;
		return $prod;
	}
	public static function division(int $a, int $b) {
		$div = (! $b == 0) ? $a / $b : 'No es posible dividor por 0';

		return $div;
	}
	public static function operaciones3numeros(int $a, int $b, int $c) {
		$suma2 = funcion::suma2enteros ( $a, $b );
		$suma3 = $suma2 + $c;
		$resta2 = funcion::resta ( $a, $b );
		$resta3 = $resta2 - $c;
		$prod = funcion::producto ( $a, $b );
		$prod3 = $prod * $c;

		$media = funcion::division ( $suma3, 3 );

		$salida = 'Suma =' . $suma3 . '<br />' . 'Resta =' . $resta3 . '<br />' . 'Producto=' . $prod3 . '<br />' . 'Media= ' . $media . '<br />';

		return $salida;
	}
	public static function ladosTriangulo(int $num1, int $num2, int $num3) {
		$a = ($num1);
		$b = ($num2);
		$c = ($num3);

		/*
		 * equilatero tiene dos lados iguales
		 * isosceles tiene todos sus lados iguales
		 * escaleno tiene todos sus lados diferentes
		 */

		if (($a == $b && $a != $c) || ($a == $c && $a != $b) || ($b == $c && $c != $a)) {
			$triangulo = 'equilatero';
		} else {
			if ($a == $b && $b == $c && $a == $c) {
				$triangulo = 'isoceles';
			} else {
				$triangulo = 'escaleno';
			}
		}
		return $triangulo;
	}
	public static function bin2dec(int $num1, int $num2, int $num3, int $num4, int $num5) {
		$a = ($num1);
		$b = ($num2);
		$c = ($num3);
		$d = ($num4);
		$e = ($num5);

		$salida = (funcion::potencia ( 2, 4 ) * $e) + (funcion::potencia ( 2, 3 ) * $d) + (funcion::potencia ( 2, 2 ) * $c) + (funcion::potencia ( 2, 1 ) * $b) + (funcion::potencia ( 2, 0 ) * $a);

		return $salida;
	}
	public static function cuadradosSuma(int $num) {
		$cte = ($num);
		// $f = new funcion ();

		for($i = 1, $j = $cte; $i <= $j; $i ++) {

			$r = funcion::potencia ( $i, 2 );
		}
		return $r;
	}
	public static function cuadradosPares(int $num) {
		$cte = ($num);

		//

		for($i = 1, $j = $cte; $i <= $j; $i ++) {
			if ($i % 2 == 0) {
				$res = funcion::potencia ( $i, 2 );
				$s = 'Para ' . $i . ' el cuadrado vale =' . $res . '<br />';
				print_r ( $s );
			}
		}
	}
	public static function calcPendiente(int $a, int $b, int $c, int $d) {
		// formula de la pendiente m = (y2 - y1) / (x2 - x1);
		$m = ($d - $c) / ($b - $a);

		return $m;
	}
	public static function anno30(string $nombre, int $nacimiento) {
		$annoTope = 2030;
		$dif = $annoTope - $nacimiento;

		$sal = 'Hola ' . $nombre . '  En el año 2030 tendras' . $dif;

		return $sal;
	}
	public static function cuadrante(int $x, int $y) {
		if ($x == 0 && $y == 0) {
			$codPosicion = 0;
		} else {
			if ($x > 0) {
				$codPosicion = ($y > 0) ? 1 : 4;
			} else {
				$codPosicion = ($y > 0) ? 2 : 3;
			}
		}
		switch ($codPosicion) {

			case 0 :
				$sal = 'En el eje de coordenadas ';
				break;
			case 1 :
				$sal = 'En el cuadrante 1 ';
				break;
			case 2 :
				$sal = 'En el cuadrante 2 ';
				break;
			case 3 :
				$sal = 'En el cuadrante 3 ';
				break;
			case 4 :
				$sal = 'En el cuadrante 4 ';
				break;
		}
		return $sal;
	}
	public static function peaje(String $sel,float $km,float $tm) {
		$TASA_MOTO = 3.2;
		$TASA_COCHE = 0.1; // por km
		$TASA_AUTOBUS = 0.2; // por km
		$TASA_CAMIONKM = 0.1; // por km
		$TASA_CAMIONTM = 0.1; // por tonelada
		switch ($sel) {
			case 'moto' :
				$impTotal = $TASA_MOTO;
				break;
			case 'coche' :
				$impTotal=$km*$TASA_COCHE;
			
			case 'autobus' :
				$impTotal=$km*$TASA_AUTOBUS;
			case 'camion' :
				$impTotal=$km*$TASA_CAMIONKM*$tm*$TASA_CAMIONTM;
		}
		return $impTotal;
	}
	public static function fahrenheitCentigrados(float $fahrenheit) {
		$con= ($fahrenheit-32)/1.8;print_r ($con);
	}
	public static  function centigradosFahrenheit(float $centigrados) {
		$con= $centigrados*1.8+32;print_r ($con);
	}
	public static function conversor ($tipo,$tmp){
		switch ($tipo){
			case 'celsius':
			funcion::centigradosFahrenheit($tmp);break;
			case 'fahrenheit':
			funcion::fahrenheitCentigrados($tmp);break;
		}
	}
	public static function rad2grado(float $rad){
		$pi= 3.14159265359;
		$con = (180*$rad)/$pi;print_r ('grado: '.$con);
	}
	public static function grado2rad(int $grad){
		$pi= 3.14159265359;
		$con=($pi/180)*$grad; print_r ('radian: '.$con);
	}
	public static function asteriscos() {
		for($i = 1, $fila = 5; $i <= $fila; $i ++) {
			$fila1 = "";
			for($col = 1; $col <= $fila; $col ++) {

				$fila1 += ($fila == $col) ? print_r ( '*' ) : print_r ( '-' );
			}
			print_r ( $fila1 );
		}
	}
	public static function edadSegundos($var){
		$anno=366.255936;
		$dia=24*60*60;
		$res= $var*$anno*$dia;
		
		return $res;
	}
	public static function multiplo5(int $a, int $b) {
		if ($a < $b) {
			for($num = $a; $num < $b; $num *= 5) {
		echo	 $num.'<br>';
			}
		} else {
			if ($a + 5 > $b) {
		echo	 'Multiplo mayor que valor introducido.Fin del programa. ';
			} else {
		echo	 'Error.Fin del programa. ';
			}
			
		}

	}
}

?>
<?php
$a=$_REQUEST['valor1'];
$b=$_REQUEST['valor2'];

if ($_REQUEST['operador']=='suma'){
	$r_suma = sumar($a,$b);
	echo "la suma es: $r_suma";

}else
	if ($_REQUEST['operador']=='resta'){
	$r_resta = restar($a,$b);
	echo "la resta es: $r_resta";

}

if ($_REQUEST['operador']=='multiplicacion'){
	$r_multiplicacion = multiplicacion($a,$b);
	echo "la multiplicacion  es: $r_multiplicacion";

}else
if ($_REQUEST['operador']=='division'){
	$r_division = division($a,$b);
	echo "la division es: $r_division";

}
function sumar ($a,$b) {
	$suma = $a+$b;
	return $suma;
}

function restar ($a,$b) {
	$resta = $a-$b;
	return $resta;
}

function multiplicacion ($a,$b) {
	$multiplicacion=$a*$b;
	return $multiplicacion;
}

	function division ($a,$b) {
		$division= $a/$b;
		return $division;
	}

?>
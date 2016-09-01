<?php 
	
	if ($_REQUEST['operacion']=='area'){
		$l1 = $_REQUEST['l1'];
		$l2 = $_REQUEST['l2'];

		$resultado=area($l1,$l2);
		echo 'El area e: '.number_format($resultado,2,",",".");	

	}elseif($_REQUEST['operacion']=='ecuacion'){
		$a = $_REQUEST['va'];
		$b = $_REQUEST['vb'];
		$c = $_REQUEST['vc'];

		$resultado = ecuacion($a,$b,$c);
		echo 'La ecuacion es: '.number_format($resultado,2,",",".");	
	}

	
	
	echo '<br><a href="index.html">Regresar</a>';

	function ecuacion($a,$b,$c){
		return ($a+7*$c)/($b+2-$a)+2*$b; 
	}
	function area($l1,$l2){
		return $l1*$l2;
	}

 ?>
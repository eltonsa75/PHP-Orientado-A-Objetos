<?php
	
	function incremental(&$variavel, $valor = 40){
		$variavel += $valor;
	}

	$a = 10;
	incremental($a);
	echo $a;

?>
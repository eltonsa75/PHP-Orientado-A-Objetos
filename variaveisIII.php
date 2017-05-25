<?php
	
	$a = 5;
	$b = &$a;
	$b = 10;
	echo $a; // resultado = 10
	echo ' '; // espaço
	echo '<br>'; // quebra de linha
	echo $b; // resultado = 10
	
?>
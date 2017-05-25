<?php

	$a = new stdClass; // cria objeto
	$a->nome = 'Maria'; //define atributo
	$b = $a; // cria réplica
	$b->nome = 'Joana'; // define atributo
	print $a->nome; // resultado = Joana
	echo ' '; //espaço
	echo '<br>';
	print $b->nome; // resultado = Joana
	
?>
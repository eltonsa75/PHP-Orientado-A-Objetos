<?php 
	
	$carros = array();
	$carros['Palio']['cor']		= 'azul';
	$carros['Palio']['potência'] = '1.0';
	$carros['Palio']['opcionais'] = 'Ar Cond. ';
	$carros['Corsa']['cor']		= 'cinza';
	$carros['Corsa']['potência'] = '1.3';
	$carros['Corsa']['opcionals'] = 'MP3';
	$carros['Gol']['cor']	= 'branco';
	$carros['Gol']['potência']	= '1.0';
	$carros['Gol']['opcionals'] = 'Metalica';

	echo $carros['Palio']['opcionais']; //resultado = Ar Cond.

 ?>
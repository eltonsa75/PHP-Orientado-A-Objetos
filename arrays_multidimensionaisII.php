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
	
	foreach ($carros as $modelo => $caracteristicas) {

		echo "=> modelo $modelo =><br>\n";
		foreach ($caracteristicas as $caracteristica => $valor) {
		echo " - caracteristica $caracteristica => $valor<br>\n";
		}
	}

?>
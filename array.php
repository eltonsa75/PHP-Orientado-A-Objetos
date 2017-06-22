<?php
	
	$frutas = array();
	$frutas['cor'] = 'vermelha';

	$frutas['sabor'] = 'doce';
	$frutas['formato'] = 'redondo';
	$frutas['nome'] = 'maçã';
	foreach ($frutas as $chave => $frutas) {
		echo "$chave => $frutas <br>\n";
	}


?>
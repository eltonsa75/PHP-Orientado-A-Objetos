<?php
	
	$contato = array();
	$contato['nome'] = 'Pablo';
	$contato['empresa'] = 'Adiant';
	$contato['peso'] = 73;
	// alterações

	$contato['nome'] .= ' Dall Oglio';
	$contato['empresa'] .= ' Solution';
	$contato['peso'] += 2;
	// debug
	print_r($contato);

	$comidas = array();
	$comidas[] = 'Lasanha';
	$comidas[] = 'Pizza';
	$comidas[] = 'Macarrão';
	// alterações

	$comidas[1] = 'Pizza Calabresa';
	// debug
	print_r($comidas);

?>
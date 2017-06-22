<?php
	
	$carros = array('Palio' => array('cor' =>'azul',
									  'potência' =>'1.0',
									  'opcionais' =>'Ar Cond.'),
					'Corsa' => array('cor'=>'cinza',
									  'potência' =>'1.3',
									  'opcionais'=>'MP3'),
					'Gol'   => array('cor'=> 'branco',
									  'potência' => '1.0',
									  'opcionais' => 'Metalica')
					);

	echo $carros['Palio']['opcionais']; // resultado = Ar Cond.

?>
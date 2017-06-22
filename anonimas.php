<?php
	
	$remove_acento = function($str){
		$a = array('Á', 'À','Â','Ã', 'Ä', 'Ç', 'É', 'È', 'Ê',
				'Ì', 'Í', 'Ó', 'Ò', 'Õ', 'Ô', 'Ú', 'Ù','á', 'à',
				'â','ã','ç','è','é','ê','í','î','ó','ò','õ','ù','ú','û','ü');


		$b = array('A','A','A','A','A','C','E','E','E',
				 'I','I','O','O','O','O','U','U','a',
				 'a','a','a','c','e','e','e','i','i',
				 'o','o','o','o','u','u','u','u');

		return str_replace($a, $b, $str);
	};

	print $remove_acento('José da Conceição');
	print '<br>' . PHP_EOL;

	$palavras = array();

	$palavras[] = 'José da Conceição';
	$palavras[] = 'Jéferson Araújo';
	$palavras[] = 'Félix Júnior';
	$palavras[] = 'Ênio Müller';
	$palavras[] = 'Ângelo Ônix';

	// array array_map ( callback $callback , array $arra1 [, array $... ])
	$r = array_map($remove_acento, $palavras );
	print_r($r);


?>
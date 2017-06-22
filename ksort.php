<?php
	
	$carro['potência'] = '1.0';
	$carro['cor'] = 'branco';
	$carro['modelo'] = 'celta';
	$carro['opcionais'] = 'ar quente';
	ksort($carro);
	echo('<pre>');
	print_r($carro);
	echo('</pre>');

?>
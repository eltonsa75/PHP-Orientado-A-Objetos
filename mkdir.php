<?php 
	
	$dir = 'E:/xampp/php/tmp/diretorio';
	if (mkdir($dir, 0777))
		echo "Diretório criado com sucesso";

	else
		echo "Diretório não criado";	

?>
<?php
	
	$arquivo = 'E:/xampp/php/tmp/file.txt';
	if (is_file($arquivo))
		echo "É um arquivo";
	else
		echo "Não é um arquivo";
?>
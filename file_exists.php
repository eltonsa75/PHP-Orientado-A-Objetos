<?php
	
	$arquivo = 'E:/xampp/php/tmp/file.txt';
	if(file_exists($arquivo))
		echo "Arquivo Existente";
	else
		echo "Arquivo não Existente";

?>
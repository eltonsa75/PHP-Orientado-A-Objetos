<?php
	
	$fp = fopen ("E:/xampp/php/tmp/file.txt", "w");	// abre o arquivo para gravação

	// escreve no arquivo

	fwrite ($fp, "Elton dos Santos Andrade" . PHP_EOL);
	fwrite ($fp, "William Ferreira Andrade" . PHP_EOL);
	fwrite ($fp, "Maria das Graças Ferreira" . PHP_EOL);
	fclose($fp); // fecha o arquivo

?>
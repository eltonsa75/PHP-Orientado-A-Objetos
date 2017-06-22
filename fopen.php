<?php
	
	$fd = fopen ("E:/xampp/php/tmp/file.txt", "r");
	$linha = 3;
	while (!feof ($fd)) {
		$buffer = fgets($fd, 4096); //lê uma linha do arquivo
		if ($linha > 1) {
			echo $buffer; // imprime a linha
		}
		$linha ++;
	}
	fclose ($fd);

?>
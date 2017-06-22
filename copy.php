<?php
	
	$origem = "E:/xampp/php/tmp/file.txt";
	$destino = "E:/xampp/php/tmp/file2.txt";
	if (copy($origem, $destino))
		echo "Cópia efetuada";

	else
		echo "Cópia não efetuada";

?>
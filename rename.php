<?php
	
	$origem = "E:/xampp/php/tmp/file2.txt";
	$destino = "E:/xampp/php/tmp/file3.txt";
	if(rename($origem, $destino))
		echo "Renomeação efetuada";
	else
		echo "Renomeação não efetuada";

?>
<?php
	
	$arquivo = "E:/xampp/php/tmp/file3.txt";
	if (unlink($arquivo))
		echo "Arquivo apagado";
	else
		echo "Arquivo não apagado";

?>
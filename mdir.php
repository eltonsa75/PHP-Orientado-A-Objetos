<?php
	
	$dir = 'E:/xampp/php/tmp/diretorio';
	if (rmdir($dir))
		echo "Diretorio apagago com sucesso";

	else
		echo "Diretório não apagado";

?>
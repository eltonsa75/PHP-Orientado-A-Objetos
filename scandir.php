<?php
	
	$diretorio = '/';
	if (is_dir($diretorio)){
		$linhas = scandir($diretorio);
		foreach ($linhas as $linha) {
			print $linha . '<br>' . PHP_EOL;
		}
	}

?>
<?php
	
	function ola() {
		$argumentos = func_get_args();
		$quantidade = func_num_args();

		for ($n=0; $n<$quantidade; $n++){
			echo 'Olá ' . $argumentos[$n] . '. ';
		}
	}
ola('João', 'Maria', 'José', 'Pedro');
?>
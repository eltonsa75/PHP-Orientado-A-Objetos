<?php
	
	function fatorial($numero) {
		if($numero == 1)
			return $numero;
		else
			return $numero * fatorial($numero -1);
	}

	echo fatorial(5) . "<br/>\n";
	echo fatorial(7) . "<br/>\n";

?>
<?php
	
	$texto = "The Beatles";

	print str_pad($texto, 20, "*", STR_PAD_LEFT) . "<br>\n";
	print str_pad($texto, 20, "*", STR_PAD_BOTH) . "<br>\n";
	print str_pad($texto, 20, "*") . "<br>\n";

?>
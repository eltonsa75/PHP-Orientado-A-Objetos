<?php
	
	$total = 0;
	function km2mi($quilometros){
		global $total;
		$total += $quilometros;
		return $quilometros * 0.6;
	}

	echo 'percorre ' . km2mi(100) . " milhas <br>\n";
	echo 'percorre ' . km2mi(200) . " milhas <br>\n";
	echo 'percorre no total ' . $total . " quilometros <br>\n";


?>
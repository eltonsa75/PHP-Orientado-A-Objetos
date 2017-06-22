<?php
	
	$string = "10/05/2015";
	print_r( explode("/", $string) ); // string [] array
	$array = [ 10, 05, 2015 ];
	print implode('/', $array); // array [] string

?>
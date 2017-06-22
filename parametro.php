<?php

function incrementa($variavel, $valor) {
	$variavel += $valor;
}

$a = 10;
incrementa($a, 20);
echo $a;
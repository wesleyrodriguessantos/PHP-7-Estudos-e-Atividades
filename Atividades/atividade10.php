<?php 

	$valor = $_POST['number'];
	$fatorial = 1;

	for ($fatorial=1; $valor > 1; $valor--) { 
		
		$fatorial = $fatorial * $valor;
	}

	echo "O Fatorial de " . $_POST['number'] . " é $fatorial";

 ?>
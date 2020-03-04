<?php 

	$valor = $_POST['valor'];

	if ($valor >= 10) {
		echo "O valor inserido eh maior ou igual a 10!";
	} else {
		echo "O valor inserido eh menor que 10!";
	}

 ?>
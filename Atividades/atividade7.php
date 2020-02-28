<?php 
	
	$altura = $_POST['altura'];
	$sexo = $_POST['sexo'];
	$calcula = 0.0;

	if ($sexo == "H" || $sexo == "h" || $sexo == "Homem") {

		$calcula = (72.7 * $altura) - 58;

		echo "Seu peso ideal é $calcula";
	}

	elseif ($sexo == "M" || $sexo == "m" || $sexo == "Mulher") {
		
		$calcula = (62.1 * $altura) - 44.7;

		echo "Seu peso ideal é $calcula";	
	}

 ?>
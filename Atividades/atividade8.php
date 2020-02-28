<?php 

	$salario = $_POST['salario'];

	$novosalario = 0.0;

	if ($salario <= 300.00) {
		
		$novosalario = ($salario * 0.50) + $salario;

		echo "Seu novo Salário agora é: $novosalario Reais";

	} else {

		$novosalario = ($salario *  0.30) + $salario;

		echo "Seu novo Salário agora é: $novosalario Reais";

	}


 ?>
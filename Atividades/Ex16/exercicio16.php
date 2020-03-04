<?php 

	if (isset($_POST['valor1']) && isset($_POST['valor2'])) {
		
		$valor1 = $_POST['valor1'];
		$valor2 = $_POST['valor2'];

	} else {

		echo "Dados não foram recebidos com sucesso";
	}

	$soma = $valor1 + $valor2;

	echo "O valor da soma é $soma, porém com as alterações será igual a ";

	if ($soma > 20) echo $soma + 8;
	else echo $soma - 5;
 ?>
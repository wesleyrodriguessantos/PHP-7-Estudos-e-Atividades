<?php 

	$valor1 = $_POST['valor1'] + 1;
	$valor2 = $_POST['valor2'];

	if ($valor1 < $valor2) {
		while ($valor1 < $valor2) {
			
			print $valor1 . " ";

			$valor1++;
		}
	} else {

		$valor1 = $_POST['valor1'];
		$valor2 = $_POST['valor2'] + 1;

		while ($valor2 < $valor1) {
			
			print $valor2 . " ";

			$valor2++;
		}
	}
 ?>
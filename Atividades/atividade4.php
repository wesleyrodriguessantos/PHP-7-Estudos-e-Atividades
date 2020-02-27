<?php 

	$valor1 = $_POST['valorA'];
	$valor2 = $_POST['valorB'];
	$valor3 = $_POST['valorC'];
	$valor4 = $_POST['valorD'];

	$soma = $valor1 + $valor3;
	$multiplicacao = $valor2 * $valor4;

	if ($soma > $multiplicacao) print "$valor1 + $valor3 é maior que B * D";
		elseif ($soma < $multiplicacao) print "A + C é menor que B * D";
		elseif ($soma == $multiplicacao) print "A + C é igual a B * D";

 ?>
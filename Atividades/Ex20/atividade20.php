<?php 

if (!isset($_POST['num1']) || !isset($_POST['num2']) || !isset($_POST['num3'])) {
	echo "Programa encerrado, dados não recebidos com êxito";
} else {

	$AB = $_POST['num1'];
	$BC = $_POST['num2'];
	$AC = $_POST['num3'];

	if ($AB != $BC && $AB != $AC) echo("Triângulo Escaleno!");
	elseif (($AB == $BC) || ($BC == $AC) || ($AC == $AB)) echo("Triângulo Isósceles!");
	elseif ($AB == $BC && $BC == $AC) echo "Triângulo Equilátero!";

}


 ?>
<?php 
	
if (isset($_POST['texto1']) && isset($_POST['texto2'])) {

	$texto1 = $_POST['texto1'];
	$texto2 = $_POST['texto2'];

} else {
	echo "Erro ao receber os dados";
}

$result = strcmp($texto1, $texto2);

if ($result < 0) echo "A string $texto1 é menor que a string $texto2!";
if ($result > 0) echo "A string $texto1 é maior que a string $texto2!";
if ($result == 0) echo "A string $texto1 é igual a string $texto2!";

/*
//FAZ A MESMA COISA, MAS COMPARA TAMBÉM LETRAS MAIÚSCULAS E MINÚSCULAS
$result = strcasecmp($texto1, $texto2);

if ($result < 0) echo "A string $texto1 é menor que a string $texto2!";
if ($result > 0) echo "A string $texto1 é maior que a string $texto2!";
if ($result == 0) echo "A string $texto1 é igual a string $texto2!";
*/

 ?>
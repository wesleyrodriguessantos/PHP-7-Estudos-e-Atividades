<?php 
	
if (isset($_POST['frase'])) {
	$frase = $_POST['frase'];
} else {
	print "Erro ao receber os dados";
}

$total_caracter = strlen($frase);

echo "Total de Caracteres da frase: $total_caracter<br>";

for ($i=1; $i < $total_caracter; $i++) { 
	echo $i . " ";
}

 ?>
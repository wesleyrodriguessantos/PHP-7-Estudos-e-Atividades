<?php 

if (isset($_POST['palavra']) && isset($_POST['letra'])) {
	$frase = $_POST['palavra'];
	$letra = $_POST['letra'];
} else {

	echo "Dados não recebidos!";
}

//Essa função cuida de Tudo pra mim!!!
$cont = substr_count($frase, $letra);

echo $cont;

 ?>
<?php 

if (!isset($_POST['vezes'])) {

	echo "Dados não encontrados.";

} else {

	$num = $_POST['vezes'];

	for ($i=0; $i < $num; $i++) { 
		
		echo "SOL" . "<br>";

	}
	
}

 ?>
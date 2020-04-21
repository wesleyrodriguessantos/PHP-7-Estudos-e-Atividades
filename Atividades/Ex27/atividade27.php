<?php 

if (!isset($_POST['word'])) {
	
	echo "Dados não Encontrados!";

} else {

	$palavra = $_POST['word'];
	$tam = strlen($palavra);

	for ($i=1; $i <= $tam; $i++) { 

		for($y = 1; $y <= $i; $y++){
		
			echo "$palavra ";
			
		}
		echo "<br>";
	}
}

 ?>
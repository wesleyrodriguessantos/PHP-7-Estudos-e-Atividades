<?php 

	$valor1 = $_POST['valor1'];
	$valor2 = $_POST['valor2'];

	echo "($valor1*$valor2) = ";
	for ($i = 0; $i < $valor1; $i++) { 
		
		echo $valor2;
   		if($i != $valor1) echo " + ";
		
	}
	
 ?>
<?php 

if (!isset($_POST['numero'])) {
	
	echo "Dados inválidos ou não capturados.";

} else {

	$num = $_POST['numero'];
	$soma = 1;
	$div = 1;
	$sub = 1;
	$mult = 1;

	print "Tabuada de Soma" . "<br>";
	for ($i=0; $i <= 10; $i++) { 
		$soma = $num + $i;
		echo "$num + $i = $soma" . "<br>";
	}
	echo "<br>";

	print "Tabuada de Subtração" . "<br>";
	for ($i=0; $i <= 10; $i++) { 
		$sub = $num - $i;
		echo "$num - $i = $sub" . "<br>";
	}
	echo "<br>";

	print "Tabuada de Multiplicação" . "<br>";
	for ($i=0; $i <= 10; $i++) { 
		$mult = $num * $i;
		echo "$num * $i = $mult" . "<br>";
	}
	echo "<br>";

	print "Tabuada de Divisão" . "<br>";
	for ($i=1; $i <= 10; $i++) { 
		$div = $num / $i;
		echo "$num / $i = $div" . "<br>";
	}
}

 ?>
<?php 

	if (!isset($_POST['num1']) || !isset($_POST['num2']) || !isset($_POST['num3'])) {
		print "Programa encerrado, dados incorretos!!";
	} else {

		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$num3 = $_POST['num3'];

		if	   ($num1 > $num2 && $num2 > $num3) echo "$num1 $num2 $num3";
		elseif ($num3 > $num2 && $num2 > $num1) echo "$num3 $num2 $num1";
		elseif ($num2 > $num1 && $num1 > $num3) echo "$num2 $num1 $num3";
		elseif ($num2 > $num1 && $num1 < $num3) echo "$num2 $num3 $num1";
		elseif ($num1 > $num3 && $num3 > $num2) echo "$num1 $num3 $num2";
		elseif ($num3 > $num1 && $num1 > $num2) echo "$num3 $num1 $num2";
	}

 ?>
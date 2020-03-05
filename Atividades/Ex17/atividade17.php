<?php 

	if (!isset($_POST['numero'])) {
		
		echo "ERRO AO RECEBER OS DADOS";
	} else {

		$numer = $_POST['numero'];

		if ($numer%10 == 0) echo "O número $numer é divisível por 10<br>";
		if ($numer%5 == 0)  echo "O número $numer é divisível por 5<br>";
		if ($numer%2 == 0)  echo "O número $numer é divisível por 2<br>";

		else echo "O número $numer não é divisível por 10, nem por 5 e nem por 2!<br>";
	}


 ?>
<?php 

	function manipulaErro ($code, $message, $file, $line) {

		echo json_encode(array(
			"Code"=>$code,
			"Message"=>$message,
			"Linha"=>$line,
			"File"=>$file

		));
	}

	set_error_handler("manipulaErro");

	$total =  100/0;

 ?>
 
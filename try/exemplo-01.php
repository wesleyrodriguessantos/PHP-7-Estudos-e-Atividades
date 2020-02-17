<?php 

	try {

		throw new Exception("Ocorreu um Erro", 400);
		

	} catch (Exception $e) {

		echo json_encode(array(
			"mensagem"=>$e->getMessage(),
			"Line"=>$e->getLine(),
			"File"=>$e->getFile(),
			"Code"=>$e->getCode()
		));

	}

 ?>
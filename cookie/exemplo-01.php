<?php 
	
	$data = array("empresa"=>"Hcode Treinamentos", "Localização"=>"São Paulo");

	setcookie("NOME_DO_COOKIE",json_encode($data), time() + 3600);

	echo "OK, cookie Criado com sucesso!";

 ?>
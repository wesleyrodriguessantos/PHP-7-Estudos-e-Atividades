<?php 

	$cep = "74305100";
	$link = "https://viacep.com.br/ws/$cep/json/";

	$ch = curl_init($link);

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

	$resposta = curl_exec($ch);

	curl_close($ch);

	$data = json_decode($resposta, true);

	print_r($data);

	//SE EU QUISER CONSUMIR SÓ A LOCALIDADE...BASTA FAZER O SEGUINTE
	//print_r($data["localidade"]);

 ?>
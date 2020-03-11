<?php 

	if (!isset($_POST['nome']) AND !isset($_POST['sexo']) AND !isset($_POST['idade'])) {
		print "Dados não encontrados!!";
	} else {

		$nome = $_POST['nome'];
		$sexo = $_POST['sexo'];
		$idade = $_POST['idade'];


		if ($sexo == "feminino" && $idade < 25) echo "$nome você é Aceita";
		else echo "$nome você não será ACEITO(a)";

	}

 ?>
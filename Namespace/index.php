<?php 

	require_once("config.php");

	use Cliente\Cadastro;


	$cad = new Cadastro();

	$cad->setNome("Djalma Sindeaux");
	$cad->setEmail("djalma@yahoo.com");
	$cad->setSenha("660099");

	$cad->registrarVenda();

 ?>
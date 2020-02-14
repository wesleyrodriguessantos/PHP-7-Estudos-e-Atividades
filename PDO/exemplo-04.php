<?php 
	
	$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\MSQLEXPRESS;ConnectionPooling=0", "sa", "root");

	$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

	$login = "jose";
	$password = "9087908790";

	$stmt->bindParam(":LOGIN", $login);
	$stmt->bindParam(":PASSWORD", $password);

	$stmt->execute();

	echo "Inserido OK!";
	
 ?>
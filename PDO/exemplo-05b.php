<?php 
	
	$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\MSQLEXPRESS;ConnectionPooling=0", "sa", "root");

	$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

	$login = "Userzimm";
	$password = "llolgtg0";
	$id = 2;

	$stmt->bindParam(":LOGIN", $login);
	$stmt->bindParam(":PASSWORD", $password);
	$stmt->bindParam(":ID", $id);

	$stmt->execute();

	echo "Alterado com Sucesso!";
	
 ?>
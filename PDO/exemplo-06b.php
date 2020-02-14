<?php 
	
	$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\MSQLEXPRESS;ConnectionPooling=0", "sa", "root");

	$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

	$id = 2;

	$stmt->bindParam(":ID", $id);

	$stmt->execute();

	echo "Deletado com Sucesso!";
	
 ?>
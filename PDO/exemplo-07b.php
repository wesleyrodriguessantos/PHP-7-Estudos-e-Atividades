<?php 
	
	$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\MSQLEXPRESS;ConnectionPooling=0", "sa", "root");

	$conn->beginTransaction();

	$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

	$id = 1;

	$stmt->execute(array($id));

	//$conn->rollback(); DELETOU MAS VOLTOOU ATRÁS ---cancelou

	$conn->commit();

	echo "Deletado com Sucesso!";
	
 ?>
<?php

//-----------------------------CONEXÃO--------------------------------------
try {
    $pdo = new PDO("mysql:dbname=CRUDPDO;host=localhost", "root", "");
} catch (PDOException $e) {
    echo "Erro com o Banco de Dados ". $e->getMessage();
}
catch (Exception $e) {
    echo "Erro Genérico ". $e->getMessage();
}

//----------------------------INSERT------------------------------------------

// 1ª Maneira - Usando Prepare

/*$res = $pdo->prepare("INSERT INTO pessoa (nome, telefone, email) VALUES (:n, :t, :e)");
$res->bindValue(":n", "Ana Carolina");
$res->bindValue(":t", "62987654544");
$res->bindValue(":e", "carol@outlook.com.br");
$res->execute();*/

//2ª Maneira - Usando Query

$pdo->query("INSERT INTO pessoa (nome, telefone, email) VALUES ('Rosângela', '64985253214', 'rosa@flor.br')");

?>
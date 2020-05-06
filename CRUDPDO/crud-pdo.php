<?php

try {
    $pdo = new PDO("mysql:dbname=CRUDPDO;host=localhost", "root", "");
} catch (PDOException $e) {
    echo "Erro com o Banco de Dados ". $e->getMessage();
}
catch (Exception $e) {
    echo "Erro Genérico ". $e->getMessage();
}


?>
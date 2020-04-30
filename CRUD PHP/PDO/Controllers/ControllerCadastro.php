<?php

include ("../Includes/Variaveis.php");
include ("../Class/ClassCrud.php");

$Crud = new ClassCrud();
$Crud->insertDB("cadastro", "?,?,?,?", array($id, $nome, $sexo, $cidade));

echo "Cadastro Realizado com Sucesso!";
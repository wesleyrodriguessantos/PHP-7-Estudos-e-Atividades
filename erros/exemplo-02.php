<?php 

//Negando as notícias (Notice) do programa
error_reporting(E_ALL & ~E_NOTICE);
$nome = $_GET["nome"];

echo $nome;
 ?>
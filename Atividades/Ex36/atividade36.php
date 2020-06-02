<?php

$num = addslashes($_POST['numero']);
$ant = $num - 1;
$suce = $num + 1;

echo "Antecessor de {$num} = {$ant} <br> Sucessor de {$num} = {$suce}<br>";

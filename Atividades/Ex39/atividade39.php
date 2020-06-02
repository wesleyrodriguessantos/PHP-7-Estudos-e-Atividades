<?php

$num = $_POST['numero'];

$centena = $num/100;
$dezena = ($num/10)%10;
$unidade = ($num%10);

echo "O número {$num} Invertido é: ";
echo (int)$unidade . (int)$dezena . (int)$centena;
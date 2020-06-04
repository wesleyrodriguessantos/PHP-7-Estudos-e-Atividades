<?php

$base = (float) $_POST['base'];
$altura = (float) $_POST['altura'];

$perimetro = 2 * ($base + $altura);
$area = $base * $altura;

echo "Perímetro: {$perimetro}<br>";
echo "Área: {$area}<br>";
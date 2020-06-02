<?php

$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];
$nota4 = $_POST['nota4'];

$mediaPond = (($nota1*1) + ($nota2*2) + ($nota3*3) + ($nota4*4))/10; 

echo "A Média Ponderada Final é {$mediaPond}";
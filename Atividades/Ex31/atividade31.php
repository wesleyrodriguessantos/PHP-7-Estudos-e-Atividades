<?php

$vetor=array(111,8,2,20,3,6,9,100,89,12,87,66,13,14,17);
$par=array();
$impar=array();

foreach ($vetor as $item) {
    if ($item % 2 == 0) echo "O Número $item é par <br>";
    else echo "O Número $item é impar <br>";
}

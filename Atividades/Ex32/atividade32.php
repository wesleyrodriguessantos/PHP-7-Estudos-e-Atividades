<?php

$vetor = array(36,6,7,9,87,21,32,31,33,44,55,66,77,98,12,123,229,17,75,22);
$maior = $vetor[0];
$menor = $vetor[0];
$par = 0;
$soma = array_sum($vetor); //Soma todos os Elementos de um Array em PHP

foreach ($vetor as $item) {
    if($item > $maior)
    {
        $maior = $item;
    }
    if($item < $menor)
    {
        $menor = $item;
    }
    if($item % 2 == 0)
    {
        $par++;
    }
}

$percPar = ($par/20)*100;

echo "O maior elemento desse Vetor é {$maior}<br>";
echo "E o menor elemento desse Vetor é {$menor}<br>";
echo "Porcentagem de Numeros Pares: {$percPar}%<br>";
echo "A soma dos Elementos do Array é: {$soma}";
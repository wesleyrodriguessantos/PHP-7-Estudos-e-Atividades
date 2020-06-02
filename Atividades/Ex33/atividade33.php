<?php

$vetor1 = array(9,5,21,14,-8,45,11,-3,99,87);
$vetor2 = array(1,-5,12,23,-8,45,11,-31,-85,87);
$vetor3 = array();

print "Elementos não comuns do Vetor1 em relação ao Vetor2 <br>";

for ($i=0; $i < 10; $i++) { 
    
    if ($vetor1[$i] != $vetor2[$i])
    {
        $vetor3 = $vetor1[$i];
        print($vetor3 . " ");

        $vetor3 = $vetor2[$i];
        print($vetor3 . " ");
    }
}



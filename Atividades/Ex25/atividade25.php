<?php
    //declaração dos 3 vetores
    $vetor=array(11,-1,2,-24,3,-3,4,-4,50,-5,6,-6,7,-44,8,-87,9,-8,10,-11);
    $pos=array();
    $neg=array();

    foreach($vetor as $vet){
        ($vet<0) ? $neg[]=$vet : $pos[]=$vet;
    }

    echo "<h3>São estes os vetores positivos</h3>";
    print_r($pos);
    echo "<h3>E estes os vetores negativos</h3>";

    print_r($neg);
    echo "<br />";

    $total = array_sum($pos);
    $count = count($neg);

    echo "<h3>Soma dos positivos: </h3>";
    print_r($total); // soma de valores positivos
    echo "<h3>Quantidade de negativos: </h3>";
    print_r($count); // quantidade de valores negativos
?>
<?php

$tamChico = 150; //Medida convertida para Centímetro Já
$tamJuca = 110;  //Medida convertida para Centímetro Já
$anos = 0;

while($tamJuca <= $tamChico) {

    $tamChico += 2;
    $tamJuca += 3;
    $anos++;
}

echo "Serão necessário $anos Anos para que Juca seja maior do que Chico.";

?>
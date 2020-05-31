<?php

$massainicial = addslashes($_POST['massa']);
$massafim = $massainicial;
$segundos = 0;

while ($massafim >= 0.10)
{
    
    $massafim = $massafim / 0.25;
    $segundos += 30;

}

$h = $segundos/3600;
$m = ($segundos%3600)/60;
$s = ($segundos%3600)%60;

echo "Tempo : $h:$m:$s";
<?php
    
    $vetor=array(111,154,199,23,3,854,4,193,50,556,6,62,741,-44,8,7,98,202,150,181,0);
    $tam = count($vetor);
    $qtd = 0;
   
    for ($i=0; $i<$tam; $i++) {

        if($vetor[$i] >100 && $vetor[$i] < 200){
            $qtd += 1;
        }

    }

    echo "<h3>$qtd Números foram informados entre 100 e 200</h3>";
   
?>
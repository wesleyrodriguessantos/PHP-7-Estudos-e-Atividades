<?php

if(!isset($_POST['num']) || $_POST['num'] < 1){

    echo "Dados Inválidos!!";

} else {

    $numero = $_POST['num'];

    $soma = 0;

    for ($i=1; $i<=$numero; $i++) {

        echo "$i" . " ";

        $soma = $soma + $i;

    }

    echo "<br>" . "O produto dessa soma é: $soma";

}

?>
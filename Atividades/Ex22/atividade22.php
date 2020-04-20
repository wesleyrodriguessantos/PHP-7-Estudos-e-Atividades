<?php

if(!isset($_POST['livro']) || !isset($_POST['user']) || $_POST['livro'] == '' || $_POST['user'] == ''){

    echo "Dados não foram localizados.";

} else {

    $livro = $_POST['livro'];
    $user = $_POST['user'];

    if ($user === "Professor" || $user === "professor"){

        echo "----Professor----" . "<br>" . "Você tem 10 dias a partir da data de empréstimo para fazer a devolução do Livro: $livro";

    } elseif ($user === "Aluno" || $user === "aluno") {

        echo "----Aluno----" . "<br>" . "Você tem 03 dias a partir da data de empréstimo para fazer a devolução do Livro: $livro";

    } else {

        echo "Usuário não Identificado. Você não está apto para fazer o empréstimo de um livro.";

    }

}

?>
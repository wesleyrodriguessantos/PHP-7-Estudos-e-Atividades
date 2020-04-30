<?php

if (isset($_POST['Id'])) {
    $id = filter_input(INPUT_POST, 'Id', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['Id'])) {
    $id = filter_input(INPUT_GET, 'Id', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
    $id = 0;
}

if (isset($_POST['Nome'])) {
    $nome = filter_input(INPUT_POST, 'Nome', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['Nome'])) {
    $nome = filter_input(INPUT_GET, 'Nome', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
    $nome = "";
}

if (isset($_POST['Sexo'])) {
    $sexo = filter_input(INPUT_POST, 'Sexo', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['Sexo'])) {
    $sexo = filter_input(INPUT_GET, 'Sexo', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
    $sexo = "";
}

if (isset($_POST['Cidade'])) {
    $cidade = filter_input(INPUT_POST, 'Cidade', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['Nome'])) {
    $cidade = filter_input(INPUT_GET, 'Cidade', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
    $cidade = "";
}
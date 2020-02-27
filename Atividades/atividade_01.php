<html>
<head>
	<title>Atividade_01</title>
	<meta charset="utf-8"/>
</head>
<body>

	<h3>Efetue um algorítmo PHP que receba um valor digitado pelo usuário e imprima o texto "o
valor é maior que 10" caso isso seja verdade, senão imprima "o valor é menor que 10".</h3>

<form method="POST">

<input type="text" name="valor">

<input type="submit" value="Submeter">

</form>

<?php 

	$valor = $_POST['valor'];

	if ($valor >= 10) {
		echo "O valor eh maior ou igual a 10!";
	} else {
		echo "O valor eh menor que 10!";
	}

 ?>

</body>

</html>

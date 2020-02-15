<?php 

	$link = "https://www.raffcom.com.br/site/wp-content/uploads/2015/07/tratamento_imagem.jpg";

	$content = file_get_contents($link);

	$parse = parse_url($link);

	$basename = basename($parse["path"]);

	$file = fopen($basename, "w+");

	fwrite($file, $content);

	fclose($file);

 ?>

 <img src="<?=$basename?>">
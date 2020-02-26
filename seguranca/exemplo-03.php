<?php 

	$pasta = "arquivos";
	$permissao = "0775";

	if (!is_dir($pasta)) mkdir($pasta);

	echo "Diretório Criado com Sucesso!!";

	//5 Leitura e execução (4+1)
	//6 Leitura e gravação/Escrita (4+2)
	//7 Leitura, Gravação e execução (4+2+1)
	//0 NADA
	//1 Permissão de execução
	//2 Permissão de Escrita
	//4 Permissão de Leitura
	//(r) Leitura
	//(w) Escrita
	//(x) Execução
	//EXEMPLO: A  permissão 610 indica que o arquivo tem permissão:
	//6 Para o Dono do arquivo
	//1 Para o Grupo
	//0 para outros

 ?>
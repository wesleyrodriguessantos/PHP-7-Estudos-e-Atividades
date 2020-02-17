<?php 
	
	function trataNome($nome) {
		if(!$nome){
			throw new Exception("Nenhum nome foi informado!", 1);
		}

		echo ucfirst($nome)."<br>";
	}

	try {

		//Com conteúdo
		trataNome("Grande Wesley");
		//Vazio
		trataNome("");

	} catch (Exception $e){

		echo $e->getMessage();

	} finally {

		echo "<br>Executou o Try!";
	}

 ?>
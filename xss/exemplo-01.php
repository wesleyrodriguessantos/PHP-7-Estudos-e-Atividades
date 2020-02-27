<form action="#" method="post">
	
	<input type="text" name="busca">
	<button type="submit">Enviar</button>

</form>

<?php 
	
	if(isset($_POST['busca'])) {

		//Retira as tags HTML e PHP de uma string, quando coloquei o '<strong> eu permiti que somente ele pudesse funcionar!'
		echo strip_tags($_POST['busca'], "<strong>");
		//Converte todos os caracteres aplicáveis em entidades html.
		//echo htmlentities($_POST['busca']);
	}
	
 ?>
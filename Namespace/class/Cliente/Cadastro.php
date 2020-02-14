<?php 


	namespace Cliente;

	class Cadastro extends \Cadastro {

		public function registrarVenda(){

			echo "Foi registrada uma grande venda para o cliente " . $this->getNome();
		}
	}


 ?>
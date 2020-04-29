<?php

 abstract class ClassConexao {

    //Realizará a Conexão com o Banco de Dados
    protected function conectaDB()
    {
        try {

            $Con = new mysqli("localhost", "root", "","crud");
            return $Con;

        } catch (Exception $Erro) {
            
        $Erro->getMessage();
        
        }
    }

}
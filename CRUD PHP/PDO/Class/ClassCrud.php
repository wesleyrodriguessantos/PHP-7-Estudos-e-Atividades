<?php

class ClassCrud extends ClassConexao {

    private $crud;
    private $contador;

    //Preparação das declarativas
    public function preparedStatements($query, $parametros)
    {
        $this->countParametros($parametros);
        $this->crud = $this->conectaDB()->prepare($query);
        
        if ($this->contador > 0) {
            for ($i=1; $i<=$this->contador; $i++)
            {
                $this->crud->bindValue($i, $parametros[$i-1]);
            }
        }

        $this->crud->execute();
    }


    //Contador de Parâmetros
    private function countParametros($parametros)
    {
        $this->contador = count($parametros);

    }
}
<?php

include ("ClassConexao.php");

class ClassCrud extends ClassConexao{

#Atributos
private $crud;
private $contador;
private $resultado;

#Preparação das declarativas
private function preparedStatements($query, $tipos , $parametros)
{
    $this->countParametros($parametros);
    $con=$this->conectaDB();
    $this->crud=$con->prepare($query);
    if($this->contador > 0){
       $callParametros = array();
        foreach($parametros as $Key => $parametro){
            $callParametros[$Key] = &$parametros[$Key];
        }
        array_unshift($callParametros, $tipos);
        call_user_func_array(array($this->crud,'bind_param'),$callParametros);
    }
    $this->crud->execute();
    $this->resultado=$this->crud->get_result();
}

#Contador de parâmetros
private function countParametros($parametros)
{
    $this->contador=count($parametros);
}

#Método de Inserção
public function insertDB($tabela , $condicao , $tipos , $parametros){
    $this->preparedStatements("insert into {$tabela} values ({$condicao})" , $tipos , $parametros);
    return $this->crud;
}
}
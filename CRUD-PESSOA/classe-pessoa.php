<?php

Class Pessoa {

    
    private $pdo;

    //Conexão com o Banco de Dados
    public function __construct($dbname, $host, $user, $password)
    {
        try {

            $this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host,$user,$password);

        } catch (PDOException $e) {
            echo "Erro com o Banco de Dados: ".$e->getMessage();
            exit();
        } catch (Exception $e) {
            echo "Erro Generico: " . $e->getMessage();
            exit();
        }
        
    }

    //FUNÇÃO PARA BUSCAR DADOS E COLOCAR NO CANTO DIREITO
    public function buscarDados ()
    {
        $res = array();
        $cmd = $this->pdo->query("SELECT * FROM pessoa ORDER BY id DESC");
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }
}
?>
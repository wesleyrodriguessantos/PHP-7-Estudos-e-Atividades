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

    //Função para Cadastrar pessoas no Banco de Dados
    public function cadastrarPessoa ($nome, $telefone, $email)
    {
        //ANTES DE CADASTRAR, PRECISAMOS VERIFICAR O EMAIL SE JÁ NÃO FOI CADASTRADO ANTES
        $cmd = $this->pdo->prepare("SELECT id FROM pessoa Where email = :e");
        $cmd->bindValue(":e", $email);
        $cmd->execute();

        if($cmd->rowCount() > 0) //Email já existe no Banco
        {
            return false;
        } else //Não foi encontrado o email correrspondente 
        {
            $cmd = $this->pdo->prepare("INSERT INTO pessoa (nome, telefone, email) VALUES (:n, :t, :e)");
            $cmd->bindValue(":n", $nome);
            $cmd->bindValue(":t", $telefone);
            $cmd->bindValue(":e", $email);
            $cmd->execute();
            return true;

        }
    }

    public function excluirPessoa ($id) 
    {
        $cmd = $this->pdo->prepare("DELETE FROM pessoa WHERE id = :id");
        $cmd->bindValue(":id", $id);
        $cmd->execute();
    }

    //BUSCAR DADOS DE UMA PESSOA
    public function buscarDadosPessoa ($id) 
    {
        $res = array();
        $cmd = $this->pdo->prepare("SELECT * FROM pessoa WHERE id = :id");
        $cmd->bindValue(":id", $id);
        $cmd->execute();
        $res = $cmd->fetch(PDO::FETCH_ASSOC);
        return $res;
    }

    //ATUALIZAR OS DADOS NO BANCO DE DADOS
    public function atualizarDados ($id, $nome, $telefone, $email)
    {
        $cmd = $this->pdo->prepare("UPDATE pessoa SET nome = :n, telefone = :t, email = :e WHERE id = :id");
        $cmd->bindValue(":n", $nome);
        $cmd->bindValue(":t", $telefone);
        $cmd->bindValue(":e", $email);
        $cmd->bindValue(":id", $id);
        $cmd->execute();

    }

}
?>
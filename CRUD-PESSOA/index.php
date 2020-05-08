<?php
require_once 'classe-pessoa.php';
$p = new Pessoa("crudpdo","localhost","root","");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Pessoa</title>
    <link rel="stylesheet" href="estilo.css" >
</head>
<body>
    <?php
        if (isset($_POST['nome']))
        {
            $nome = addslashes($_POST['nome']);
            $telefone = addslashes($_POST['telefone']);
            $email = addslashes($_POST['email']);
            
            if (!$p->cadastrarPessoa($nome, $telefone, $email))
            {
                echo "Email já está Cadastrado!";
            }
        
        }

    ?>
    <section id="esquerda">
    <form method="POST">
            <h2>CADASTRAR PESSOA</h2>
            <label for="nome">NOME</label>
            <input type="text" name="nome" id="nome" required>
            <label for="telefone">TELEFONE</label>
            <input type="text" name="telefone" id="telefone" required>
            <label for="email">EMAIL</label>
            <input type="email" name="email" id="email" required>
            <input type="submit" value="Cadastrar">
        </form>
    </section>
    <section id="direita">

    <table>
            <tr id="titulo">
                <td>Nome</td>
                <td>Telefone</td>
                <td colspan="2">Email</td>
            </tr>

        <?php
            $dados = $p->buscarDados();
            
            if (count($dados) > 0) //TEM PESSOAS CADASTRADAS NO BANCO DE DADOS
            {
                for ($i=0; $i < count($dados); $i++) { 
                    echo "<tr>";
                    foreach ($dados[$i] as $k => $v) 
                    {
                        if($k != "id") 
                        {
                            echo "<td>".$v."</td>";   
                        }
                    }
        ?>
                    <td><a href="#">Editar</a><a href="#">Excluir</a></td>
            <?php
                    echo "</tr>";
                }
            } else //Não existe cadastro no Banco de Dados
            {
                echo "Ainda não há Pessoas Cdastradas!";
            }
            ?>   
        </table>
    </section>
    
</body>
</html>
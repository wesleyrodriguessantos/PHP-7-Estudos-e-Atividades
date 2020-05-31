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
        if (isset($_POST['nome'])) //CLICOU NO BOTÃO CADASTRAR OU EDITAR
        {
                //------------------------EDITAR------------------------
                if (isset($_GET['id_up']) && !empty($_GET['id_up'])) {

                    $id_update = addslashes($_GET['id_up']);
                    $nome = addslashes($_POST['nome']);
                    $telefone = addslashes($_POST['telefone']);
                    $email = addslashes($_POST['email']);
                    
                    $p->atualizarDados($id_update, $nome, $telefone, $email);
                    header("location: index.php");
                
                } //------------------------CADASTRAR------------------------
                else  
                {
                    $nome = addslashes($_POST['nome']);
                    $telefone = addslashes($_POST['telefone']);
                    $email = addslashes($_POST['email']);
                    
                    if (!$p->cadastrarPessoa($nome, $telefone, $email))
                    {
                        ?>
                        <div class="aviso" style="width: 90%; height: 50px; margin: 30px auto 0px auto;">
                            <img src="aviso.jpg" style="width: 50px; display: block; float: left;">
                            <h4 style="float: left; line-height: 50px;">Email já está Cadastrado!</h4>
                        </div>
                        
                        <?php
                       
                    }
                }
        
        }

    ?>

    <?php

        if (isset($_GET['id_up'])) //SE A PESSOA CLICAR EM EDITAR 
        {
            
            $id_update  = addslashes($_GET['id_up']);
            $results = $p->buscarDadosPessoa($id_update);

        }

    ?>

    <section id="esquerda">
    <form method="POST">
            <h2>CADASTRAR PESSOA</h2>
            <label for="nome">NOME</label>
            <input type="text" name="nome" id="nome" value="<?php if(isset($results)) { echo  $results['nome']; } ?>"  required>
            <label for="telefone">TELEFONE</label>
            <input type="text" name="telefone" id="telefone" value="<?php if(isset($results)) { echo  $results['telefone']; } ?>" required>
            <label for="email">EMAIL</label>
            <input type="email" name="email" id="email" value="<?php if(isset($results)) { echo  $results['email']; } ?>" required>
            <input type="submit" value="<?php if(isset($results)) { echo  "Atualizar"; } else { echo "Cadastrar"; } ?>">
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
                <td>
                    <a href="index.php?id_up=<?php echo $dados[$i]['id']; ?>">Editar</a>
                    <a href="index.php?id=<?php echo $dados[$i]['id']; ?>">Excluir</a>
                </td>
            <?php
                    echo "</tr>";
                }
            } else //Não existe cadastro no Banco de Dados
            {
                ?>
                <div class="aviso">
                    <h4>"Ainda não há Pessoas Cdastradas!"</h4>
                </div>
                
                <?php
            }
            ?>   
        </table>
    </section>
    
</body>
</html>

<?php

if (isset($_GET['id'])) 
{
    $id_pessoa = addslashes($_GET['id']);
    $p->excluirPessoa($id_pessoa);
    header("location: index.php");
}

?>
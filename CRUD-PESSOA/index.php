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
    <section id="esquerda">
    <form>
            <h2>CADASTRAR PESSOA</h2>
            <label for="nome">NOME</label>
            <input type="text" name="nome" id="nome">
            <label for="telefone">TELEFONE</label>
            <input type="text" name="telefone" id="telefone">
            <label for="email">EMAIL</label>
            <input type="text" name="email" id="email">
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
            
            if (count($dados) > 0) 
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
            }
            ?>   
        </table>
    </section>
    
</body>
</html>
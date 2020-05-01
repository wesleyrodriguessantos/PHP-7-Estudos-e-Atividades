<?php include ("Includes/Header.php") ;
      include ("Class/ClassCrud.php");
?>

    <div class="Content" style="box-sizing: border-box">

    <table class="TabelaCrud">
     <tr>
         <td>Nome</td>
         <td>Sexo</td>
         <td>Cidade</td>
         <td>Ações</td>
     </tr>

     <!-- Estrutura de loop -->
     <?php
     $crud=new ClassCrud();
     $BFetch=$crud->selectDB(
         "*",
         "cadastro",
         "",
         array()
     );

     while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)){
     ?>
     <tr>
         <td><?php echo $Fetch['Nome']; ?></td>
         <td><?php echo $Fetch['Sexo']; ?></td>
         <td><?php echo $Fetch['Cidade']; ?></td>
         <td>
             <a href="visualizar.php"><img src="Images/visualizar.png" alt="Visualizar"></a>
             <a href="atualizacao.php"><img src="Images/editar.png" alt="Editar"></a>
             <a href="delete.php"><img src="Images/delete.png" alt="Deletar"></a>
         </td>
     </tr>
     <?php } ?>
</table>

    </div>

    <script type="text/javascript" src="includes/zepto.min.js"></script>
    <script type="text/javascript" src="Javascript.js"></script>

<?php include("Includes/Footer.php") ?>

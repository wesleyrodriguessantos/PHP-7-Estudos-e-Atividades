<?php include("Includes/Header.php") ?>

    <div class="Content" style="box-sizing: border-box">
      
        <div class="Resultado"></div>

        <div class="Formulario">
            <h1 class="Center">Cadastro</h1>

            <form name="FormCadastro" id="FormCadastro" method="POST" action="Controllers/ControllerCadastro.php">
                <div class="FormularioInput">
                    Nome: <br>
                    <input type="text" id="Nome" name="Nome"style=" width: 100%;
                                                                    height: 45px;">
                </div>

                <div class="FormularioInput">
                    Sexo: <br>
                    <select name="Sexo" id="Sexo">
                        <option value="">Selecione</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                    </select>
                </div>

                <div class="FormularioInput">
                    Cidade: <br>
                    <input type="text" id="Cidade" name="Cidade" style=" width: 100%;
                                                                        height: 45px;">
                </div>

                <div class="FormularioInput FormularioInput100 Center">
                    <input type="submit" value="Cadastrar" style=" width: 100%;
                                                                        height: 45px;">
                </div>

            </div>
        </form>
     
    </div>

    <script type="text/javascript" src="includes/zepto.min.js"></script>
    <script type="text/javascript" src="Javascript.js"></script>

<?php include("Includes/Footer.php") ?>

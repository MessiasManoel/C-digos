<html>
    <body>
        <h2>Cadastro de carro</h2>
        <form method="post">
            <p>Marca:<input type="text"
            name="marca"/></p><br>
            <p>Modelo:<input type="text"
            name="modelo"/></p><br>
            <p>Motor:<input type="text"
            name="motor"/></p><br>
            <p><input type="submit" name=
            "btnCadastro"/>
        </form>

        <?php
        /* Aqui, acionamos o arquivo que
        contém a classe */
        require_once 'carro.php';

        /* Verifica se foi clicado no botão
        para enviar o formulário com os dados */
        if(isset($_POST['btnCadastro'])) {
        /* Aqui estamos criando um objeto, ou
        seja, instanciando a classe carro */
            $carro = new Carro();

            $carro->setMarca($_POST['marca']);
            $carro->setModelo($_POST['modelo']);
            $carro->setMotor($_POST['motor']);
        /* Aqui listaremos o que foi 
        capturado pelo POST e gravado nas va
        riáveis da classe Carro */
            $carro->listaCarro();
        }
        ?>
    </body>
</html>
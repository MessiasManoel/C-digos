<html>
    <body>
        <h2>Cadastro de Empregado</h2>
        <form method="post">
            <p>Nome: <input type="text" name="nome"/></p>
            <p>Sobrenome: <input type="text" name="sobrenome"/></p>
            <p>Salario: <input type="text" name="salario"/></p>
            <p><input type="submit" name="btnCadastro"/>
        </form>
        <?php
        // aqui adicionamos o arquivo que contém a classe
        include("empregado.php");
        // verifica-se se foi clicado no botão para enviar o
        // formulário com os dados 
        if(isset($_POST['btnCadastro'])) {
            // aqui estamos criando um objeto, ou seja, instan
            // ciando a classe empregado
            $fulano = new Empregado();
            // usando o objeto criado para cadastrar o empregado
            // usando as informações digitadas no formulário
            $fulano->cadastro($_POST['nome'], $_POST['sobrenome'], 
            $_POST['salario']);
            // por último listamos os dados do empregado conforme
            // está em nossa classe
            $fulano->listaEmpregado();
        }
        ?>
    </body>
</html>
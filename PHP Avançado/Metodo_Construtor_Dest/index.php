<html>
    <body>
        <h2>Cadastro de pessoa</h2>

        <form method="post">
            <p>Nome: <input type="text" name=
            "nome"/></p><br>
            <p>Parte do corpo: <input type="text"
             name="parte"/></p><br>
            <p><input type="submit" name="btnCadastro"/>
        </form>

        <?php

        // aqui adicionamos o arquivo que contém a classe
        include ("pessoa.php");

        /* verifica-se se foi clicado no botão para
        enviar o formulário com os dados*/
        if (isset ($_POST['btnCadastro'])) {
        /*aqui estamos criando um objeto, ou 
        seja, instanciando a classe pessoa e
        passando um parâmetro para o construtor
        nesse caso o nome da pessoa*/
        $pessoa = new Pessoa($_POST['nome']);

        /* chamanos o método criar_corpo e passamos
        o valor do campo do formulário */
        $pessoa->criar_corpo($_POST['parte']);

        // chamamos o método que irá escrever o corpo
        $pessoa->mostra_corpo();

        // aqui destruimos o objeto para executar
        // o destrutor
        unset($pessoa);        
        }
        ?>
    </body>
</html>
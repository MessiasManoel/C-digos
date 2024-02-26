<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>documento sem título</title>
    </head>

    <body>
        <?php
        // session_start inicia a sessão
        session_start ();
        // as variáveis login e senha recebem os
        // dados digitados na página anterior
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        // Verifica se o login e a senha digitados 
        // batem com os valores fornecidos
        if($login == "admin" && $senha == "123") {
            // coloca na sessão o login e a senha
            // caso tenham sido os corretos e redire
            // ciona para a url site.php
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        header('location:site.php');
        }
        else{
        //caso login ou senha estejam incorretos 
        //são destruídas na memória as variáveis
        //e redirecionado para a página erro.php
        unset ($_SESSION['login']);
        unset ($_SESSION['senha']);
        header('location:erro.php');
        }
        ?>

    </body>
</html>

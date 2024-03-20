<?php

    if(isset($_POST['submit']))
    {
        //print_r('Nome:'.$POST['nome']);
        //print_r('<br>');
        //print_r('Email: '.$POST['email']);
        //print_r('<br>');
        //print_r('Senha:'.$_POST['email']);
        //print_r('<br>');
        //print_r('Sexo:'.$_POST['sexo']);
        //print_r('<br>');
        //print_r('Cidade:'.$_POST['cidade']);
        //print_r('<br>');

        include_once('conexao.php');

        $nome = $_POST ['nome'];
        $email= $_POST['email'];
        $senha= $_POST['senha'];
        $sexo= $_POST['sexo'];
        $cidade= $_POST['cidade'];

        $result = mysqli_query($conexao, "INSERT INTO cadastro (nome,email,senha,sexo,cidade)VALUES('$nome','$email','$senha','$sexo','$cidade')");

        header('Location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viweport" content="width=device-width, initial-scale=1.0">
    <title>Projeto PHP Versátil TI </title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #999999;
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: #002966;
            padding: 15px;
            border-radius: 15px;
            width: 30%;
        }

            .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~.labelInput,
        .inputUser:valid ~.labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }

        #submit{
            background-color: dodgerblue;
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 5px;
        }
        #submit:hover{
            background-color: #ff6600;

        }
        .button {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 14px;
        border-radius: 4px;
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 5px;
        padding-bottom: 5px;
        color: #ffffff;
        background-color: dodgerblue;
        outline: none;
        border: none;
        cursor: pointer;
        display: inline-block;
        text-decoration: none;
        transition: .4s;
        }

        .button:hover {
        color: #ffffff;

        background-color: #ff6600;

        }

    </style>
</head>

<body>

    <div class="box">
    <h1>Cadastro de Clientes</h1>
            <form action="formulario.php" method="POST">
            <fieldset>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">E-mail</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <laber for="senha" class="labelInput">Senha</label>
                </div>
                <br>
                
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="sexo" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="sexo" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="sexo" value="outro" required>
                <label for="outro">Outro</label>
                <br><br><br>

                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade/UF</label>
                </div>
                <br><br>

                <input type="submit" name="submit" id="submit" value="Cadastrar">
                <br><br>

                <a href="index.php" class="button">Voltar</a>
                
            </fieldset>
        </form>
    </div>
</body>
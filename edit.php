<?php
    include_once('conexao.php')

    if(!empty($_GET['id']))
    {
        
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM cadastro WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $email = $user_data['email'];
                $senha = $user_data['senha'];
                $sexo = $user_data['sexo'];
                $cidade = $user_data['cidade'];
            }
        }
        else
        {
            header('Location: sistema.php');
        }
    }
    else{
        header('Location: sistema.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto PHP Versátil Ti</title>
    <link rel="stylesheet" type="text/css" href="css/edit.css">
</head>

<body>
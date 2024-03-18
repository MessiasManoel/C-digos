<?php
    session_start();
    include_once('conexao.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {        
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
    if(!empty($_GET['search'])) 
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM cadastro WHERE id LIKE '%data%' or nome LIKE '%data%' or
        email LIKE '%data%' ORDER BY id DESC";
    }
    else {

        $sql = "SELECT * FROM cadastro ORDER BY id DESC";
    }
    $result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/sistema.css">
    <title>Projeto PHP Versátil Ti</title>

</head>


</html>


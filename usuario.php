<?php
    session_start();
     
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {

        // Acessa

        include_once('conexao.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT 8 FROM cadastro WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        // print_r($sql);
        // print_r($result);

        if(mysqli_num_rows($result) < 1) {

            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
        else {

            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');
        }
    }
        
    else {
        // Não acessa
        header('Location: login.php');
    }
?>

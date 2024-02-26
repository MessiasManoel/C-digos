<?php
//Conexão com arquivo externo
include "conecta_banco.php";

//INSERIR REGISTROS NO BANCO DE DADOS.
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO cadastro_aluno (nome, email, senha)
VALUES ('$nome', '$email', '$senha')";

if (mysqli_query($conexao, $sql)) {

    echo "<script>alert('Registro Gravado com Sucesso!');</script"; // alerta de envio javascript
    echo ("<script>location.href='formulario_inserir_dados_aluno.html'</script>"); // retorna página de envio
 }else {
    echo "Erro: " .$sql . "<br>" . mysqli_error($conexao);
 }

 mysqli_close($conexao); //FECHA CONEXÃO

 ?>
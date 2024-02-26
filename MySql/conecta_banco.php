<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "aluno_messias";
	
	$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
	
	if(!$conexao) {
		die("Erro ao tentar conectar: " . mysqli_connect_error());
	}
	
?>
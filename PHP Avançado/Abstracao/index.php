<?php
// Inclui a classe
Include ('Mulher.php');

// Uso da classe concreta, chamando método, para acessar o
// atributo nome da classe Pessoa
$mulher = new Mulher("Marcia", "Meow");
$mulher->exibirNome(); //Uso do método abstrato, declarando
// na classe Pessoa, sobrecarregado e implementado na classe
// Mulher

// Variável senha recebe método estático gerarSenha() da
// classe abstrata Pessoa, para isso, não é necessário uso
// do objeto $mulher (instância da classe Mulher)
echo  "<br>";
$senha = Pessoa::gerarSenha(); // O uso de dois pontos 
// duplos (Paamayim Nekudotayim) faz a resolução de escopo,
// chamando o método da classe Pessoa, através do include
// da classe Mulher
echo "<br> senha de acesso: " . $senha;
$senha="";

?>
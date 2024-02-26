<?php
/*
* para declarar uma classe deve utilizar a palavra
reservada class e logo depois o nome da classe.
Veja que no nome da classe a primeira letra está
em maiúsculo para justamente diferenciá-la */
class Pessoa {
    public $nome;
    private $corpo;

    /** Método construtor */
    function __construct($n) {
        $this->nome = $n;
        echo "<p>Olá {$this->nome} seja bem-
        vindo(a)</p>";
    }

    /** * Método que cria meu corpo.. **/
    function criar_corpo($parte) {
        $this->corpo .= "{$parte}";
    }

    // método para mostrar o corpo
    function mostra_corpo() {
        echo $this->corpo;
    }

    // método que será executado quando o
    // objeto for destruido
    function __destruct() {
        echo "<br> eu sou um método destrutor";
    }
}
?>

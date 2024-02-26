<?php
// Uma pessoa
    abstract class Pessoa {
        protected $nome, $sobrenome;
// Método construtor, atribui valor ao atributo nome
// 0 references / 0 overrides
        public function __construct($nome, $sobrenome) {
            $this->nome = $nome;
            $this->sobrenome = $sobrenome;
        }
// Método que pode ser implementado de acordo com as classes herdeiras
// 1 reference | 0 override
        abstract public function exibirNome();
// Método que não necessita ser invocado pelo objeto da classe
// 0 reference| 0 override
        
        public static function gerarSenha() {
            $pass = rand(165243, 612534);
            return $pass;
        }
// Variável $pass usada como retorno do método recebe saída da
// função geradora de números aleatórios
// 1 reference | 0 override
    }

?>
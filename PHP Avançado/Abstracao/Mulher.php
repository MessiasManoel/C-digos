<?php
include('Pessoa.php');

 // Classe filha (subclasse) da classe Pessoa
 // 1 reference | 0 implementations
 class Mulher extends Pessoa {
    // sobrecarga do método abstrato, declarado na classe mãe
    // 1 reference | 0 overrides | prototype
        public function exibirNome() {
            echo "Usuário: " . 
            $this->nome . " " . 
            $this->sobrenome;
        }
    }
    
    ?>
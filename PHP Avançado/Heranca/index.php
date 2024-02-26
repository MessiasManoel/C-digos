<html>
    <head>
        <meta charset="UTF-8">
        <title>Herança</title>        
    </head>
    <body>
        <?php

        class Pessoa {
            var $nome;
            var $endereco;
            var $idade;
    
            function ImprimeDados() {
                echo "Nome: {$this->nome}<br>";
                echo "Endereço: {$this->endereco}<br>";
                echo "Idade: {$this->idade}<br>";
            }
        }       

        class Funcionario extends Pessoa {
            var $salario;
            var $cargo;

            function obterSalario() {
                $this->salario -= $this->salario * 0.1;
                echo "Salário: {$this->salario}<br>";
            }
            
            function ImprimeDados() {
                parent :: ImprimeDados();
                echo "Salário Bruto: {$this->salario}<br>";
                echo "Cargo: {$this->cargo}<br>";
            }            
        }
        ?>

        <?php
            $func = new Funcionario();
            $func->nome = "Carlos Eduardo";
            $func->endereco = "Assis Brasil, 123";
            $func->idade = 23;
            $func->salario = 2000;
            $func->cargo = "Diretor";
            echo "<b>Dados do funcionário</b><br>";
            echo "{$func->ImprimeDados()}";
           
            echo "{$func->ObterSalario()}";
            ?>

    </body>
</html>
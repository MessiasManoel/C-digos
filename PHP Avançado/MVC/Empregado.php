<?php
/*
 * Para declarar uma classe deve-se utilizar a palavra reservada
 * class e logo depois o nome da classe. Veja que no nome da
 * classe a primeira letra está em maiúsculo, para justamente
 * diferenciá-la.
 */
 class Empregado {
    // Aqui, cria-se os atributos, ou seja, as variáveis que 
    // irão armazenar os dados pertinentes a representar a classe
    public $nome;
    public $sobrenome;
    public $salario_mensal;
    /*
    Este método será utilizado para cadastrar um empregado.
    Veja que estão sendo passados três parâmetros para o 
    método, que irão representar os atributos, respectivamente:
    nome, sobrenome, salário mínimo.
    Os métodos representam as ações que uma classe pode executar.
    */
    public function cadastro($n, $sn, $sm) {
       /*
        Para poder utilizar atributos e métodos da propria
        classe, utiliza-se a palavra reservada $this seguida do
        sinal -> e o nome do atributo. Ela é uma instancia da
        classe dentro dela mesma.
        */
        $this->nome = $n;
        $this->sobrenome = $sn;
        /*
        Aqui se faz uma validação do valor do salario minimo.       
        Antes de passar para o atributo, verifica-se se o salario
        minimo é menor do que zero. Sendo um valor negativo,
        atribui-se 0.0 ao atributo; caso contrario, atribui-se
        o valor do salario minimo digitado.
        */
        if($sm < 0) {
            $this->salario_mensal = 0;
        }
        else
            $this->salario_mensal = $sm;
    }
    public function listaEmpregado() {
        /*
        Veja que para escrever os atributos com o echo, precisamos
        colocar entre chaves
        */
        echo "
            <p>Nome: {$this->nome}</p>
            <p>sobrenome: {$this->sobrenome}</p>
            <p>salário: {$this->salario_mensal}</p>";
    }

 }
 ?>
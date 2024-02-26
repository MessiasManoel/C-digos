<?php

class Carro {
    /*
    public: significa que você tem acesso aos a
    tributos ou métodos tanto na classe quanto
    nas suas instâncias;
    private: significa que você tem acesso so
    mente dentro da classe
    */
    private $marca;
    private $modelo;
    private $motor;

    function getMarca() {
        return $this->marca;
    }
    function getModelo() {
        return $this->modelo;
    }
    function getMotor() {
        return $this->motor;
    }
    function setMarca($marca) {
        $this->marca = $marca;
    }
    function setModelo($modelo) {
        $this->modelo = $modelo;
    }
    function setMotor($motor) {
        $this->motor = $motor;
    }

    public function potencia_motor($motor) {
        if($motor >= 1.8) {
            echo "Potência do motor: Carro
            Potente";
        }
        else {
            echo "Potência do motor: Carro
            Popular";
        }
    }
    /*
    Veja que, para escrever os atributos com o 
    "echo", precisamos colocar entre chaves {}
    */
    public function listaCarro() {
        echo "
        <p>Marca: {$this->getMarca()}</p>
        <p>Modelo: {$this->getModelo()}</p>
        <p>Motor: {$this->getMotor()}</p>
        {$this->potencia_motor($this->getMotor())}";

        }
}
?>
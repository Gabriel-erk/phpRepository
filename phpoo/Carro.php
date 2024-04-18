<?php

require_once "Veiculo.php";

// herdando tudo que a classe veiculo oferece (podendo atribuir minhas proprias funcionalidades, metodos, atributos....)
class Carro extends Veiculo
{

    private $velocidade;
    private $ligado = false;
    private $parado;

    public function ligar()
    {
        $this->ligado = true;
        $this->velocidade = 0;
        echo "o carro $this->modelo esta ligado <br>";
    }

    public function desligado()
    {

        if ($this->parado == true) {
            echo "o carro $this->modelo está desligado <br>";
            $this->ligado = false;
        } else {
            echo "velocidade alta demais para desligar";
        }
    }

    public function frear()
    {
        if ($this->velocidade > 0) {
            $this->velocidade -= 5;
            echo "o carro $this->modelo reduziu para: $this->velocidade km/h <br>" ;
        }
    }

    public function parar()
    {
        if($this->velocidade > 0) {
            echo "velocidade alta demais para parar <br>";
            return;
        }
        $this->parado = true;
        echo "o carro $this->modelo está parado <br>";
    }

    public function acelerar()
    {
        if ($this->ligado == false) {
            echo "o carro $this->modelo não esta ligado";
            return;
        }
        $this->velocidade += 5;
        echo "o carro $this->modelo | $this->marca | $this->cor está acelerando para $this->velocidade km/h <br>";
    }
}

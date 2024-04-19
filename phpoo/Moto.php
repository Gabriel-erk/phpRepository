<?php

require_once "Veiculo.php";

class Moto extends Veiculo {
    private $velocidade;
    private $ligado = false;
    private $parado;
    private $freio = false;

    public function ligar() {
        if($this->ligado == false) {
            $this->ligado = true;
            echo "a moto $this->modelo esta ligada <br>";
        }
    }

    public function acelerar() {
        if ($this->ligado == false) {
            echo "a moto $this->modelo não está ligada <br>";
        } else {
            $this->velocidade += 5;
            echo "a moto $this->modelo está acelerando para $this->velocidade km/h <br>";
        }
    }

    public function frear() {
        if ($this->velocidade > 0) {
            $this-> velocidade -= 5;
            echo "a moto $this->modelo reduziu para: $this->velocidade km/h <br>";
        }
    }

    public function parar() {
        if ($this->velocidade > 0) {
            echo "velocidade alta demais para parar <br>";
        } else {
            $this->parado = true;
            echo "a moto $this->modelo parou <br>";
        }
    }

    public function desligado() {
        if ($this->parado == true) {
            echo "a moto $this->modelo esta desligado <br>";
            $this->ligado = false;
        } else {
            echo "a moto não esta parada";
        }
    }

    public function empinar() {
        if($this->velocidade <= 20) {
            $this->freio = true;
            echo "a moto $this->modelo esta empinando <br>";
        }
        else {
            echo "velocidade alta demais para empinar";
        }
    }

}


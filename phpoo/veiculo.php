<?php

// por regra o nome do arquivo é o nome da classe, em  OO a classe começa com letra maiuscula
class Veiculo
{
    /* definindo o atributo cor (palavra reservada public seria como o "this" do js ao definir um atributo de um objeto) 
     * com parametro de visibilidade publico, permitindo que as variaveis do tipo "veiculo" possam acessar estes atributos
     * todos tem acesso a atributos public
     */
    public $cor;
    // protected, permite que classes filhas, manipulem seus atributos
    protected $marca;
    protected $modelo;

    // metodo de encapsulamento com construtor
    public function __construct($marca, $modelo, $cor)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
    }

    // criando metodo de validação, onde entrará a regra de negócio, e ela verificara da sua maneira, com seus critérios, quando o atributo com visibilidade privada podera ser utilizado
    /* set coloca informação, get, pega informação
     * metodo de encapsulamento
     */
    public function setMarca($marca)
    {
        /* daqui para cima ficaria o metodo de validação, para verificar se o atributo poderá ser utilizado ou não */
        // alterando valor do atributo marca (private $marca)
        $this->marca = $marca;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    // get sera para imrpimir na tela
    public function getMarca() {
        echo $this->marca;
    }

    public function getModelo() {
        echo $this->modelo;
    }

    public function imprimirDetalhes() {
        echo "<hr>";
        // forma concatenada
        echo "Modelo: ", $this->modelo;
        echo "<br>";
        // forma interna
        echo "Marca: $this->marca"; 
        echo "<br>";
        echo "Cor: $this->cor"; 
        echo "<hr>";
    }
}


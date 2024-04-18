<?php

// como carro.php ja faz uma extensão do arquivo "Veiculo.php", não é totalmente necessário te-lo aqui novamente
require_once "Veiculo.php";
require_once "Carro.php";

$veiculo = new Veiculo("BMW", "IX35", "Vermelho");

$veiculo->getMarca();
echo "<br>";
$veiculo->getModelo();

$veiculo->imprimirDetalhes();

echo "<hr>-------------------------------------------<hr>";

echo "Utilizando Classe Carro \n";

/* passando 3 valores de parametros, pois na classe Veiculo, existe um construtor que exige 3 valores de paramero (são necessários passar estes valores por conta do construtor de Veiculo, e a classe Carro, herda tudo da classe veiculo, atributos, parametos...) 
* caso Veiculo não tivesse um constructor (pedindo parâmetros), não seria necessário passar estes valores como parâmetros
*/
$carro = new Carro("Porsche", "911", "Preto");
$carro->imprimirDetalhes();

$carro->ligar();
$carro->acelerar();
$carro->acelerar();
$carro->acelerar();
$carro->frear();
$carro->frear();
$carro->frear();
$carro->parar();
$carro->desligado();
$carro->acelerar();





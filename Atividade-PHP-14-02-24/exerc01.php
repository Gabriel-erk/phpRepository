<?php

$cod = 104;
$qntd = 9;

switch ($cod) {
    case 100:
        echo "Código: $cod" . "<br>" . "Produto: Cachorro Quente" . "<br>" . "Valor:" . $qntd * 1.70;
        break;

    case 101:
        echo "Código: $cod" . "<br>" . "Produto: Bauru Simples" . "<br>" . "Valor:" . $qntd * 2.30;
        break;

    case 102:
        echo "Código: $cod" . "<br>" . "Produto: Bauru com Ovo" . "<br>" . "Valor:" . $qntd * 2.60;
        break;

    case 103:
        echo "Código: $cod" . "<br>" . "Produto: Hambúrger" . "<br>" . "Valor:" . $qntd * 2.40;
        break;

    case 104:
        echo "Código: $cod" . "<br>" . "Produto: Cheeseburger" . "<br>" . "Valor:" . $qntd * 2.50;
        break;

    case 105:
        echo "Código: $cod" . "<br>" . "Produto: Refrigerante" . "<br>" . "Valor:" . $qntd * 1.00;
        break;


}
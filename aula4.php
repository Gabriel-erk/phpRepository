<?php

//exemplo de switch....case
//Imprima na tela o nome do mes referente ao numero

$mes = 3;

switch ($mes) {
    //pode-se usar: case ($mes == 1), ($mes <=6)...etc, mas nao pode-se utilizar condição no switch
    case 1:
        echo "Mês Atual: Janeiro";
        // ja encontrei oq estava procurando, entao encerre a execução (se nao testara todos os case)
        break;
    case 2:
        echo "Mês Atual: Fevereiro";
        break;
    case 3:
        echo " Mês Atual: Março";
        break;
    default:
        echo "o numero do mes é invalido";
}

echo "<hr>";

switch ($mes) {
    case($mes <= 3):
        echo "estamos no primeiro trimestre no ano";
        echo "<br>";
        echo "ano atual: 2024";
        break;
    case($mes <= 6):
        echo "estamos no segundo trimestre no ano";
        echo "<br>";
        echo "ano atual: 2024";
        break;
    case($mes <= 9):
        echo "estamos no terceiro trimestre no ano";
        echo "<br>";
        echo "ano atual: 2024";
        break;
    case($mes <= 12):
        echo "estamos no quarto trimestre no ano";
        echo "<br>";
        echo "ano atual: 2024";
        break;
    default:
        echo "o numero do mes é invalido";
}
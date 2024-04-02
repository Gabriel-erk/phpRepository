<?php

echo "<h1>Trabalhando com funções</h1>";

function soma_numeros($num1, $num2)
{
    return $num1 + $num2;
}


// como a função tem 2 parametros, é necessario passar 2 valores, onde, o valor "2" esta associado a $num1 e o valor "4" esta associado a $num2
echo soma_numeros(2, 4);
echo "<br>";
echo soma_numeros(10, 20);

echo "<hr>";
echo "<h2>Verificação de Números Par ou Ímpar</h2>";

function par_ou_impar($parImpar)
{
    // aqui vai retornar se o resultado dessa operação é true, ou false
    return $parImpar % 2 == 0;
}

// se, for true, imprime "é par", se nao, "é impar"
if (par_ou_impar(10)) {
    echo "é par";
} else {
    echo "é impar";
}
// echo par_ou_impar (11);
echo "<hr>";
echo "<h2>Verificação de Idade</h2>";

function is_de_maior($idade)
{
    if ($idade >= 18) {
        // aqui apenas o texto esta sendo retornado, pois o echo sera utilizado na hora de chamar a função
        return "é maior de idade";
    }
    /* dica sobre clean code
     * caso a condição estipulada no if for verdadeira, e ele entrar no return, a maquina para, e sai do escopo da função, ou seja, ele nao ira entrar no else (no contexto atual, teria um else abaixo), como ele nao iria entrar, caso seja verdadeiro, deixando apenas o return, ao inves do else, o programa funcionaria do mesmo jeito, pois so vai entrar nele, se a condição do if for falsa
     */
    return "nao é maior de idade";

}

echo is_de_maior(22);

echo "<hr>";
echo "<h2>Construa uma função, chamada soma_tres(), que retorne a soma de tres numeros</h2>";

function soma_tres($num1, $num2, $num3)
{
    return $num1 + $num2 + $num3;
}

echo soma_tres(20, 40, 10);

echo "<hr>";
echo "<h2>Construa uma função, chamada media(), retorne a média de 4 notas</h2>";

function calculo_media($nota1, $nota2, $nota3, $nota4)
{
    $media = $nota1 + $nota2 + $nota3 + $nota4 / 4;
    return $media;
}

echo calculo_media(10, 8, 5, 7);

echo "<hr>";
echo "<h2>Construa uma função, chamada media_matriz(), retorne a media de todas as notas que estiverem no array</h2>";
// a operação tambem sera realizada com os numeros adicionados
// count é útil em situações onde você precisa saber quantos elementos existem em uma matriz antes de iterar sobre ela ou realizar cálculos com base em seu tamanho. Isso é especialmente útil em loops, onde você precisa saber quantas vezes iterar sobre uma matriz.

$notas = [10, 8, 9, 5.5, 8, 10];
function media_matriz($listaNotas)
{
    $totalNotas = 0;

    foreach ($listaNotas as $nota) {
        //$soma = $soma + nota
        $totalNotas += $nota;
    }

    // função count, pegando apenas os elementos de dentro do array, nao o valor de cada um, e dividindo pelo total desses elementos (no caso, 6)
    return $totalNotas / count($listaNotas);
}

echo "A media é: " . media_matriz($notas);

echo "<hr>";

echo "<h2>Construa uma função, chamada menor_nota(), que retorne a menor nota do array</h2>";

$notas1 = [10, 7, 8, 5, 3, 6.6];

function menor_nota($listaMenorNota)
{

    // inicializando a variavel com a primeira posição do array 
    $menorNota = $listaMenorNota[0];
    foreach ($listaMenorNota as $nota) {

        if ($nota < $menorNota) {
            $menorNota = $nota;
        }

    }
    return $menorNota;
}
echo "O menor numero é: " . menor_nota($notas1);
// função que retorna o menor numero do array
// return min($listaMenorNota);

echo "<hr>";

echo "<h2>encontrando o maior numero</h2>";


$notas2 = [11, 9, 7, 5, 6, 6.1];
function maior_nota($listaMaiorNota){
    
    $maiorNota = $listaMaiorNota[0];
    foreach($listaMaiorNota as $nota){

        if($nota > $maiorNota){
            $maiorNota = $nota;
        }
    }
    return $maiorNota;

}

echo maior_nota($notas2);
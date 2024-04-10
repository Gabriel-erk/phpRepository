<?php

header("Content-Type: text/html; charset=utf-8");
$nome = 'Gabriel Erick <br>';

echo $nome;

// converte uma string para maiuscula
echo strtoupper($nome);

// converte uma string para minuscula
echo strtolower($nome);

// converte para maiusculo a primeira letra da palavra
echo ucwords($nome);

/* Converte tudo para minusculo e depois a primeira letra em maiusculo
 * assim como em uma expressão matematica, sera resolvido primeiro o que esta em parenteses, ou seja, primeiro sera executada a função strtolower($nome) que convertera a string para minusculo, este valor sera retornado, e sera chamada a função ucfirst, que convertera o primeiro caracter para maiusculo
 */
echo ucfirst(strtolower($nome));

echo "<hr>";

$arquivo = "logotipo senac.jpg";
echo $arquivo;
echo "<br>";

/* função str_replace, substitui um caracter
 * sera necessario passar 3 informações, o que a função ira procurar para substituir (no caso, " " o espaço), pelo o que irá substituir (neste caso pelo traço "-") e onde ele tem que procurar e realizar a alteração (no caso, na variavel $arquivo, ira substituir todos os espaços que encontrar por "-")
 */
echo str_replace(" ", "-", $arquivo);

echo "<hr>";

$partes = explode(".", $arquivo);
var_dump($partes);

// pegar o ultimo elemento do array (em situações onde não se sabe exatamente em qual posição esta a ultima devido a grande quantidade de elementos do array)
echo end($partes); // retorna o ultimo item do array

echo "<hr>";
// juntando uma nova string com o trecho "retirado" de outra string (no caso a nossa extensão jpg)
echo "novonome." . end($partes);

echo "<hr>";
echo md5(time()) . "." . end($partes); // criar nome aleatorio

echo "<hr>";

// 00006 
// 60000

$numero = 36;

/* preenchendo esquerda o valor de $numeros com 0, ate atingir 5 caracteres 
 * qual variavel ira preencher, quantos caracteres devera ter, e com o que ira preencher estes caracteres 
 * STR_PAD_LEFT, comando para mudar o padrao de str_pad (que por padrão alocaria o preenchimento a direita)
 */
echo str_pad($numero, 6, 0, STR_PAD_LEFT);

echo "<hr>";

echo str_repeat("Gabriel ", 50);

echo "<hr>";

$valor = 1250.50;

/* number_format(variavel que sera atingida, quantas casas decimais ela possui, o qur quero trocar (no caso, virgula), pelo que irei trocar(no caso, ponto)) 
 * aqui para converter do banco de dados para imprimir na tela
 */
echo "R$ " . number_format($valor, 2, ",", ".");

echo "<hr>";

$valor = "1.250,50";

/* utiliando str_replace de forma aninhada, onde, novamente, será executado primeiro o segundo str_replace, que retornará um valor substituindo o ponto por nada, e logo após, substuira, do valor retornado, a virgula por ponto */
$valorDB = str_replace(",", ".", str_replace(".", "", $valor));

echo $valorDB;

echo "<hr>";

$data = "10/04/2024";

// formatando data para o formato correto do banco de dados (2024-04-10) - da para fazer o contrario a partir deste comandos também
$dataDB = substr($data, 6, 4) . "-" . substr($data, 3, 2) . "-" . substr($data, 0, 2);
echo $dataDB;

<?php 



//aprendendo array no php
//dentro do array é sempre , nao ; - e sua atribuição nao é $i = 10, e sim (por exemplo), $i => 10
echo "<h1> Utilizando Array </h1>";

## array unidimensional
$listaCompras = ['arroz','feijao','banana','maça'];

// imprimindo as posiçoes do array e o seu conteudo - => para o array este sinal é o sinal de atribuição de valores
print_r($listaCompras);
echo '<hr>';

// indica a quantidade de valores do array - posição do indice => tipo - qntd de caracteres
var_dump($listaCompras);
echo '<hr>';

// esta tag deixa um texto pre formatado, facilitando a visualização do conteudo da array - so funciona com print_r
echo '<pre>';
print_r($listaCompras);
echo '<pre>';
// serve para executar o codigo ate aqui, dando um 'break', e os comandos abaixo nao sao executados
// exit;

echo '<hr>';
echo $listaCompras[2];

echo '<hr>';

#Array Associativo
echo '<h2>Array Associativo</h2>';

//sempre que houver uma virgula, significa que sera adicionado mais um item no seu array
$listaDeCompra = [
    12 => 'Arroz',
    26 => 'Feijão',
    22 => 'Banana',
    36 => 'Maça'
];

// esta com esta formatação apos alterar as configurações do php atraves do xampp (em laragon isto ja é automatico)
var_dump($listaDeCompra);

echo '<br>';

echo $listaDeCompra[26];


## Array Multidimensional
echo '<h2>Array Multidimensional</h2>';

// array dentro do outro basicamente - terminando de definir um array dentro de um array, para fazer isso novamente, utilize , e ai sim começe
$listaDasCompras = [
    'Alimentos' => [
        'Arroz',
        'Feijao'   
    ],
    'Frutas' => [
        'Abacaxi',
        'Banana',
        'Tomate'
    ],
    'Massas' => [
        'Macarrão',
        'Lasanha',
    ]
];

echo '<pre>';
print_r($listaDasCompras);
echo '</pre>';
// entrou no primeiro indice, frutas, e depois no outro indice dentro de frutas
echo $listaDasCompras ['Frutas'][2];

// adicionando um novo valor dentro do incidce 'Frutas', o [] vazio diz para o sistema colocar automaticamente na posição correta
$listaDasCompras['Frutas'][] = 'pera';

// metodo para remover array, primeiro, o array, depois, o indice do elemento a ser removido e depois a quantidade de elementos que serao removidos
array_splice($listaDasCompras,2,1);

//metodo alternativo, que realiza a mesma função, porem, os indices nao ficam com valores padronizados (removendo item 2, exibira: 0, 1,3....)
// unset ($listaDasCompras['Frutas'][1]);

echo '<pre>';
print_r($listaDasCompras);
echo '</pre>';

echo '<hr>';

##Imprimindo todos os dados da lista de compras

$listaDeCompra = [
    12 => 'Arroz',
    26 => 'Feijão',
    22 => 'Banana',
    36 => 'Maça'
];

##Imprimindo o valor
//utilizado somente para array
//esta dizendo que ira percorrer o array $listaCompras e ira jogar dentro da variavel $item
foreach($listaDeCompra as $item){
    echo $item . '<br>';
}
echo '<hr>';


#Imprimir o indice e o valor

//mostrando o valor do indice que o valor esta e o valor dentro do mesmo
foreach($listaDeCompra as  $indice => $item){
    echo "<strong> Informações do produto </strong> <br>" ;
    echo "Chave do indice é: $indice . <br>";
    echo "O valor é: $item <br>";
    echo "<hr>";
}
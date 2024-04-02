<?php

$pessoas = [
    1 => [
        'nome' => 'Jose Carlos',
        'cpf' => '222.222.333-77',
        'data_nasc' => '20/05/1972',
        'cidade' => 'Marília'
    ],

    2 => [
        'nome' => 'Roseane da Silva',
        'cpf' => '225.365.258-88',
        'data_nasc' => '25/01/1983',
        'cidade' => 'Oriente'
    ],

    3 => [
        'nome' => 'Marcos dos Santos',
        'cpf' => '258.369.147-78',
        'data_nasc' => '03/07/1963',
        'cidade' => 'Marília'
    ]
];

//  $individuo é um array associativo que representa as informações de uma pessoa (nome, CPF, data de nascimento, cidade).
foreach ($pessoas as $individuo) {
    /* $chave representa o nome do campo (como "nome", "cpf", "data_nasc", "cidade").
$valor representa o valor associado a essa chave (como "Jose Carlos", "222.222.333-77", "20/05/1972", "Marília"). */
    foreach ($individuo as $chave => $valor) {
        echo "<strong>$chave:</strong> $valor <br>";
    }
    echo '<hr>';
}

// foreach($listaDeCompra as $item){
//     echo $item . '<br>';
// }
// echo '<hr>';
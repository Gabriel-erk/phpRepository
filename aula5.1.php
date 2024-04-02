<?php
//utilizando o . colado com o texto para concatenar

echo "===============".PHP_EOL;
echo "Gerador de senha".PHP_EOL;
echo "===============". PHP_EOL;

$ultimaSenha = readline("Digite o numero da senha fim:").PHP_EOL;
$senha = 1;

//executa pelo menos uma vez

do{
    echo $senha.PHP_EOL;
    // utilizando desta maneira (chamada pre incremento), onde o valor da variavel sera somado (incrementado com + 1) e dpois tera que ser comparado com a condição
} while (++$senha <= $ultimaSenha);
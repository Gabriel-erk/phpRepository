<?php

//intval converte o valor recebido para um numero inteiro, corrigindo o erro das strings concatenarem
$tabuada = intval(readline("digite a tabuada: "));
$cont = 0;

echo "=============".PHP_EOL;

do {
    $resultado = $tabuada * $cont;
    echo "$tabuada X $cont = $resultado" . PHP_EOL ;
    $cont++;
} while ($cont <= 10);
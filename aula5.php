<?php
//utilizando o . colado com o texto para concatenar

echo "===============".PHP_EOL;
echo "Gerador de senha".PHP_EOL;
echo "===============". PHP_EOL;

$ultimaSenha = readline("Digite o numero da senha fim:").PHP_EOL;
$senha = 1;

while($senha <= $ultimaSenha){
    echo $senha.PHP_EOL;
    $senha ++;
}
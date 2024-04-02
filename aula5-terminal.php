<?php

echo "aula de laço de repetição";
// criando quebra de linha no terminal
echo PHP_EOL;
echo "Texto nova linha";
echo PHP_EOL;
echo "_______________________";
echo PHP_EOL;

// comando para ler uma informação no TERMINAL (nao funciona no navegador atraves do xampp) do usuario e atribuir na variavel
$nome = readline("Digite seu nome:");
echo PHP_EOL;
echo "seu nome é: " .$nome;
echo PHP_EOL;

$sobrenome = readline("digite seu sobrenome:");
echo PHP_EOL;
echo "seu sobrenome é:" .$sobrenome;
echo PHP_EOL;

echo "seu nome completo é:" .$nome .' ' .$sobrenome;
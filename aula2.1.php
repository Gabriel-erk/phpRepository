<?php

$nome = "Gabriel";
$sobrenome = "Erick";
$idade = 17;
$anoNascimento = 2006;
$anoAtual = 2024;

echo $nome;
echo "<hr>";
echo $sobrenome;
echo "<hr>";

// concatenando variaveis na mesma linha, com aspas duplas (aspas duplas, elas passam por uma fase de compilação, e imprimem o conteudo da variavel, q perde performance em relação a aspas simples)
echo "Meu nome é: $nome $sobrenome";

echo "<hr>";
//com relação a performance, aspas simples (ela nao compila o conteudo, ela so joga as informações na tela)
echo 'Meu nome é: $nome $sobrenome';

echo "<hr>";
//concatenando variaveis com o texto, utilizando pontos - como o conteudo das variaveis ficou unido, concatenamos literalmente um espaço em branco, um pedaço de texto em branco, para separar o conteudo de uma variavel de outro
echo 'Meu nome é:' .$nome .' ' .$sobrenome;

echo "<hr>";
echo "A caixa d'agua está vazia";

echo "<hr>";
// utilizando caracter de escape, onde o prox caracter sera pulado, para nao dar conflito com as outras aspaas q sao iguais
echo 'A caixa d\'agua está vazia';

// aqui, o mesmo exemplo dado acima
echo "<hr>";
echo "A caixa d' \"agua está vazia\"";
echo "<hr>";

// ----------------------------------------- //
//Operadores aritmeticos
// soma +
// subtração -
// multiplicação *
// divisão /
// resto da divisão %
    // resto da divisão %

echo "minha idade é:" .$idade - $anoNascimento;

echo "<hr>";
$idade = $anoAtual - $anoNascimento;
echo "minha idade é: $idade";

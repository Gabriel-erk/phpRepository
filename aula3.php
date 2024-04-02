<?php

echo ("<h1>Trabalhando com estrutura condicional</h1>");

$nome = "Gabriel";
$idade = 18;
$email = "marquinhosRt@gmail.com";
$senha = "marquinhos";
$perfil = "estudante";
$permissao = true;

//////////////////////////////////////////////////////////

echo "<h2>Exemplo de IF (se....)</h2>";

if ($idade >= 18){
    echo "o usuario $nome é maior de idade";
}

echo "<hr>";

echo "<h2>Exemplo de if e else (se...entao...senao...)</h2>";

// utilizando E, onde ambas as condições tem que ser verdadeiras
if ($email == "marquinhosRt@gmail.com" && $senha == "marquinhos"){
    echo "o usuario esta logado";
}
else{
    echo "usuario ou senha invalido";
}

echo "<hr>";

// utilizando OU, onde pelo menos uma das condições tem que ser verdadeiras (comparei com tres condições apenas por teste)
if ($perfil == "estudante" || $perfil == "professor" || $perfil == "funcionario"){
    echo "paga meia entrada";
}
else{
    echo "paga o valor cheio";
}

echo "<hr>";
/////////////////////////////////////////////////////

$nota1 = 8;
$nota2 = 9;

// apenas notas de 0 a 10, teste de intervalo, so passara para o proximo passo se isso for verdadeiro
if ($nota1 >= 0 && $nota1 <= 10){

    if ($nota2 >= 0 && $nota2 <= 10){

    // parenteses na que quer priorizar
     $media = ($nota1 + $nota2) / 2;
     if ($media >= 7){
        echo "aluno aprovado";
     }
     else{
        echo "aluno reprovado";
     }
    }
    else{
        echo "nota 2 invalida.";
    }
}
else{
    echo "nota 1 invalida.";
}
<?php

// linguagem dinamicamente tipada, ou seja, voce nao precisa tipar o tipo de valor da variavel, ela reconhece automaticamente de acordo com o valor que ela recebe

// criando variavel em php
$nomeCompleto = "Gabriel Erick Vicente Ferreira"; //string
$salario = 1450.50; //float, double, decimal
$idade = 23; //inteiro
$status = false; //booleano (verdadeiro ou falso)
const ADMIN = "true"; //constante, ela funciona no sistema inteiro, e seu valor nao pode ser alterado  naquele momento de execução de sistema (apenas no arquivo em que esta), o nome deve ser sempre em maiusculo
define(ADMIN, "true"); //arquivo global, funciona em todos os arquivos da pasta - global (escopo global)

// jogando a varialvel dentro do aspas, para ser imprimido seu conteudo como forma de texto
// echo "", $nomeCompleto;
// echo "<br>";
// echo "", $salario;
// echo "<br>";
// echo "", $idade;
// echo "<br>";
// echo "o valor booleano é" . ADMIN;


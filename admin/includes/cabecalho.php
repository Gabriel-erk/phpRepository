<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        #login {
            /* max-width pela questao de responsividade, onde, se precisar diminuir o tamanho do elemento, ele diminui (diferente de width: 400px, que é uma posição absoluta, e nao muda) */
            /* max-width: 400px; */

            /* quero que o elemento flex filho (login) tenha um tamanho inicial de 400px */
            flex-basis: 400px;
            /* este comando determina se o elemento ira aumentar ou nao, com base na largura do elemento pai (caso o elemento pai for maior e o valor for 1, ele ira aumentar o tamanho do elemento, se for 0, manter o tamanho que startou (flex-basis: 400px)) */
            flex-grow: 0;
            /* o contrario do comando e cima,determina se, pode ou nao diminuir o tamanho do elemento (0, respeita o tamanho inicial, e 1, pode diminuir, bom para utilizar em responsividade, onde dependendo do tamanho da tela, diminui o elemento) */
            flex-shrink: 1;
            /* flex: 0 0 400px; - este é o mesmo comando acima, so que simplificado em uma linha*/
        }
    </style>
</head>

<body>
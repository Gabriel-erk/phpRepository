<?php

session_start();

// isset verifica se alguma variavel esta definida, neste caso, utilizando  "!", inverte isto, entao, verifica se nao existe, e se nao existir, entrara no escopo do if
// se, logado, nao existir (sera "true" e entrara no if), ou logado nao for igual a true (qualquer valor diferente de true), entrara no escopo do if

if(!isset($_SESSION['logado']) || $_SESSION['logado'] !== true){
    header("Location: login.php");
    // exit para evitar problemas que o header causa, e o restante do codigo continua funcionando normalmente
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Administrativa - BookMeNow </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

    <div class="container">

        <header id="cabecalho" class="bg-secondary">

            <!-- row: linha, cada linha possui 12 colunas de espaço -->
            <div class="row justify-content-between">

                <!-- utilizando 1 coluna para esta div -->
                <div class="col-1">
                    <!-- ajustando o padding da esquerda (ps: padding start de 3 px) -->
                    <h1 class="ps-3 text-white">ADMIN</h1>
                </div>

                <!-- utilizando 1 coluna para esta div -->
                <div class="col-1 mt-1">
                    <!-- bootstrap nao se importa com a questao de links, e sim com classes -->
                    <a href="logout.php" class="btn btn-primary">SAIR</a>
                </div>

            </div>

        </header>

        <!-- class row (linha), pois o conteudo dentro de main, tera colunas (col) e para isso a caixa pai tera que ser da classe linha (bootstrap funciona desta maneira row - col), para manipular colunas, precisa-se de um elemento pai do tipo linha -->
        <main class="row">
            <!-- "md" para questao de responsividade para com outros dispositivos -->
            <div id="menu" class="col-md-2">

                <nav>
                    <ul class="list-group mt-3">
                        <li class="list-group-item"><a href="#">Home</a></li>
                        <li class="list-group-item"><a href="#">Cadastro</a></li>
                        <li class="list-group-item"><a href="#">Produtos</a></li>
                        <li class="list-group-item"><a href="#">Usuários</a></li>
                    </ul>
                </nav>

            </div>

            <div id="conteudo" class="col-md-10">
                <h2>Seja bem-vindo, <?=$_SESSION['nome']?></h2>
            </div>

        </main>
        <footer class="mt-5 text-center bg-light p-2">
            <!-- <p> &copy; 2024 - Todos os direitos são reservados</p> - doc do bootstrap diz que, a tag p, tem um bottom de aprox. 15px, entao ao adicionar um p-2, a parte inferior (button) teria um espaçamento maior que o resto, ficando desproporcional -->
            &copy; 2024 - Todos os direitos são reservados
        </footer>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
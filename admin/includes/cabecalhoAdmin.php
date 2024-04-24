<?php 

require_once __DIR__."../autenticacao/verificarLogin.php";


?>

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


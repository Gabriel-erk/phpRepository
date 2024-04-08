<!-- chamar esta linha sempre que precisar verificar se o usuário está logado ou nao, se nao estiver, sera redirecionado para a página de login -->
<?php require_once "./autenticacao/verificarLogin.php" ?>

<?php require_once "./includes/cabecalho.php" ?>

<div class="container">

    <!-- html simples, entao, caso de problemas, quero que o sistema continue rodando, ja que não é algo tão fndamental -->
    <?php include_once "./includes/cabecalhoAdmin.php" ?>

    <!-- class row (linha), pois o conteudo dentro de main, tera colunas (col) e para isso a caixa pai tera que ser da classe linha (bootstrap funciona desta maneira row - col), para manipular colunas, precisa-se de um elemento pai do tipo linha -->
    <main class="row">

        <?php include_once "./includes/menuAdmin.php" ?>

        <div id="conteudo" class="col-md-10">
            <h2>Seja bem-vindo,
                <?= $_SESSION['nome'] ?>
            </h2>
        </div>

    </main>

    <?php include_once "./includes/rodapeAdmin.php" ?>

</div>

<?php require_once "./includes/rodape.php" ?>
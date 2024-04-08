<?php
session_start();
$nome = "Gabriel";
$email = "gbr@gmail.com";
$senha = "12345";

// verifica se a variavel existe
// isset();
// verifica se uma variavel esta vazia
// empty();
// verificando dentro do post se btnEntrar existe (btnEntrar so passa a existir quando botão é clicado)
// se o usuario clicar no botão, sera imprimido um texto na tela
// if (isset ($_POST['btnEntrar'])) {
//     echo "clicou no botao entrar";
// }


// se a sessão com a chave 'logado existir', entre no escopo do if
if (isset($_SESSION['logado'])) {
    // se a sessão com a chave logado tiver o valor de true, entre no escopo do if e redirecione o usuário para a dashboard
    if ($_SESSION['logado'] == true) {
        header("Location: dashboard.php");
        exit;
    }
}

if (isset($_COOKIE['lembrar'])) {
    // se o cookie com a chave 'lembrar', tiver o valor igual ao email do usuario, entre no escopo do if
    if ($_COOKIE['lembrar'] == $email) {


        $_SESSION['nome'] = $nome;
        $_SESSION['logado'] = true;
        header("Location: dashboard.php");
        exit;
    }
}

if (isset($_POST['btnEntrar'])) {

    if ($email == $_POST['email'] && $senha == $_POST['senha']) {

        // iniciando a sessão (para armazenar alguns dados do usuário, ate ele fechar o navegador, que é quando os dados serão perdidos)
        session_start();
        $_SESSION['nome'] = $nome;
        $_SESSION['logado'] = true;

        // se, lembrar existe, verifique se o usuário assinalou o check box, se ele marcou, guarde true, se não, guarde falso na váriavel '$lembra' (so vai passar a existir se, quando clicar no botão ele receber true)
        $lembra = isset($_POST['lembrar']) ? true : false;

        // se a variavel $lembra é true, entre no escopo
        if ($lembra) {
            /* criando um cookie no navegador, com o nome "lembrar" (através deste nome irei me referir ao cookie), que guarda o email do usúario ($email) - chama a função time(), e passa-se uma formula para determinar por quanto tempo este cookie sera valido, no caso: 1 dia (86400 segundos == 24 horas) multiplicado por 30 dias  - */
            setcookie("lembrar", $email, time() + (86400 * 30), "/");
        }

        // função que redireciona para outra página (atraves de uma requisiçao http)
        header("Location: dashboard.php");
        /* utilizar este comando sempre que chamar header, pois a função header possui um delay da sua execução, entao, ele carregaria a página inteira antes de redirecionar, o que resultaria em um bug, para evitar isto, utilizar exit, ou seja, redirecione, e não carregue o resto da tela atual (tela que redirecionara para a outra) */
        exit;

    } else {
        $erro = "Usuário não esta logado";
    }
}

?>

<?php  require_once "./includes/cabecalho.php"  ?>

<!-- vh - view height - 100 (100%), esta pegando a altura baseado no dispositivo monitor -->
<div class="container d-flex justify-content-center align-items-center vh-100">

    <!-- p-3 adiciona um padding de 3 pixels em todas as bordas com base na sua tela (viewport) -->
    <!-- rounded deixa as bordas arredondadas -->
    <!-- shadow-lg coloca uma programação css de sombras -->
    <div id="login" class="border p-3 rounded-3 shadow-lg">
        <h2 class="text-center mt-3">Login</h2>

        <!-- se a variavel $error existe, imprima o conteudo da mesma (utilizando if ternario) -->
        <?php if (isset($error)): ?>
            <div class="alert alert-danger">
                <?= $error ?>
            </div>
        <?php endif; ?>

        <!-- tag form para fazer o formulario funcionar -->
        <!-- action = arquivo que ira verificar, no caso, este próprio arquivo fará a verificação (login) -->
        <!-- method, como são informações sensiveis, serão tratadas como metodo post -->
        <form action="login.php" method="post">
            <!-- adicionando um margin button de 3 (a partir do bootstrap (como esta na doc)) -->
            <div class="mb-3">
                <!-- acessibilidade: for com o mesmo nome de id (sempre ter q ter o mesmo nome, eles sempre fazem ligações entre si) -->
                <!-- classes form-control e form-label utilizadas para formatação (como escritas na documentação do bootstrap) -->
                <label for="email" class="form-label">E-mail</label>
                <input type="text" name="email" id="email" class="form-control">
            </div>

            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" name="senha" id="senha" class="form-control">
            </div>

            <div class="mb-3 form-check">
                <!-- value="", por padrão será passado o valor true ou false (atraves de 0(false) e 1(true)), quando se altera o valor atraves deste atributo, voce muda a forma como isto sera passado para o banco de dados, com o valor escolhido -->
                <input type="checkbox" name="lembrar" id="lembrar" class="form-check-input">
                <label for="lembrar" class="form-check-label">Lembrar-me</label>
            </div>

            <!-- elemento obrigarorio: type (neste caso submit) -->
            <!-- w-100: extendendo o botao para 100% de largura (é mais vantajoso fazer desta maneira quando for fazer com somente um botao, caso for usar mais de um, utilizar metodo de expansao de botao da documentação) -->
            <button name="btnEntrar" type="submit" class="btn btn-primary w-100">Entrar</button>

        </form>

    </div>

</div>

<?php require_once "./includes/rodape.php" ?>
<!--  -->
<?php require "./includes/rodape.php" ?>
<?php
session_start();
$nome = "Gabriel";
$email = "gbr@gmail.com";
$senha = "12345";

// verifica se a variavel existe
// isset();
// verifica se uma variavel esta vazia
// empty();
// verificando dentro do post se btnEntrar existe (btnEntrar so passa a existir quando botão é clicado)
// se o usuario clicar no botão, sera imprimido um texto na tela
// if (isset ($_POST['btnEntrar'])) {
//     echo "clicou no botao entrar";
// }


// se a sessão com a chave 'logado existir', entre no escopo do if
if (isset($_SESSION['logado'])) {
    // se a sessão com a chave logado tiver o valor de true, entre no escopo do if e redirecione o usuário para a dashboard
    if ($_SESSION['logado'] == true) {
        header("Location: dashboard.php");
        exit;
    }
}

if (isset($_COOKIE['lembrar'])) {
    // se o cookie com a chave 'lembrar', tiver o valor igual ao email do usuario, entre no escopo do if
    if ($_COOKIE['lembrar'] == $email) {


        $_SESSION['nome'] = $nome;
        $_SESSION['logado'] = true;
        header("Location: dashboard.php");
        exit;
    }
}

if (isset($_POST['btnEntrar'])) {

    if ($email == $_POST['email'] && $senha == $_POST['senha']) {

        // iniciando a sessão (para armazenar alguns dados do usuário, ate ele fechar o navegador, que é quando os dados serão perdidos)
        session_start();
        $_SESSION['nome'] = $nome;
        $_SESSION['logado'] = true;

        // se, lembrar existe, verifique se o usuário assinalou o check box, se ele marcou, guarde true, se não, guarde falso na váriavel '$lembra' (so vai passar a existir se, quando clicar no botão ele receber true)
        $lembra = isset($_POST['lembrar']) ? true : false;

        // se a variavel $lembra é true, entre no escopo
        if ($lembra) {
            /* criando um cookie no navegador, com o nome "lembrar" (através deste nome irei me referir ao cookie), que guarda o email do usúario ($email) - chama a função time(), e passa-se uma formula para determinar por quanto tempo este cookie sera valido, no caso: 1 dia (86400 segundos == 24 horas) multiplicado por 30 dias  - */
            setcookie("lembrar", $email, time() + (86400 * 30), "/");
        }

        // função que redireciona para outra página (atraves de uma requisiçao http)
        header("Location: dashboard.php");
        /* utilizar este comando sempre que chamar header, pois a função header possui um delay da sua execução, entao, ele carregaria a página inteira antes de redirecionar, o que resultaria em um bug, para evitar isto, utilizar exit, ou seja, redirecione, e não carregue o resto da tela atual (tela que redirecionara para a outra) */
        exit;

    } else {
        $erro = "Usuário não esta logado";
    }
}

?>

<?php  require_once "./includes/cabecalho.php"  ?>

<!-- vh - view height - 100 (100%), esta pegando a altura baseado no dispositivo monitor -->
<div class="container d-flex justify-content-center align-items-center vh-100">

    <!-- p-3 adiciona um padding de 3 pixels em todas as bordas com base na sua tela (viewport) -->
    <!-- rounded deixa as bordas arredondadas -->
    <!-- shadow-lg coloca uma programação css de sombras -->
    <div id="login" class="border p-3 rounded-3 shadow-lg">
        <h2 class="text-center mt-3">Login</h2>

        <!-- se a variavel $error existe, imprima o conteudo da mesma (utilizando if ternario) -->
        <?php if (isset($error)): ?>
            <div class="alert alert-danger">
                <?= $error ?>
            </div>
        <?php endif; ?>

        <!-- tag form para fazer o formulario funcionar -->
        <!-- action = arquivo que ira verificar, no caso, este próprio arquivo fará a verificação (login) -->
        <!-- method, como são informações sensiveis, serão tratadas como metodo post -->
        <form action="login.php" method="post">
            <!-- adicionando um margin button de 3 (a partir do bootstrap (como esta na doc)) -->
            <div class="mb-3">
                <!-- acessibilidade: for com o mesmo nome de id (sempre ter q ter o mesmo nome, eles sempre fazem ligações entre si) -->
                <!-- classes form-control e form-label utilizadas para formatação (como escritas na documentação do bootstrap) -->
                <label for="email" class="form-label">E-mail</label>
                <input type="text" name="email" id="email" class="form-control">
            </div>

            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" name="senha" id="senha" class="form-control">
            </div>

            <div class="mb-3 form-check">
                <!-- value="", por padrão será passado o valor true ou false (atraves de 0(false) e 1(true)), quando se altera o valor atraves deste atributo, voce muda a forma como isto sera passado para o banco de dados, com o valor escolhido -->
                <input type="checkbox" name="lembrar" id="lembrar" class="form-check-input">
                <label for="lembrar" class="form-check-label">Lembrar-me</label>
            </div>

            <!-- elemento obrigarorio: type (neste caso submit) -->
            <!-- w-100: extendendo o botao para 100% de largura (é mais vantajoso fazer desta maneira quando for fazer com somente um botao, caso for usar mais de um, utilizar metodo de expansao de botao da documentação) -->
            <button name="btnEntrar" type="submit" class="btn btn-primary w-100">Entrar</button>

        </form>

    </div>

</div>

<!-- comando que diz que, isto so vai ser chamado uma unica vez, entao, caso ja foi chamado, sera verificado se, esta na memoria, se estiver, ele nao sera chamado novamente (require_once)-->
<?php require_once "./includes/rodape.php" ?>
<!-- este comando permite que seja chamado varias vezes, repetindo bloco de codigo, o que pode acabar não seno a melhor maneira de se trabalhar -->
<!-- require "./includes/rodape.php"  -->
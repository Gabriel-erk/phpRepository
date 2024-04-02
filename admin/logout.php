<?php

/* chamando a sessão inicializada no login.php (preciso deste comando em todo arquivo que, de alguma maneira desejo manipular a sessão existente, no caso, pretendo destrui-la ao clicar no botão sair e redirecionar a página de login), caso nao inicializar a sessão ele não saberá qual sessão destruir */
session_start();

//Destruir seção e redirecionar o usuário para tela de login

// Destruindo sessão
session_destroy();

if(isset($_COOKIE['lembrar'])){
    setcookie("lembrar", "", time() - 3600, "/");
}

// redirecionar para tela de login
header("Location: login.php");
exit;
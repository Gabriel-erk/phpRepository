<?php

session_start();

// isset verifica se alguma variavel esta definida, neste caso, utilizando  "!", inverte isto, entao, verifica se nao existe, e se nao existir, entrara no escopo do if
// se, logado, nao existir (sera "true" e entrara no if), ou logado nao for igual a true (qualquer valor diferente de true), entrara no escopo do if

if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header("Location: login.php");
    // exit para evitar problemas que o header causa, e o restante do codigo continua funcionando normalmente
    exit;
}
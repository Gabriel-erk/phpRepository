<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula PHP</title>
</head>

<body>
    <h1>Aula de programação web</h1>

    <!-- exemplo client side -->
    <a href="javascript:;" id="btnAlerta">Mostrar Alerta</a>

    <script>

        const btnAlerta = document.getElementById("btnAlerta");

        btnAlerta.onclick = function () {
            alert("Este é um exemplo de javascript");
        }
    </script>

    <!-- exemplo server side -->
    <!-- echo serve para imprimir o conteudo na tela - H(hora):i(minuto):s(segundo), mostrando o fuso horario em que esta -->
    <h2>data de hoje é:
        <?php echo date("d/m/Y H:i:s") ?>
    </h2>
</body>

</html>
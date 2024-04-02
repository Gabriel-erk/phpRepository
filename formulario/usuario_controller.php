<?php

/* imprimindo na tela os valores que foram enviados pelo usuario, atraves do botao "cadastrar"

os nomes atribuidos as chaves, sao os mesmos, que foram atribuidos em "name", no form (caso ele nao exista, é impossivel esta informação ser vista, ela nao sera armazenada, e nao sera exibida aqui)
*/
// var_dump($_POST);

echo "<h1>Dados do Usuário</h1>";
echo "<hr>";

//input do tipo text trazem so uma informação, porem, no momento esta sendo trabalhado com formulario, e possuo diversos valores (aqui, um array associativo)
// chamando o metodo do formulario (get), na "posição" "nome" (que é o name, que coloquei no input, no caso "nome", name="nome")
echo "<strong>Nome: </strong>" . $_POST['nome'] . "<br>";
echo "<strong>E-mail: </strong>" . $_POST['email'] . "<br>";
echo "<strong>Senha: </strong>" . $_POST['senha'] . "<br>";
echo "<strong>CEP: </strong>" . $_POST['cep'] . "<br>";
echo "<strong>Endereço: </strong>" . $_POST['endereco'] . "<br>";
echo "<strong>Número: </strong>" . $_POST['numero'] . "<br>";
echo "<strong>Complemento: </strong>" . $_POST['complemento'] . "<br>";
echo "<strong>Bairro: </strong>" . $_POST['bairro'] . "<br>";
echo "<strong>Cidade: </strong>" . $_POST['cidade'] . "<br>";
echo "<strong>Estado: </strong>" . $_POST['estado'] . "<br>";
echo "<strong>Gênero: </strong>" . $_POST['genero'] . "<br>";

/* utilizando função para imprimir todas as posições selecionadas do array (selecionadas pelo usuario), separadas por virgula */
$separando = $_POST['cursos'];
$separado_virgula = implode(', ' , $separando);
echo "<strong>Curso: </strong>" . $separado_virgula . "<br>";
echo "<strong>Sugestão: </strong>" . $_POST['sugestao'] . "<br>";
echo "<strong>Newsletter: </strong>" . $_POST['newsletter'] . "<br>";
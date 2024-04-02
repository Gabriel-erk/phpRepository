<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuario</title>
</head>

<body>
    <!-- nome, email, senha, endereço, telefone, genero(M,F,N), NewsLetter -->
    <h1>Cadastro de Usuário</h1>

    <!-- action="", é basicamente: qual sera o arquivo responsavel que ira tratar estes dados do formulario? -->
    <form action="usuario_controller.php" method="post">
        <!-- agrupamento de campos, form (a utilização disso so depende do projeto, pode ter formulario que nao precise disso)-->
        <fieldset>
            <legend>Dados do Acesso</legend>

            <p>
                <!-- "for", eu estou utilzando o mesmo nome do input, para liga-los um ao outro -->
                <label for="nome">Nome:</label>
                <!-- "name" é basicamente a identificação do meu input, o nome que o php dara para ele -->
                <input name="nome" type="text" id="nome">
            </p>

            <p>
                <label for="email">Email:</label>
                <input name="email" type="email" id="email">
            </p>

            <p>
                <label for="senha">Senha:</label>
                <input name="senha" type="password" id="senha">
            </p>

        </fieldset>

        <fieldset>
            <legend>Dados Complementares</legend>
            <!-- CEP, endereço, numero, complemento, bairro, cidade -->

            <p>
                <label for="cep">CEP:</label>
                <input type="text" name="cep" id="cep">
            </p>

            <p>
                <label for="endereco">Endereço</label>
                <input type="text" name="endereco" id="endereco">

                <label for="numero">Número:</label>
                <input name="numero" type="text" id="numero">
            </p>

            <p>
                <label for="complemento">Complemento:</label>
                <input type="text" name="complemento" id="complemento">
            </p>

            <p>
                <label for="bairro">Bairro:</label>
                <input type="text" name="bairro" id="bairro">
            </p>

            <p>
                <label for="cidade">Cidade:</label>
                <input type="text" name="cidade" id="cidade">
            </p>

            <p>
                <label for="estado">Estado</label>
                <select name="estado" id="estado">
                    <!-- value em branco, ficara apenas como um texto -->
                    <option value="">Selecione o estado</option>

                    <!-- no "value", estou dizendo qual valor sera mandado para o banco de dados apos escolher esta opção - value é a informação que voce quer enviar para o banco de dados, a informação que ira para o back-end -->
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
            </p>

            <p>
                Genero:
                <!-- como label ja envolve o input, nao precisa-se de id - mas caso for fazer algo em javascript, outra tecnologia, pode ser necessario -->
                <!-- o "name" tem que ser igual em todos (em caso de um conjunto de opçoes do tipo radio), para o html entender que, o valor "valido" é somente de uma opção -->
                <label>
                    <input type="radio" name="genero" value="Masculino">Masculino
                </label>

                <label>
                    <input type="radio" name="genero" value="Feminino">Feminino
                </label>

                <label>
                    <input type="radio" name="genero" value="prefiro nao responder"> Prefiro não responder
                </label>
            </p>

        </fieldset>

        <fieldset>
            <legend>Selecione os Cursos do seu interesse</legend>
            <p>
                <!-- name = "cursos[]", significa que, estou criando um array, chamado: "cursos" (do tipo checkbox), e, estou dizendo: "jogue todo elemento selecionado dentro do array cursos[]" -->
                <label>
                    <input type="checkbox" value="Informática Básica" name="cursos[]">Informática Básica
                </label>

                <label>
                    <input type="checkbox" value="PHP" name="cursos[]">PHP
                </label>

                <label>
                    <input type="checkbox" value="HTML5 & CSS3" name="cursos[]">HTML5 & CSS3
                </label>

                <label>
                    <input type="checkbox" value="JavaScript" name="cursos[]">JavaScript
                </label>
            </p>

            <p>
                <label for="">Sugestão: </label>
                <br>
                <!-- cols: quantidade de colunas, rows: quantidade de linhas - placeholder: tambem se aplica aos outros comandos utilizados acima, porem, nao é sempre necessario, depende do contexto -->
                <textarea name="sugestao" placeholder="Digite sua sugestão de cursos ou deixe uma observação..." cols="50" rows="5" ></textarea>
            </p>
        </fieldset>

        <p>
            <label>
                <input type="checkbox" name="newsletter" value="sim">
                Aceita receber nossas novidades?
            </label>
        </p>

        <p>
            <!-- dois tipos de botoes, submit é mais "light", voce nao pode manipular tanta coisa, somente o basico com css, e so permite texto, coisa que nao se aplica ao button, que pode ser mais personalizavel, com icones etc... -->

            <!-- <input type="submit" value="cadastrar"> -->
            <button type="submit">Cadastrar</button>
        </p>

    </form>


</body>

</html>
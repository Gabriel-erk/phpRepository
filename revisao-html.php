<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- codifica os acentos -->
    <meta charset="UTF-8">
    <!-- pegue a largura do dispositivo que esta carregando este site - isto auxilia na responsividade -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão de html5 e css3</title>

    <!-- escopo de css dentro do html -->
    <style>
        /* este comando remove o espaçamento entre as celulas */
        .mes{
            border-collapse: collapse;
        }
        .mes th, .mes td{
            border: 1px solid #000;
            /* centralizando os numeros e th (D,S,T.....) */
            text-align: center;
        }
        /* atingindo as celulas de cabecalho (thead é a caixa pai das celulas quero atingir, assim como tr, porem, nao preciso ser tao especifico, pois nao vou atingir elementos indesejados, ja que, dentro de thead, tem basicamente somente oq quero atingir) */
        .mes thead{
            background-color: #ededed;
        }
    </style>
</head>


<body>
    <h1>Titulo Principal</h1>
    <h2>Subtítulo</h2>


    <!-- strong deixando em negrito -->
    <!-- em deixando em italico -->
    <p>Lorem ipsum, dolor sit amet <strong>consectetur adipisicing elit.</strong> Natus consequuntur perspiciatis
        expedita explicabo quo, recusandae mollitia, fugit ab corrupti blanditiis, quod reprehenderit saepe?
        <em>Adipisci</em>, et commodi. Praesentium aliquid reiciendis eum!
    </p>

    <h2>Lista</h2>
    <hr>
    </hr>

    <ul>
        <?php for ($cont = 1; $cont <= 10; $cont++): ?>
            <!-- encaixando a variavel que esta em php, no escopo php, para o html conseguir interpreta-la no navegador (pois sem isso ele o interpreta como texto) -->
            <li>Item
                <?php echo $cont ?>
            </li>

            <!-- encerrando o for, de uma maneira mais conceituada as "boas praticas" do php, q é bom ser utilizado quando o php estiver misturado com html (nao é intressante utiliza-lo no php puro) - os dois pontos utilizados ali emcima tbm se enquadram nisso - 'endfor' e os ':', seriam basicamente os colchetes, onde, o colchete iniciaria nos 2 pontos e fecharia onde esta o endfor, so ficaria mais confuso -->
        <?php endfor; ?>

        <hr>
        </hr>
        <!-- este codigo abaixo significa a mesma coisa, porem mais simplificado -->
        <?php for ($cont1 = 1; $cont1 <= 10; $cont1++): ?>
            <li>Produto
                <?php echo $cont1 ?>
            </li>
        <?php endfor; ?>
    </ul>

    <ol>
        <li>Item</li>
        <li>Item</li>
        <li>Item</li>
    </ol>

    <hr>

    <TABLE class="mes">
        <!-- tag de linha -->
        <tr>
            <!-- poderia ser usado h3, mas este comando especifico fica vinculado a nossa tabela -->
            <caption>Março de 2024</caption>
            <thead>
                <tr>
                    <!-- tag de celula, th apenas dentro do cabeçalho, se nao tiver cabeçalho, td -->
                    <!-- celula e cabeçalho -->
                    <th>D</th>
                    <th>S</th>
                    <th>T</th>
                    <th>Q</th>
                    <th>Q</th>
                    <th>S</th>
                    <th>S</th>
                </tr>
                <!-- representa o corpo -->
                <tbody>
                    <!-- primeira semana do mes/primeira linha do calendario -->
                    <!-- representa linha -->
                    <tr>
                        <!-- celula de corpo -->
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td>2</td>
                    </tr>

                    <!-- segunda semana do mes/segunda linha -->
                    <tr>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                        <td>9</td>
                    </tr>

                    <!-- terceira semana do mes/terceira linha -->
                    <tr>
                        <td>10</td>
                        <td>11</td>
                        <td>12</td>
                        <td>13</td>
                        <td>14</td>
                        <td>15</td>
                        <td>16</td>
                    </tr>

                    <!-- quarta semana do mes/quarta linha -->
                    <tr>
                        <td>17</td>
                        <td>18</td>
                        <td>19</td>
                        <td>20</td>
                        <td>21</td>
                        <td>22</td>
                        <td>23</td>
                    </tr>

                    <!-- quinta semana do mes/quinta linha -->
                    <tr>
                        <td>24</td>
                        <td>25</td>
                        <td>26</td>
                        <td>27</td>
                        <td>28</td>
                        <td>29</td>
                        <td>30</td>
                    </tr>

                    <tr>
                        <td>31</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>

            </thead>


        </tr>
    </TABLE>
</body>

</html>
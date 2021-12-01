        <div class="container d-flex flex-column align-items-stretch" id="main">
            <div class="row">
                <div class="col-12 pt-2 bg-dark text-light py-4"> <!--Enunciado da questão-->
                    <h4 class="text-center text-secondary">Atividade 4 - Exercício 5</h4>
                    <h4 style="text-align: justify;">Considerando as diversas funções para tratamento de arrays disponíveis no site oficial da linguagem, selecione 4 funções e elabore uma explicação do seu funcionamento e construa um exemplo prático (funcional) do uso de cada uma das opções escolhidas. Pode incluir entrada por formulário e exibição dos resultados. Incluir prints de código.</h4>
                </div>
            </div>
    
            <div class="row d-md-flex">
                <div class="col-md-4 col-sm-12 align-self-stretch bg-dark"> <!--Formulário-->
                    <div class="formulario">
                        <h4 class="text-white-50 text-center">Formulário</h4>
                        <form action="#" method="POST"class="form-inline row px-2 py-2"> <!-- Usado action="#" porque o resultado retorna na própria página !-->
                            <label for="func" class="text-light col-3 h5 px-1">Função:</label>
                            <select class="custom-select" name="func" id="func" required>
                                <option selected disabled>Selecione uma função</option>
                                <option value="1" required>Array_combine</option>
                                <option value="2">Array_map</option>
                                <option value="3">Array_intersect</option>
                                <option value="4">Array_pad</option>
                            </select>
                            <button type="submit" class="btn btn-outline-secondary text-center col-12 mt-4" name="enviar" value="Enviar">Enviar</button>
                        </form>
                    </div>
                    
                </div>
                <div class="col-md-8 col-sm-12 px-5 mb-1"> <!--Resultado-->
                    <?php //sortear números da MegaSena armazená-los em um array e mostrá-los em divs
                        ini_set('display_errors', true); //Para não mostrar os erros no lugar do resultado
                        error_reporting(E_ALL|E_STRICT);
    
                        if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST'){ //para verificar se POST não está vazio (assim que abre a página)
                            $opc =  $_POST['func'];
                            switch($opc){
                                case 1:
                                    echo "<div class='text-center text-dark h3'>Array_combine</div>";
                                    echo "<div class='text-center d-flex'><div class='text-primary h4 px-2'>Sintaxe: </div><div class='h6 py-1'>array_combine(array \$keys, array \$values): array</div></div>";
                                    echo "<p>Cria um array usando os valores do array keys como chaves e os valores do array values como valores correspondentes.</p>";
                                    echo "<div class='h4 text-danger'>Exemplo:</div>";
                                    $frutas = Array('Maçã', 'Banana', 'Limão', 'Laranja', 'Jabuticaba');
                                    echo"<span class='h6 bold'>Array com valores (\$frutas): </span><br>";
                                    echo "<span>";
                                    print_r(array_values($frutas));
                                    echo "</span><br>";
                                    $cores = Array('Vermelho', 'Amarelo', 'Verde', 'Laranja', 'Roxo');
                                    echo"<span class='h6 bold'>Array com chaves (\$cores): </span><br>";
                                    echo "<span>";
                                    print_r(array_values($cores));
                                    echo "</span><br>";
                                    echo "<div class='text-secondary text-center'>\$frutas_cores = array_combine(\$cores, \$frutas);</div>";
                                    $frutas_cores = array_combine($cores, $frutas);
                                    echo"<span class='h6 text-success'>Array combinado (\$frutas_cores): </span><br>";
                                    echo "<span>";
                                    print_r(var_dump($frutas_cores));
                                    echo "</span><br>";
                                    break;
                                case 2:
                                    echo "<div class='text-center text-dark h3'>Array_map</div>";
                                    echo "<div class='text-center d-flex'><div class='text-primary h4 px-2'>Sintaxe: </div><div class='h6 py-1'>array_map(callable \$callback, array \$array1, array $... = ?): array</div></div>";
                                    echo "<p class='justify'>Retorna um array contendo todos os elementos de array1 depois de aplicada uma determinada função callback em cada um. O número de parâmetros que a função callback aceita deve coincidir com o número de arrays passados para a função array_map()</p>";
                                    echo "<div class='h4 text-danger'>Exemplo:</div>";
                                    $numeros = Array(1, 2, 4, 5, 8, 9, 10);
                                    function imp_par($n){
                                        if($n % 2 == 0){
                                            return "Par";
                                        } else return "Ímpar";
                                    }
                                    echo"<span class='h6 bold'>Array com números inicial (\$numeros): </span><br>";
                                    echo "<span>";
                                    print_r(array_values($numeros));
                                    echo "</span><br>";
                                    echo "<span class='h6 bold'>Função que verifica se o número é par ou ímpar (imp_par): </span><br>";
                                    echo "<div class='px-1 text-black-50'>function imp_par(\$n){<br>
                                        if(\$n % 2 == 0){<br>
                                            return 'Par';<br>
                                        } else return 'Ímpar';<br>
                                    }</div>";
                                    echo "<div class='text-secondary text-center'>\$aux = array_map('imp_par', \$aux);</div>";
                                    $aux = array_map('imp_par', $numeros);
                                    echo"<span class='h6 text-success'>Array mapeado pela função imp_par() (\$aux): </span><br>";
                                    echo "<span>";
                                    print_r(array_values($aux));
                                    echo "</span><br>";
                                    break;
                                case 3:
                                    echo "<div class='text-center text-dark h3'>Array_intersect</div>";
                                    echo "<div class='text-center d-flex'><div class='text-primary h4 px-2'>Sintaxe: </div><div class='h6 py-1'>array_intersect(array \$array1, array \$array2, array $... = ?): array</div></div>";
                                    echo "<p>Retorna um array contendo todos os valores de array1 que estão presentes nos outros argumentos. Note que as chaves são preservadas.</p>";
                                    echo "<div class='h4 text-danger'>Exemplo:</div>";
                                    $comidas_eugosto = Array('Feijão', 'Arroz', 'Lasanha', 'Carne', 'Macarrão', 'Legumes');
                                    echo"<span class='h6 bold'>Array com comidas que eu gosto (\$comidas_eugosto): </span><br>";
                                    echo "<span>";
                                    print_r(array_values($comidas_eugosto));
                                    echo "</span><br>";
                                    $comidas_amigoGosta = Array('Arroz', 'Lasanha', 'Pizza', 'Purê', 'Legumes');
                                    echo"<span class='h6 bold'>Array com comidas que meu amigo gosta (\$comidas_amigoGosta): </span><br>";
                                    echo "<span>";
                                    print_r(array_values($comidas_amigoGosta));
                                    echo "</span><br>";
                                    echo "<div class='text-secondary text-center'>\$comidas_nosGostamos = array_intersect(\$comidas_eugosto, \$comidas_amigoGosta);</div>";
                                    $comidas_nosGostamos = array_intersect($comidas_eugosto, $comidas_amigoGosta);
                                    echo"<span class='h6 text-success'>Array com comidas que nós gostamos (\$comidas_nosGostamos): </span><br>";
                                    echo "<span>";
                                    print_r($comidas_nosGostamos);
                                    echo "</span><br>";
                                    break;
                                case 4:
                                    echo "<div class='text-center text-dark h3'>Array_pad</div>";
                                    echo "<div class='text-center d-flex'><div class='text-primary h4 px-2'>Sintaxe: </div><div class='h6 py-1'>array_intersect(array_pad(array \$array, int \$size, mixed \$value): array</div></div>";
                                    echo "<p>Retorna uma cópia de array expandido para o comprimento especificado por size com o valor value. Se size for positivo então o array é expandido pela direita, se for negativo, pela esquerda. Se o valor absoluto de size for menor ou igual ao comprimento de array, então ele permanece inalterado. É possível adicionar até 1048576 elementos de uma vez.</p>";
                                    echo "<div class='h4 text-danger'>Exemplo:</div>";
                                    $binario = Array(0, 1, 1, 0, 1, 0, 1, 1, 0);
                                    echo"<span class='h6 bold'>Array com dígitos de um binário (\$binario): </span><br>";
                                    echo "<span>";
                                    print_r(array_values($binario));
                                    echo "</span><br>";
                                    echo"<span class='h6 bold'>Suponha-se que eu queira adicionar 5 '0' na esquerda do número então: </span><br>";
                                    echo "<div class='text-secondary text-center'>\$binario = array_pad(\$binario, -14, 0);<br>Observe que 9+5=14</div>";
                                    $binario = array_pad($binario, -14, 0);
                                    echo"<span class='h6 text-success'>Array com 5 '0' a esquerda:</span><br>";
                                    echo "<span>";
                                    print_r($binario);
                                    echo "</span><br>";
                                    echo"<span class='h6 bold'>Suponha-se agora que eu queira adicionar 3 '1' na direita do número então: </span><br>";
                                    echo "<div class='text-secondary text-center'>\$binario = array_pad(\$binario, 17, 1);<br>Observe que 14+3=17</div>";
                                    $binario = array_pad($binario, 17, 1);
                                    echo"<span class='h6 text-success'>Array com 3 '1' a direita:</span><br>";
                                    echo "<span>";
                                    print_r($binario);
                                    echo "</span><br>";
                                    break;
                            }
                           
                        } else echo "<div class='alert alert-warning mt-2' role='alert'>
                                        Selecione e envie uma função para ver sua explicação/funcionamento.
                                    </div>";   
                    ?>
                </div>
            </div>
            <div class="row flex-grow-1">
                <div class="col-12 bg-secondary text-center py-3 print"> <!--Print da questão-->
                    <a href="../../img/atv/atv4-exe5.png" target="_blank" rel="noopener noreferrer"><img class="img-fluid rounded" src="../../img/atv/atv4-exe5.png" alt="Print da questão"></a>
                </div>
            </div>
        </div>
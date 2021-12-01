        <div class="container d-flex flex-column align-items-stretch" id="main">
            <div class="row">
                <div class="col-12 pt-2 bg-dark text-light py-4"> <!--Enunciado da questão-->
                    <h4 class="text-center text-secondary">Atividade 3 - Exercício 7</h4>
                    <h4 style="text-align: justify;">(Desafio 2) Construa um formulário de solicitação de empréstimos.Construa um script em php que receba os valores dessa tela (valor e número de parcelas) e calcule o valor das parcelas(fixas), considerando o número meses para pagar e a taxa mensal (veja imagem acima). Deve ser exibido um relatório em tabela (table-sm Bootstrap) com as datas, e o valor das prestações. Exibir também o valor dos juros e montante pago pelo solicitante (tela com fundo azul success). Considere o cálculo das parcelas especificado no artigo: <a href="http://www.matematicadidatica.com.br/CalculoPrestacao.aspx">http://www.matematicadidatica.com.br/CalculoPrestacao.aspx</a> </h4>
                </div>
            </div>
    
            <div class="row d-md-flex">
                <div class="col-md-5 col-sm-12 align-self-stretch bg-dark"> <!--Formulário-->
                    <div class="formulario">
                        <h2 class="text-white">Dados Empréstimo</h2>
                        <form action="#" method="POST"class="form-inline row px-2 py-2"> <!-- Usado action="#" porque o resultado retorna na própria página !-->
                            <div class="d-flex">
                                <div class="flex-grow-2"><label for="valor" class="text-light h6 px-1">Valor do empréstimo:</label></div>
                                <div class="flex-grow-1"><input type="number" class="form-control mb-2 align-self-center" name="valor" id="valor" required></div>
                            </div>
                            
                            
                            <label for="parcelas" class="text-light h6 px-1">Parcelas:</label>
                            
                            <select id="parcelas" name='parcelas' class="mb-2 align-self-center custom-select" required>
                                <option value='1' selected>6 meses - taxa 1,2%/m</option>
                                <option value='2'>12 meses - taxa 1,8%/m</option>
                                <option value='3'>24 meses - taxa 2,0%/m</option>
                                <option value='4'>36 meses - taxa 2,5%/m</option>
                                <option value='5'>48 meses - taxa 2,8%/m</option>
                            </select>
                            <button type="submit" class="btn btn-outline-secondary text-center col-12 mt-4 align-self-center" name="enviar" value="Enviar">Solicitar</button>
                        </form>
                    </div>
                    
                </div>
                <div class="col-md-7 col-sm-12 px-5 mb-1"> <!--Resultado-->
                <?php
                    ini_set('display_errors', true); //Para não mostrar os erros no lugar do resultado
                    error_reporting(E_ALL|E_STRICT);
                    if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST'){ //para verificar se POST não está vazio (assim que abre a página)
                        $v = $_POST['valor'];
                        $parc = $_POST['parcelas'];
                        switch($parc){
                            case 1:
                                $i = 0.012;
                                $n = 6;
                                break;
                            case 2:
                                $i = 0.018;
                                $n = 12;
                                break;
                            case 3:
                                $i = 0.02;
                                $n = 24;
                                break;
                            case 4:
                                $i = 0.025;
                                $n = 36;
                                break;
                            case 5:
                                $i = 0.028;
                                $n = 48;
                                break;
                        }
                        $aux = 1 / pow(1+$i, $n);
                        $CF = $i / (1- $aux);
                        $parc = $v * $CF;
                        $mont = $n * $parc;
                        $j = $mont - $v;
                        echo "
                            <table class='table table-striped table-sm mt-2'> <!--OBS. Tabela foi feita com essas cores por serem padrão do meu site!-->
                                <thead class='table-dark border border-light'>
                                    <tr>
                                        <th scope='col'>Data</th>
                                        <th scope='col'>Parcela</th>
                                        <th scope='col'>Juros</th>
                                        <th scope='col'>Valor a pagar</th>
                                    </tr>
                                </thead>
                                <tbody class='table-light border border-dark'>
                        ";
                        for($i=1; $i <= $n; $i++){
                            echo "
                                        <tr>";
                            if($i == 1){
                                $date = date_create(date('Y/m/d'));
                            } else{
                                date_add($date, date_interval_create_from_date_string('1 month'));
                            }
                            echo "
                                            <th scope='row'>".date_format($date, 'd/m/Y')."</th>
                                            <td>".number_format($v/$n, 2, ',','.')."</td>
                                            <td>".number_format($j/$n, 2, ',','.')."</td>
                                            <td>".number_format($parc, 2, ',','.')."</td>
                                        </tr>
                                ";
                        }
                        echo " 
                                    <tr class='table-primary'>
                                        <th scope'row' colspan='2'>Total de juros:</th>
                                        <td colspan='2' class='text-center'>".number_format($j, 2, ',', '.')."</td>
                                    </tr>
                                    <tr class='table-danger'>
                                        <th scope'row' colspan='2'>Montante pago:</th>
                                        <td colspan='2' class='text-center'>".number_format($mont, 2, ',', '.')."</td>
                                    </tr>
                                </tbody>
                            </table>
                        ";
                    }   else echo "<div class='alert alert-warning mt-2' role='alert'>
                                    Preencha e envie o formulário para funcionar.
                                </div> 
                                ";
                ?>
                </div>
            </div>
            <div class="row flex-grow-1">
                <div class="col-12 bg-secondary text-center py-3 print"> <!--Print da questão-->
                    <a href="../../img/atv/atv3-exe7.png"  target="_blank" rel="noopener noreferrer"><img class="img-fluid rounded" src="../../img/atv/atv3-exe7.png" alt="Print da questão"></a>
                </div>
            </div>
        </div>
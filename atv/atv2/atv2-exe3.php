
        <div class="container d-flex flex-column align-items-stretch" id="main">
            <div class="row">
                <div class="col-12 pt-2 bg-dark text-light py-4"> <!--Enunciado da questão-->
                    <h4 class="text-center text-secondary">Atividade 2 - Exercício 3</h4>
                    <h4 style="text-align: justify;">Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja fora desse intervalo, informar que não existe mês com este número.</h4>
                </div>
            </div>
    
            <div class="row d-md-flex">
                <div class="col-md-4 col-sm-12 align-self-stretch bg-dark"> <!--Formulário-->
                    <div class="formulario">
                        <h4 class="text-white-50 text-center">Formulário</h4>
                        <span class="text-light" style="text-align: justify;">Informe um número e direi seu mês correspondente!</span><br>
                        <form action="#" method="POST"class="form-inline row px-2 py-2"> <!-- Usado action="#" porque o resultado retorna na própria página !-->
                            <div class="d-flex">
                                <div class="flex-grow-2"><label for="numero" class="text-light h5 px-1">Numero:</label></div>
                                <div class="flex-grow-1"><input type="number" class="form-control mb-2" name="numero" id="numero" required></div>
                            </div>
                            <button type="submit" class="btn btn-outline-secondary text-center col-12 mt-4" name="enviar" value="Enviar">Enviar</button>
                        </form>
                    </div>
                </div>
    
                <div class="col-md-8 col-sm-12 px-5 mb-1"> <!--Resultado-->
                <?php
                    ini_set('display_errors', true); //Para não mostrar os erros no lugar do resultado
                    error_reporting(E_ALL|E_STRICT);

                    if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST'){ //para verificar se POST não está vazio (assim que abre a página)
                        $n = $_POST['numero'];
                        switch($n){
                            case 1:
                                echo "<h4 class='text-success text-center mt-5'>".$n." se refere ao mês Janeiro</h4>";
                            break;
                            case 2:
                                echo "<h4 class='text-success text-center mt-5'>".$n." se refere ao mês Fevereiro</h4>";
                            break;
                            case 3:
                                echo "<h4 class='text-success text-center mt-5'>".$n." se refere ao mês Março</h4>";
                            break;
                            case 4:
                                echo "<h4 class='text-success text-center mt-5'>".$n." se refere ao mês Abril</h4>";
                            break;
                            case 5:
                                echo "<h4 class='text-success text-center mt-5'>".$n." se refere ao mês Maio</h4>";
                            break;
                            case 6:
                                echo "<h4 class='text-success text-center mt-5'>".$n." se refere ao mês Junho</h4>";
                            break;
                            case 7:
                                echo "<h4 class='text-success text-center mt-5'>".$n." se refere ao mês Julho</h4>";
                            break;
                            case 8:
                                echo "<h4 class='text-success text-center mt-5'>".$n." se refere ao mês Agosto</h4>";
                            break;
                            case 9:
                                echo "<h4 class='text-success text-center mt-5'>".$n." se refere ao mês Setembro</h4>";
                            break;
                            case 10:
                                echo "<h4 class='text-success text-center mt-5'>".$n." se refere ao mês Outubro</h4>";
                            break;
                            case 11:
                                echo "<h4 class='text-success text-center mt-5'>".$n." se refere ao mês Novembro</h4>";
                            break;
                            case 12:
                                echo "<h4 class='text-success text-center mt-5'>".$n." se refere ao mês Dezembro</h4>";
                            break;
                            default:
                                echo "<h4 class='text-danger text-center mt-5'>".$n." não se refere a nenhum mês!</h4>";
                        } 
                    }   else echo "<div class='alert alert-warning mt-2' role='alert'>
                                    Preencha e envie o formulário para funcionar.
                                </div> 
                                ";
                ?>
                </div>
            </div>
            <div class="row flex-grow-1">
                <div class="col-12 bg-secondary text-center py-3 print"> <!--Print da questão-->
                    <a href="../../img/atv/atv2-exe3.png" target="_blank" rel="noopener noreferrer"><img class="img-fluid rounded" src="../../img/atv/atv2-exe3.png" alt="Print da questão"></a>
                </div>
            </div>
        </div>
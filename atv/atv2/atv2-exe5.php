
        <div class="container d-flex flex-column align-items-stretch" id="main">
            <div class="row">
                <div class="col-12 pt-2 bg-dark text-light py-4"> <!--Enunciado da questão-->
                    <h4 class="text-center text-secondary">Atividade 2 - Exercício 5</h4>
                    <h4 style="text-align: justify;">Faça um formulário HTML que receba o preço à vista de um determinado produto e a quantidade de parcelas, calcule o preço total a pagar e o valor da prestação mensal, referentes ao pagamento parcelado. Se o pagamento for em duas vezes, acréscimo de 2%; Se parcelado em 3 ou 4 vezes deve ser dado um acréscimo de 5% no total a ser pago. Se o parcelamento for em 5 vezes ou mais, o acréscimo será de 8%.</h4>
                </div>
            </div>
    
            <div class="row d-md-flex">
                <div class="col-md-5 col-sm-12 align-self-stretch bg-dark"> <!--Formulário-->
                    <div class="formulario">
                        <h4 class="text-white-50 text-center">Formulário</h4>
                        <span class="text-light" style="text-align: justify;">Informe o preço do produto à vista e a quantidade de parcelas que mostrarei o valor de cada uma com juros!</span><br>
                        <form action="#" method="POST"class="form-inline row px-2 py-2"> <!-- Usado action="#" porque o resultado retorna na própria página !-->
                        <div class="d-flex">
                            <div class="flex-grow-2"><label for="valor" class="text-light h6 px-1">Valor à vista:</label></div>
                            <div class="flex-grow-1"><input type="text" class="form-control mb-2 align-self-center" name="valor" id="valor" required></div>
                        </div>
                        <div class="d-flex">
                            <div class="flex-grow-2"><label for="parcelas" class="text-light h6 px-1">Quantidade de parcelas:</label></div>
                            <div class="flex-grow-1"><input type="number" class="form-control mb-2" name="parcelas" id="parcelas" required></div>
                        </div>    
                            <button type="submit" class="btn btn-outline-secondary text-center col-12 mt-4 align-self-center" name="enviar" value="Enviar">Enviar</button>
                        </form>
                    </div>
                </div>
    
                <div class="col-md-7 col-sm-12 px-5 mb-1"> <!--Resultado-->
                <?php
                    ini_set('display_errors', true); //Para não mostrar os erros no lugar do resultado
                    error_reporting(E_ALL|E_STRICT);

                    if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST'){ //para verificar se POST não está vazio (assim que abre a página)
                        $v = $_POST['valor'];
                        $nparc = $_POST['parcelas'];
                        $t = 0;

                        if($nparc == 2){$t = $v + $v*0.02;}
                        if(($nparc >=3) && ($nparc <=4)){$t = $v + $v*0.05;}
                        if($nparc >= 5){$t = $v + $v*0.08;}

                        $parc = $t/$nparc;

                        echo "<h4 class='text-danger text-center mt-5'>Total a pagar: R$ ".$t."</h4><br>";
                        echo "<h4 class='text-success text-center'>Sendo ".$nparc." parcelas mensais de R$ ".number_format($parc, 2, ',', '.')."</h4>";
                    }   else echo "<div class='alert alert-warning mt-2' role='alert'>
                                    Preencha e envie o formulário para funcionar.
                                </div> 
                                ";
                ?>
                </div>
            </div>
            <div class="row flex-grow-1">
                <div class="col-12 bg-secondary text-center py-3 print"> <!--Print da questão-->
                    <a href="../../img/atv/atv2-exe5.png" target="_blank" rel="noopener noreferrer"><img class="img-fluid rounded" src="../../img/atv/atv2-exe5.png" alt="Print da questão"></a>
                </div>
            </div>
        </div>
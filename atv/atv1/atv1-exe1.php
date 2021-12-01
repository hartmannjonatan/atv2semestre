        <div class="container d-flex flex-column align-items-stretch" id="main">
            <div class="row">
                <div class="col-12 pt-2 bg-dark text-light py-4"> <!--Enunciado da questão-->
                    <h4 class="text-center text-secondary">Atividade 1 - Exercício 1</h4>
                    <h4 style="text-align: justify;"> Faça um código php, onde sejam criadas duas variáveis inteiras. Imprima seus valores na tela e em seguida imprima o resultado das quatro operações básicas.</h4>
                </div>
            </div>
    
            <div class="row d-md-flex">
                <div class="col-md-4 col-sm-12 align-self-stretch bg-dark"> <!--Formulário-->
                    <div class="formulario">
                        <h4 class="text-white-50 text-center">Formulário</h4>
                        <span class="text-white-50 text-muted px-3">Não se aplica.</span>
                    </div>
                    
                </div>
                <div class="col-md-8 col-sm-12 px-5 mb-1"> <!--Resultado-->
                    <?php //Operações básicas com duas variáveis
                        $n1 = 4;
                        $n2 = 2;
                        $soma = $n1 + $n2;
                        $subt = $n1 - $n2;
                        echo "<div class='text-center d-flex flex-row justify-content-center'>
                                <div class='text-center p-2 text-success font-weight-bold h4'>n1 =  $n1</div>
                                <div class='text-center p-2 text-success h4'>n2 = $n2</div>
                              </div>";
                        echo "<div class='px-5 align-items-start d-flex flex-column'>
                                <div class='p-1 text-right'><strong>Soma</strong> = ".$soma."<br></div>
                                <div class='p-1'><strong>Subtração</strong> = ".$subt."<br></div>
                                <div class='p-1'><strong>Multiplicação</strong> = ".$n1*$n2."<br></div>
                                <div class='p-1'><strong>Divisão</strong> = ".$n1/$n2."<br></div>
                              </div>";
                    ?>
                </div>
            </div>
            <div class="row flex-grow-1">
                <div class="col-12 bg-secondary text-center py-3 print"> <!--Print da questão-->
                    <a href="../../img/atv/atv1-exe1.png" target="_blank" rel="noopener noreferrer"><img class="img-fluid rounded" src="../../img/atv/atv1-exe1.png" alt="Print da questão"></a>
                </div>
            </div>
        </div>
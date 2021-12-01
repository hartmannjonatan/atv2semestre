
        <div class="container d-flex flex-column align-items-stretch" id="main">
            <div class="row">
                <div class="col-12 pt-2 bg-dark text-light py-4 text-justify"> <!--Enunciado da questão-->
                    <h4 style="text-align: justify;">Faça um script php em que sejam declaradas quatro variáveis (n1, n2, n3 e n4), atribua valores a essa variável, calcule a média aritmética e imprima na tela.</h4>
                </div>
            </div>
    
            <div class="row d-md-flex">
                <div class="col-md-4 col-sm-12 align-self-stretch bg-dark"> <!--Formulário-->
                    <div class="formulario">
                        <h4 class="text-center text-secondary">Atividade 1 - Exercício 4</h4>
                        <h4 class="text-white-50 text-center">Formulário</h4>
                        <span class="text-white-50 text-muted px-3">Não se aplica.</span>
                    </div>
                    
                </div>
                <div class="col-md-8 col-sm-12 px-5 mb-5"> <!--Resultado-->
                <?php //Média aritmética com 4 variáveis
                    $n1 = 10;
                    $n2 = 20;
                    $n3 = 30;
                    $n4 = 40;
                    echo "<div class='d-flex text-center pt-5'>
                            <div class='text-success h4 px-4 bg-white'>n1 = $n1</div>
                            <div class='text-warning h4 px-4 bg-white'>n2 = $n2</div>
                            <div class='text-primary h4 px-4 bg-white'>n3 = $n3</div>
                            <div class='text-info h4 px-4 bg-white'>n4 = $n4</div>
                        </div>";
                    $media = ($n1+$n2+$n3+$n4)/4;
                    echo "<div class='text-danger'><strong>Média aritmética: </strong>".number_format($media, 2, '.', ',')."</div>";
                ?>
                </div>
            </div>
            <div class="row flex-grow-1">
                <div class="col-12 bg-secondary text-center py-3 print"> <!--Print da questão-->
                    <a href="../../img/atv/atv1-exe4.png" target="_blank" rel="noopener noreferrer"><img class="img-fluid rounded" src="../../img/atv/atv1-exe4.png" alt="Print da questão"></a>
                </div>
            </div>
        </div>
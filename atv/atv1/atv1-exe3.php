
        <div class="container d-flex flex-column align-items-stretch" id="main">
            <div class="row">
                <div class="col-12 pt-2 bg-dark text-light py-4 text-justify"> <!--Enunciado da questão-->
                    <h4 class="text-center text-secondary">Atividade 1 - Exercício 3</h4>
                    <h4 style="text-align: justify;">Construa um código php, em que seja exibida na tela o cálculo do imc de uma pessoa que tem 1,72 m de altura e o peso de 80 kg. Obs: para calcular o imc utilize a fórmula: imc=peso/altura².</h4>
                </div>
            </div>
    
            <div class="row d-md-flex">
                <div class="col-md-4 col-sm-12 align-self-stretch bg-dark"> <!--Formulário-->
                    <div class="formulario">
                        <h4 class="text-white-50 text-center">Formulário</h4>
                        <span class="text-white-50 text-muted px-3">Não se aplica.</span>
                    </div>
                    
                </div>
                <div class="col-md-8 col-sm-12 px-5 mb-5"> <!--Resultado-->
                <?php //Cálculo de imc com altura e peso dados
                    $alt = 1.72;
                    $peso = 80;
                    echo "<div class='d-flex flex-column justify-content-center pt-3'>
                            <div class='text-success text-center'><strong>Cálculo de imc:</strong><br></div>
                            <div class='text-primary px-5 align-items-start'><strong>Altura =</strong> $alt<br></div>
                            <div class='text-primary px-5 align-items-start'><strong>Peso =</strong> $peso<br></div>
                         </div>";
                    $imc = $peso/($alt*$alt);
                    echo "<div class='text-danger px-5 pt-2 align-items-start'><strong>Resultado imc:</strong> ".number_format($imc, 2, '.', ',')."<br></div>";
                ?>
                </div>
            </div>
            <div class="row flex-grow-1">
                <div class="col-12 bg-secondary text-center py-3 print"> <!--Print da questão-->
                    <a href="../../img/atv/atv1-exe3.png" target="_blank" rel="noopener noreferrer"><img class="img-fluid rounded" href="../../img/atv/atv1-exe3.png" src="../../img/atv/atv1-exe3.png" alt="Print da questão"></a>
                </div>
            </div>
        </div>
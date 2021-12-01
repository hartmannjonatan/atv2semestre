        <div class="container d-flex flex-column align-items-stretch" id="main">
            <div class="row">
                <div class="col-12 pt-2 bg-dark text-light py-4"> <!--Enunciado da questão-->
                    <h4 class="text-center text-secondary">Atividade 4 - Exercício 2</h4>
                    <h4 style="text-align: justify;">Crie um array e salve os 3 estados à seguir, sendo que a abreviação deverá ser o índice. Depois imprima todos os estados. RS-Rio Grande do Sul, SC-Santa Catarina, PR-Paraná</h4>
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
                    <?php //criar e imprimir resultado de um array com index especiaç
                        $est = array(
                            'RS' => 'Rio Grande do Sul',
                            'SC' => 'Santa Catarina',
                            'PR' => 'Paraná'
                        );
                        echo "<div class='h2 text-success text-center mt-2'>RS: ".$est['RS']."</div>";
                        echo "<div class='h2 text-success text-center mt-2'>SC: ".$est['SC']."</div>";
                        echo "<div class='h2 text-success text-center mt-2'>PR: ".$est['PR']."</div>";
                    ?>
                </div>
            </div>
            <div class="row flex-grow-1">
                <div class="col-12 bg-secondary text-center py-3 print"> <!--Print da questão-->
                    <a href="../../img/atv/atv4-exe2.png" target="_blank" rel="noopener noreferrer"><img class="img-fluid rounded" src="../../img/atv/atv4-exe2.png" alt="Print da questão"></a>
                </div>
            </div>
        </div>
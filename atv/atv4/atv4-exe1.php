        <div class="container d-flex flex-column align-items-stretch" id="main">
            <div class="row">
                <div class="col-12 pt-2 bg-dark text-light py-4"> <!--Enunciado da questão-->
                    <h4 class="text-center text-secondary">Atividade 4 - Exercício 1</h4>
                    <h4 style="text-align: justify;">Crie um array e salve 5 carros. Imprima o carro da posição 3. Salve mais 5 carros nesse mesmo array e imprima agora o carro da posição 8.</h4>
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
                    <?php //criar e imprimir resultado de um array
                        $carros = ['Fusca', 'Astra', 'Golf', 'Gol', 'Monza'];
                        echo "<div class='h2 text-success text-center mt-2'>Carro 3: ".$carros[3]."</div>";
                        array_push($carros, 'Camaro', 'Vectra', 'S-10', 'Lamborghini', 'Saveiro');
                        echo "<div class='h2 text-primary text-center mt-2'>Carro 8: ".$carros[8]."</div>";
                    ?>
                </div>
            </div>
            <div class="row flex-grow-1">
                <div class="col-12 bg-secondary text-center py-3 print"> <!--Print da questão-->
                    <a href="../../img/atv/atv4-exe1.png" target="_blank" rel="noopener noreferrer"><img class="img-fluid rounded" src="../../img/atv/atv4-exe1.png" alt="Print da questão"></a>
                </div>
            </div>
        </div>
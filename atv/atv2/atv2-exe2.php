        <div class="container d-flex flex-column align-items-stretch" id="main">
            <div class="row">
                <div class="col-12 pt-2 bg-dark text-light py-4"> <!--Enunciado da questão-->
                    <h4 class="text-center text-secondary">Atividade 2 - Exercício 2</h4>
                    <h4 style="text-align: justify;">Ler 3 números, os possíveis lados de um triângulo, e imprimir a classificação de acordo com tamanho dos lados: equilátero, escaleno ou isósceles. (mostrar figura correspondente)</h4>
                </div>
            </div>
    
            <div class="row d-md-flex">
                <div class="col-md-4 col-sm-12 align-self-stretch bg-dark"> <!--Formulário-->
                    <div class="formulario">
                        <h4 class="text-white-50 text-center">Formulário</h4>
                        <span class="text-light" style="text-align: justify;">Informe a medida dos 3 lados de um triângulo e direi sua respectiva classificação!</span> <br>
                        <form action="#" method="POST"class="form-inline row px-2 py-2"> <!-- Usado action="#" porque o resultado retorna na própria página !-->
                            <div class="d-flex">
                                <div class="flex-grow-2"><label for="lado1" class="text-light h5 px-1">Lado 1:</label></div>
                                <div class="flex-grow-1"><input type="number" class="form-control mb-2" name="lado1" id="lado1" required></div>
                            </div>
                            <div class="d-flex">
                                <div class="flex-grow-2"><label for="lado2" class="text-light h5 px-1">Lado 2:</label></div>
                                <div class="flex-grow-1"><input type="number" class="form-control mb-2" name="lado2" id="lado2" required></div>
                            </div>
                            <div class="d-flex">
                                <div class="flex-grow-2"><label for="lado3" class="text-light h5 px-1">Lado 3:</label></div>
                                <div class="flex-grow-1"><input type="number" class="form-control mb-2" name="lado3" id="lado3" required></div>
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
                        $l1 = $_POST['lado1'];
                        $l2 = $_POST['lado2'];
                        $l3 = $_POST['lado3'];

                        if(($l1==$l2) && ($l2==$l3)){
                            echo "<h4 class='text-success text-center py-3'>Esse triângulo é equilátero!</h4>
                                    <div class='text-center'><img class='img-fluid' src='../atv2semestre/img/atv/img-t-equilatero.png' alt='Triângulo equilátero'</div>";
                        } else{
                            if(($l1==$l2) || ($l2==$l3) || ($l1==$l3)){
                                echo "<h4 class='text-success text-center py-3'>Esse triângulo é isósceles!</h4>
                                    <div class='text-center'><img class='img-fluid' src='../atv2semestre/img/atv/img-t-isosceles.png' alt='Triângulo isósceles'</div>";
                            } else echo "<h4 class='text-success text-center py-3'>Esse triângulo é escaleno!</h4>
                                        <div class='text-center'><img class='img-fluid' src='../atv2semestre/img/atv/img-t-escaleno.png' alt='Triângulo escaleno'</div>";
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
                    <a href="../../img/atv/atv2-exe2.png" target="_blank" rel="noopener noreferrer"><img class="img-fluid rounded" src="../../img/atv/atv2-exe2.png" alt="Print da questão"></a>
                </div>
            </div>
        </div>

        <div class="container d-flex flex-column align-items-stretch" id="main">
            <div class="row">
                <div class="col-12 pt-2 bg-dark text-light py-4"> <!--Enunciado da questão-->
                    <h4 class="text-center text-secondary">Atividade 3 - Exercício 3</h4>
                    <h4 style="text-align: justify;">Elabore um programa em PHP que permita mostrar os valores ímpares entre o cubo de um número digitado pelo usuário até o próprio número (ordem decrescente).</h4>
                </div>
            </div>
    
            <div class="row d-md-flex">
                <div class="col-md-4 col-sm-12 align-self-stretch bg-dark"> <!--Formulário-->
                    <div class="formulario">
                        <h4 class="text-white-50 text-center">Formulário</h4>
                        <form action="#" method="POST"class="form-inline row px-2 py-2"> <!-- Usado action="#" porque o resultado retorna na própria página !-->
                                <div class="d-flex">
                                    <div class="flex-grow-2"><label for="numero" class="text-light h5 px-1">Número:</label></div>
                                    <div class="flex-grow-1"><input type="number" class="form-control" name="numero" id="numero" required></div>
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
                        $cubo = $n*$n*$n;
                        for($i = $cubo; $i >= $n; $i--){
                            if($i == $cubo){
                                echo "
                                    <span class='text-center text-success h5'>".$i.",</span>
                                    ";
                            } elseif($i == $n){
                                echo "
                                <span class='text-center text-primary h5'>".$i.".</span>
                                ";
                            } else{
                                echo "
                                <span class='text-center text-primary h5'>".$i.", </span>
                                ";
                            }
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
                    <a href="../../img/atv/atv3-exe3.png" target="_blank" rel="noopener noreferrer"><img class="img-fluid rounded" src="../../img/atv/atv3-exe3.png" alt="Print da questão"></a>
                </div>
            </div>
        </div>
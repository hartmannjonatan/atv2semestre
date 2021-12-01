        <div class="container d-flex flex-column align-items-stretch" id="main">
            <div class="row">
                <div class="col-12 pt-2 bg-dark text-light py-4"> <!--Enunciado da questão-->
                    <h4 class="text-center text-secondary">Atividade 3 - Exercício 4</h4>
                    <h4 style="text-align: justify;">Criar um script em PHP para mostrar o fatorial de um número informado pelo usuário. O cálculo do fatorial é feito da seguinte forma: n! = 1 x ... x n-1 x n Exemplo: 5! = 1 x 2 x 3 x 4 x 5 = 120 O fatorial de 0 é 1. Mostrar mensagem de erro (alert-danger) para números lidos que sejam menores que 0. O fatorial deve ser exibido em um alert-info.</h4>
                </div>
            </div>
    
            <div class="row d-md-flex">
                <div class="col-md-4 col-sm-12 align-self-stretch bg-dark"> <!--Formulário-->
                    <div class="formulario">
                        <h4 class="text-white-50 text-center">Formulário</h4>
                        <form action="#" method="POST"class="form-inline row px-2 py-2"> <!-- Usado action="#" porque o resultado retorna na própria página !-->
                            <label for="numero">Número</label>
                            <input type="number" class="form-control" id="numero" name="numero" placeholder="Digite o número" required>    
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
                        $ft = $n;
                        if($n < 0){
                            echo "
                                <div class='alert alert-danger mt-2' role='alert'>
                                Só aceitamos valores maiores que 0!
                                </div>
                            ";
                        } elseif(($n == 0) or ($n == 1)){
                            echo "
                                <div class='alert alert-info mt-2' role='alert'>
                                    ".$n."! = 1
                                </div>
                            ";
                        } else{
                            for($i = $n - 1; $i<>1; $i--){
                                $ft = $ft * $i;
                            }
                            echo "
                                <div class='alert alert-info mt-2' role='alert'>
                                    ".$n."! = ".$ft."
                                </div>
                            ";
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
                    <a href="../../img/atv/atv3-exe4.png" target="_blank" rel="noopener noreferrer"><img class="img-fluid rounded" src="../../img/atv/atv3-exe4.png" alt="Print da questão"></a>
                </div>
            </div>
        </div>
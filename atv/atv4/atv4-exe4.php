        <div class="container d-flex flex-column align-items-stretch" id="main">
            <div class="row">
                <div class="col-12 pt-2 bg-dark text-light py-4"> <!--Enunciado da questão-->
                    <h4 class="text-center text-secondary">Atividade 4 - Exercício 4</h4>
                    <h4 style="text-align: justify;">Faça um script em php que sorteie 15 dezenas para um jogo da MegaSena (intervalo de 1 a 25) e armazene em um array. Exiba as dezenas sorteadas em ordem crescente e não permita que se repitam. Cada dezena sorteada deve ser exibida dentro de uma div de 100px X 100px, com cantos arredondados com cor a escolher. As divs devem flutuar à esquerda e ter um espaçamento de 5px entre elas.</h4>
                </div>
            </div>
    
            <div class="row d-md-flex">
                <div class="col-md-4 col-sm-12 align-self-stretch bg-dark"> <!--Formulário-->
                    <div class="formulario">
                        <h4 class="text-white-50 text-center">Formulário</h4>
                        <form action="#" method="POST"class="form-inline row px-2 py-2"> <!-- Usado action="#" porque o resultado retorna na própria página !-->
                            <button type="submit" class="btn btn-outline-success text-center col-12 mt-4" name="enviar" value="Enviar">Sortear</button>
                        </form>
                    </div>
                    
                </div>
                <div class="col-md-8 col-sm-12 px-5 mb-1"> <!--Resultado-->
                    <?php //sortear números da MegaSena armazená-los em um array e mostrá-los em divs
                        ini_set('display_errors', true); //Para não mostrar os erros no lugar do resultado
                        error_reporting(E_ALL|E_STRICT);
    
                        if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST'){ //para verificar se POST não está vazio (assim que abre a página)
                            $sort = [15];
                            for($aux = 0; $aux<15; $aux++){
                                $bool = false;
                                while($bool == false){
                                    $n = rand(1, 25);
                                    foreach($sort as $numero){
                                        if($n == $numero){
                                            $bool = false;
                                            break;
                                        } else $bool = true;
                                    }
                                }
                                $sort[$aux] = $n;
                            }
                            sort($sort);
                            foreach($sort as $aux){
                                echo "<div style='width: 100px; height: 100px; border-radius: 10px; background-color: #63cf65; border: 2px solid #408741; margin-right: 5px; padding-left: 3px; padding-right: 0px; padding-top: 20px; text-align: center; float: left;' class='h2 mt-2'>
                                            ".$aux."
                                        </div>
                                ";
                            }
                        } else echo "<div class='alert alert-warning mt-2' role='alert'>
                                        Clique no botão para sortear!.
                                    </div>";      
                    ?>
                </div>
            </div>
            <div class="row flex-grow-1">
                <div class="col-12 bg-secondary text-center py-3 print"> <!--Print da questão-->
                    <a href="../../img/atv/atv4-exe4.png"  target="_blank" rel="noopener noreferrer"><img class="img-fluid rounded" src="../../img/atv/atv4-exe4.png" alt="Print da questão"></a>
                </div>
            </div>
        </div>
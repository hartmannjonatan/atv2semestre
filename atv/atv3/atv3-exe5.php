        <div class="container d-flex flex-column align-items-stretch" id="main">
            <div class="row">
                <div class="col-12 pt-2 bg-dark text-light py-4"> <!--Enunciado da questão-->
                    <h4 class="text-center text-secondary">Atividade 3 - Exercício 5</h4>
                    <h4 style="text-align: justify;">Dado um número digitado pelo usuário(formulário), apresentar os resultados da tabuada desse numero em uma tabela. Conforme exemplo ao lado (Usar Bootstrap).</h4>
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
                        echo "
                             <table class='table table-striped mt-2 border border-primary'>
                                <thead>
                                    <tr>
                                        <th class='bg-info text-center border border-primary' scope='col'>Tabuada do ".$n."</th>
                                    </tr>
                                </thead>
                                <tbody class='table-info border border-primary'>
                            ";
                        for($i = 1; $i <= 10; $i++){
                            echo "
                                        <tr>
                                            <td class='px-3'>".$i." X ".$n." = ".$n*$i.".</td>
                                        </tr>
                            ";
                        }
                        echo "
                                </tbody>
                            </table>
                        ";
                    }   else echo "<div class='alert alert-warning mt-2' role='alert'>
                                    Preencha e envie o formulário para funcionar.
                                </div> 
                                ";
                ?>
                </div>
            </div>
            <div class="row flex-grow-1">
                <div class="col-12 bg-secondary text-center py-3 print"> <!--Print da questão-->
                    <a href="../../img/atv/atv3-exe5.png" target="_blank" rel="noopener noreferrer"><img class="img-fluid rounded" src="../../img/atv/atv3-exe5.png" alt="Print da questão"></a>
                </div>
            </div>
        </div>
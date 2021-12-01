        <div class="container d-flex flex-column align-items-stretch" id="main">
            <div class="row">
                <div class="col-12 pt-2 bg-dark text-light py-4"> <!--Enunciado da questão-->
                    <h4 class="text-center text-secondary">Atividade 3 - Exercício 6</h4>
                    <h4 style="text-align: justify;">(Desafio 1) Construa um script que receba uma data de um formulário e exiba em uma tabela zebrada os próximos 24 meses incrementados mês a mês à partir da data recebida</h4>
                </div>
            </div>
    
            <div class="row d-md-flex">
                <div class="col-md-4 col-sm-12 align-self-stretch bg-dark"> <!--Formulário-->
                    <div class="formulario">
                        <h4 class="text-white-50 text-center">Formulário</h4>
                        <form action="#" method="POST"class="form-inline row px-2 py-2"> <!-- Usado action="#" porque o resultado retorna na própria página !-->
                            <label for="data" class="text-light col-3 h5 px-1">Data:</label>
                            <input type="date" class="form-control w-75 col-9" name="data" id="data" required>
                            <button type="submit" class="btn btn-outline-secondary text-center col-12 mt-4" name="enviar" value="Enviar">Enviar</button>
                        </form>
                    </div>
                    
                </div>
                <div class="col-md-8 col-sm-12 px-5 mb-1"> <!--Resultado-->
                <?php
                    ini_set('display_errors', true); //Para não mostrar os erros no lugar do resultado
                    error_reporting(E_ALL|E_STRICT);

                    if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST'){ //para verificar se POST não está vazio (assim que abre a página)
                        $dt = date_create($_POST['data']);
                        $df = date_create($_POST['data']);
                        date_add($df, date_interval_create_from_date_string('24 month'));
                        echo "
                             <table class='table table-striped mt-2'>
                                <thead class='table-dark border border-dark'>
                                    <tr>
                                        <th scope='col'>";
                                        echo date_format($dt, 'd-m-Y'); 
                                        echo "</th>
                                        <th scope='col'></th>
                                        <th scope='col'></th>
                                    </tr>
                                </thead>
                                <tbody class='table-light border border-dark'>
                            ";

                        while($dt != $df){
                            echo "
                                        <tr>";
                            for($i=1; $i<=3; $i++){
                                date_add($dt, date_interval_create_from_date_string('1 month'));
                                echo "<td class='px-3' scope='row'>".date_format($dt, 'd-m-Y')."</td>";
                            }
                            echo "</tr>";
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
                    <a href="../../img/atv/atv3-exe6.png" target="_blank" rel="noopener noreferrer"><img class="img-fluid rounded" src="../../img/atv/atv3-exe6.png" alt="Print da questão"></a>
                </div>
            </div>
        </div>
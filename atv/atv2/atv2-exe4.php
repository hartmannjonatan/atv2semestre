

        <div class="container d-flex flex-column align-items-stretch" id="main">
            <div class="row">
                <div class="col-12 pt-2 bg-dark text-light py-4"> <!--Enunciado da questão-->
                    <h4 class="text-center text-secondary">Atividade 2 - Exercício 4</h4>
                    <h4 style="text-align: justify;">Faça um script que leia 3 notas e uma letra (‘A’ ou ‘P’). A partir disso, caso a letra escolhida seja ‘A’, calcule e mostre a média aritmética das notas lidas, caso seja ´P’ calcule a média ponderada. Exibir o resultado dentro de uma div de 150x150, com cantos arredondados – caso a nota seja maior ou igual a 7,0 o fundo da div deve ser verde (Aprovado); Se a média estiver entre 5,0 e 6,9 a div deve ter o fundo amarelo (Exame); caso a nota seja menor que 5,0 div vermelha (Reprovado).</h4>
                </div>
            </div>
    
            <div class="row d-md-flex">
                <div class="col-md-4 col-sm-12 align-self-stretch bg-dark"> <!--Formulário-->
                    <div class="formulario">
                        <h4 class="text-white-50 text-center">Formulário</h4>
                        <span class="text-light" style="text-align: justify;">Boletim Escolar!</span> <br>
                        <form action="#" method="POST"class="form-inline row px-2 py-2"> <!-- Usado action="#" porque o resultado retorna na própria página !-->
                            <div class="d-flex">
                                <div class="flex-grow-2"><label for="nota1" class="text-light h5 px-1">Nota 1:</label></div>
                                <div class="flex-grow-1"><input type="text" class="form-control mb-2" name="nota1" id="nota1" required></div>
                            </div>
                            <div class="d-flex">
                                <div class="flex-grow-2"><label for="nota2" class="text-light h5 px-1">Nota 2:</label></div>
                                <div class="flex-grow-1"><input type="text" class="form-control mb-2" name="nota2" id="nota2" required></div>
                            </div>
                            <div class="d-flex">
                                <div class="flex-grow-2"><label for="nota3" class="text-light h5 px-1">Nota 3:</label></div>
                                <div class="flex-grow-1"><input type="text" class="form-control mb-2" name="nota3" id="nota3" required></div>
                            </div>
                            <div class="form-check form-check-inline d-flex">
                                <div>
                                    <input class="form-check-input" type="radio" name="sit" id="A" value="A" required>
                                    <label class="form-check-label text-light" for="A">A</label>
                                </div>
                                <div class="mx-5">
                                    <input class="form-check-input" type="radio" name="sit" id="P" value="P" required>
                                    <label class="form-check-label text-light" for="P">P</label>
                                </div>
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
                        $n1 = $_POST['nota1'];
                        $n2 = $_POST['nota2'];
                        $n3 = $_POST['nota3'];
                        $sit = $_POST['sit'];

                        $med = 0.0;

                        if($sit=='A'){
                        $med = ($n1 + $n2 + $n3)/3;
                        } else $med = ($n1*2 + $n2*3 + $n3*5)/10;

                        if($med >= 7){
                            echo "<div class='py-5'><div style='width: 150px; height: 150px; border-radius: 10px; background-color: #63cf65; border: 2px solid #408741; padding-left: 3px; padding_right: 0px; text-align: center;'>
                                    <h2>Média = ".number_format($med, 2, ',', '.')."</h2>
                                    <h3>Aprovado</h3>
                                </div></div>";
                        }

                        if(($med >= 5) && ($med <= 6.9)){
                        echo "<div class='py-5'><div style='width: 150px; height: 150px; border-radius: 10px; background-color: #d9de43; border: 2px solid #a5ab03; padding-left: 3px; padding_right: 0px; text-align: center;'>
                                    <h2>Média = ".number_format($med, 2, ',', '.')."</h2>
                                    <h3>Exame</h3> 
                                </div></div>";
                        }

                        if($med < 5){
                        echo "<div class='py-5'><div style='width: 150px; height: 150px; border-radius: 10px; background-color: #f23f3f; border: 2px solid #8a1313; padding-left: 3px; padding_right: 0px; text-align: center;'>
                                    <h2>Média = ".number_format($med, 2, ',', '.')."</h2>
                                    <h3>Reprovado</h3>
                                </div></div>";
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
                    <a href="../../img/atv/atv2-exe4.png" target="_blank" rel="noopener noreferrer"><img class="img-fluid rounded" src="../../img/atv/atv2-exe4.png" alt="Print da questão"></a>
                </div>
            </div>
        </div>
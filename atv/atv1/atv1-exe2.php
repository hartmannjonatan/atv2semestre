
        <div class="container d-flex flex-column align-items-stretch" id="main">
            <div class="row">
                <div class="col-12 pt-2 bg-dark text-light py-4 text-justify"> <!--Enunciado da questão-->
                    <h4 class="text-center text-secondary">Atividade 1 - Exercício 2</h4>
                    <h4 style="text-align: justify;">Faça um código php, onde sejam criadas duas variáveis String, armazene os valores de nome e sobrenome. Concatene seus valores em uma outra chamada nomecompleto. Imprima seus valores na tela.</h4>
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
                <?php //Concatenar nome e sobrenome
                    $nome = "Jonatan";
                    $sobrenome = "Hartmann";
                    $nomecompleto = $nome." ".$sobrenome;
                    echo "
                        <div class='text-center d-flex flex-row justify-content-center pt-3'>
                            <div class='text-success px-2'><strong>Nome:</strong> $nome</div>
                            <div class='text-primary px-2'><strong>Sobrenome: </strong> $sobrenome</div>
                        </div><br>
                        <div class='text-danger px-5 align-items-start'><strong>Nome completo: </strong> $nomecompleto<br></div>";
                ?>
                </div>
            </div>
            <div class="row flex-grow-1">
                <div class="col-12 bg-secondary text-center py-3 print"> <!--Print da questão-->
                    <a href="../../img/atv/atv1-exe2.png" target="_blank" rel="noopener noreferrer"><img class="img-fluid rounded" src="../../img/atv/atv1-exe2.png" alt="Print da questão"></a>
                </div>
            </div>
        </div>
            
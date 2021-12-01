        <div class="container d-flex flex-column align-items-stretch" id="main">
            <div class="row">
                <div class="col-12 pt-2 bg-dark text-light py-4"> <!--Enunciado da questão-->
                    <h4 class="text-center text-secondary">Atividade 4 - Exercício 3</h4>
                    <h4 style="text-align: justify;">Crie um formulário com os campos nome, email e cidade.Receba os valores e armazene-os em um array. Crie um laço de repetição e imprima o nome do campo e o valor preenchido.</h4>
                </div>
            </div>
    
            <div class="row d-md-flex">
                <div class="col-md-4 col-sm-12 align-self-stretch bg-dark"> <!--Formulário-->
                    <div class="formulario">
                        <h4 class="text-white-50 text-center">Formulário</h4>
                        <form action="#" method="POST"class="form-inline row px-2 py-2"> <!-- Usado action="#" porque o resultado retorna na própria página !-->
                            <div class="d-flex">
                                <div class="flex-grow-2"><label for="nome" class="text-light h5 px-1">Nome:</label></div>
                                <div class="flex-grow-2"><input type="text" class="form-control" name="nome" id="nome" required></div>
                            </div>
                            <div class="d-flex">
                                <div class="flex-grow-2"><label for="email" class="text-light h5 px-1 mt-1">Email:</label></div>
                                <div class="flex-grow-2"><input type="email" class="form-control mt-1" name="email" id="email" required></div>
                            </div>
                            <div class="d-flex">
                                <div class="flex-grow-2"><label for="cidade" class="text-light h5 px-1 mt-1">Cidade:</label></div>
                                <div class="flex-grow-2"><input type="text" class="form-control mt-1" name="cidade" id="cidade" required></div>
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
                        $dados = array(
                            'Nome: ' => $_POST['nome'],
                            'Email: ' => $_POST['email'],
                            'Cidade: ' => $_POST['cidade']
                        );
                        while($campo = current($dados)){
                            echo "<br><span class='h2 text-center text-primary'>".key($dados)."</span><span class='text-center h3'>".$campo."</span><br>";
                            next($dados);
                        };
                       
                    } else echo "<div class='alert alert-warning mt-2' role='alert'>
                                    Preencha e envie o formulário para funcionar.
                                </div>";   
                ?>
                </div>
            </div>
            <div class="row flex-grow-1">
                <div class="col-12 bg-secondary text-center py-3 print"> <!--Print da questão-->
                    <a href="../../img/atv/atv4-exe3.png"  target="_blank" rel="noopener noreferrer"><img class="img-fluid rounded" src="../../img/atv/atv4-exe3.png" alt="Print da questão"></a>
                </div>
            </div>
        </div>
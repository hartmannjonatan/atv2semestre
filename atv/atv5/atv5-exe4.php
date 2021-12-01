<?php
    if(!isset($_SESSION['user'])){
        echo "<meta http-equiv='refresh' content='0;url=?pagina=atv5-exe3&login=semLog'>";
    }
?>
        <div class="container d-flex flex-column align-items-stretch" id="main">
            <div class="row">
                <div class="col-12 pt-2 bg-dark text-light py-4"> <!--Enunciado da questão-->
                    <h4 class="text-center text-white mt-2">Cadastrar Usuário</h4>
                </div>
            </div>
    
            <div class="row d-md-flex bg-dark px-md-4">
                    <div class="col-md-7 col-sm-12 bg-dark mb-2"> <!--Formulário-->
                        <div class="formulario border-solid border border-white">
                            <h4 class="text-white mx-2 my-1">Cadastro</h4>
                            <hr class="text-light">
                            <div class="text-white-50 px-3 h5">Informe os dados no campo abaixo:</div>
                            <form action="#" method="POST"class="form-inline row px-2 py-4"> <!-- Usado action="#" porque o resultado retorna na própria página !-->
                                <div class="d-flex py-1">
                                    <div class=""><label for="nome" class="text-light h5 px-1">Nome:</label></div>
                                    <div class="flex-grow-1 px-1"><input type="text" class="form-control mb-2 align-self-center" name="nome" id="nome" required placeholder="Digite aqui o nome do usuário."></div>
                                </div>
                                <div class="d-flex py-1">
                                    <div class=""><label for="status" class="text-light h5 px-1">Status:</label></div>
                                    <div class="flex-grow-1 px-1"><input type="text" class="form-control mb-2 align-self-center" name="status" id="status" required placeholder="Digite aqui o status do usuário."></div>
                                    <div class=""><label for="tipo" class="text-light h5 px-1">Tipo de usuário:</label></div>
                                    <div class="flex-grow-1 px-1"><input type="text" class="form-control mb-2 align-self-center" name="tipo" id="tipo" required placeholder="Digite aqui o tipo do usuário."></div>
                                </div>
                                <div class="d-flex py-1">
                                    <div class=""><label for="login" class="text-light h5 px-1">Login:</label></div>
                                    <div class="flex-grow-1 px-1"><input type="text" class="form-control mb-2 align-self-center" name="login" id="login" required placeholder="Digite aqui o login para este usuário."></div>
                                </div>  
                                <div class="d-flex py-1">
                                    <div class=""><label for="senha" class="text-light h5 px-1">Senha:</label></div>
                                    <div class="flex-grow-1 px-1"><input type="password" class="form-control mb-2 align-self-center" name="senha" id="senha" required placeholder="A senha deve conter pelo menos 8 dígitos com números e caracteres." pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"></div>
                                </div>                       
                                <div class="d-flex py-3">
                                    <div class="flex-grow-1 px-1"><button type="submit" class="btn btn-outline-secondary text-center col-12 mt-4" name="enviar" value="Enviar">Enviar</button></div>
                                </div> 
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <?php
                            ini_set('display_errors', true); //Para não mostrar os erros no lugar do resultado
                            error_reporting(E_ERROR|E_PARSE);
                            if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST'){ //para verificar se POST não está vazio (assim que abre a página)
                                $nome = $_POST['nome'];
                                $status = $_POST['status'];
                                $tipo = $_POST['tipo'];
                                $login = $_POST['login']; 
                                $senha = $_POST['senha'];

                                $servername = "localhost";
                                $username = "id17467365_bdatv2semestre";
                                $password = "T7jWnTOlh&vVUprY";
                                $banco = "id17467365_mydb2021";

                                // Create connection
                                $conn = mysqli_connect($servername, $username, $password, $banco);

                                // Check connection
                                if($conn){
                                    $sql = "INSERT into `user`(`nome`,`login`,`senha`, `tipo_user`, `status`) VALUES('$nome','$login','$senha', '$tipo', '$status')";
                                    if(mysqli_query($conn,$sql)){
                                        echo "<div class='alert alert-success mt-2' role='alert'>
                                                Usuário cadastrado com sucesso.
                                            </div> 
                                            ";
                                    }else{
                                        echo "<div class='alert alert-danger mt-2' role='alert'>
                                                Usuário não cadastrado devido ao erro:
                                                <br><hr>
                                            ";
                                        echo mysqli_error($conn)."</div>";
                                        echo "<button style='width: 40%; margin-left: 30%;' onclick='goBack()' class='btn btn-outline-secondary text-center col-12 mt-4'>VOLTAR</button>";
                                    };
                                    mysqli_close($conn);
                                }else{
                                    echo "<div class='alert alert-danger mt-2' role='alert' style='white-space: normal; Word-wrap: break-Word;'>
                                                Conexão com o banco de dados mal sucedida.
                                                <br><hr>
                                        ".mysqli_connect_error()."</div>"; 
                                    echo "<button style='width: 40%; margin-left: 30%;' onclick='goBack()' class='btn btn-outline-secondary text-center col-12 my-4'>VOLTAR</button>";
                                };
                            }else echo "<div class='alert alert-warning mt-2' role='alert'>
                                            Preencha e envie o formulário para funcionar.
                                        </div> 
                                        ";
                        ?>
                   </div> 
                </div>
            <div class="row flex-grow-1">
                <div class="col-12 bg-secondary text-center py-3 print"> <!--Print da questão-->
                   <a href="../../img/atv/atv5-exe4.PNG" target="_blank" rel="noopener noreferrer"><img class="img-fluid rounded" src="../../img/atv/atv5-exe4.PNG" alt="Print da questão"></a>
                </div>
            </div>
        </div>

                <script>
                function goBack() {
                    window.history.back()
                }
                </script>
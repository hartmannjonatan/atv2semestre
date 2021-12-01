<div class="container d-flex flex-column align-items-stretch" id="main">
            <div class="row">
                <div class="col-12 pt-2 bg-dark text-light py-4"> <!--Enunciado da questão-->
                    <h4 class="text-center text-white mt-2">Logar no sistema</h4>
                </div>
            </div>
    
            <div class="row d-md-flex bg-dark px-md-4">
                    <?php
                        if(isset($_GET['login'])){
                            if($_GET['login'] == 'semLog'){
                            echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                        <button type='button' class='bg-transparent border-0 btn-outline-danger' id='btn-close' data-dismiss='alert' style='position: absolute; top: 0; right: 0;'>
                                            <span aria-hidden='true'>&times;</span>
                                        </button>
                                        <span>Você precisa logar no sistema para acessar estas funcionalidades!</span>
                                    </div> 
                                    ";
                            }
                        }
                    ?>
                    <div class="col-md-7 col-sm-12 bg-dark mb-2"> <!--Formulário-->
                        <div class="formulario border-solid border border-white">
                            <h4 class="text-white mx-2 my-1">Login</h4>
                            <hr class="text-light">
                            <form method="POST"class="form-inline row px-2 py-4"> 
                                <div class="d-flex py-1">
                                    <div class=""><label for="usuario" class="text-light h5 px-1">Usuário:</label></div>
                                    <div class="flex-grow-1 px-1"><input type="text" class="form-control mb-2 align-self-center" name="usuario" id="usuario" required placeholder="Digite seu login."></div>
                                </div>
                                <div class="d-flex py-1">
                                    <div class=""><label for="senha" class="text-light h5 px-1">Senha:</label></div>
                                    <div class="flex-grow-1 px-1"><input type="password" class="form-control mb-2 align-self-center" name="senha" id="senha" required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" placeholder="Sua senha contém letras e números com pelo menos 8 caracteres."></div>
                                </div>                      
                                <div class="d-flex py-3">
                                    <div class="flex-grow-1 px-1"><button type="submit" class="btn btn-outline-secondary text-center col-12 mt-4" name="logar" value="Logar">Entrar no sistema</button></div>
                                </div> 
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <?php
                            //LOGIN PADRÃO: admin
                            //SENHA PADRÃO: admin123

                            if(isset($_POST['logar'])){
                                $login = $_POST['usuario'];
                                $senha = $_POST['senha'];

                                $servername = "localhost";
                                $username = "id17467365_bdatv2semestre";
                                $password = "T7jWnTOlh&vVUprY";
                                $banco = "id17467365_mydb2021";

                                // Create connection
                                $conn = @mysqli_connect($servername, $username, $password, $banco);
                                $log = false;

                                // Check connection
                                if($conn){ 
                                    $sql = "SELECT * FROM user;";
                                    $result = mysqli_query($conn, $sql);
                                    if(mysqli_num_rows($result) > 0){
                                        while($row = mysqli_fetch_assoc($result)){
                                            if(($row['login'] == $login) && ($row['senha'] == $senha)){
                                                $_SESSION['user'] = $row['nome'];
                                                $log = true;
                                                break;
                                            }
                                        }
                                    }else{
                                        $log = 'semUser';
                                    }
                                    mysqli_close($conn);
                                    if($log == true){
                                        echo "<meta http-equiv='refresh' content='0;url=?login=true'>";
                                    }elseif($log == 'semUser'){
                                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                        <button type='button' class='bg-transparent border-0 btn-outline-danger' id='btn-close' data-dismiss='alert' style='position: absolute; top: 0; right: 0;'>
                                            <span aria-hidden='true'>&times;</span>
                                        </button>
                                        <span>Nenhum usuário cadastrado!</span>
                                    </div> 
                                    ";
                                    }else{
                                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                        <button type='button' class='bg-transparent border-0 btn-outline-danger' id='btn-close' data-dismiss='alert' style='position: absolute; top: 0; right: 0;'>
                                            <span aria-hidden='true'>&times;</span>
                                        </button>
                                        <span>Usuário e/ou senha incorreto(s). Tente novamente!</span>
                                    </div> 
                                    ";
                                    }
                                    
                                }else{
                                    echo "<div class='alert alert-danger mt-2' role='alert' style='white-space: normal; Word-wrap: break-Word;'>
                                                Conexão com o banco de dados mal sucedida.
                                                <br><hr>
                                        ".mysqli_connect_error()."</div>"; 
                                    echo "<button style='width: 40%; margin-left: 30%;' onclick='goBack()' class='btn btn-outline-secondary text-center col-12 my-4'>VOLTAR</button>";
                                };
                            }else echo "<div class='alert alert-warning mt-2' role='alert'>
                                            Digite seus dados e clique no botão de entrar no sistema.
                                        </div> 
                                        ";
                        ?>
                   </div> 
                </div>
            <div class="row flex-grow-1">
                <div class="col-12 bg-secondary text-center py-3 print"> <!--Print da questão-->
                   <a href="../../img/atv/atv5-exe3.PNG" target="_blank" rel="noopener noreferrer"><img class="img-fluid rounded" src="../../img/atv/atv5-exe3.PNG" alt="Print da questão"></a>
                </div>
            </div>
        </div>

                <script>
                function goBack() {
                    window.history.back()
                }
                </script>
<?php
    if(!isset($_SESSION['user'])){
        echo "<meta http-equiv='refresh' content='0;url=?pagina=atv5-exe3&login=semLog'>";
    }
?>
<div class="container d-flex flex-column align-items-stretch" id="main">
            <div class="row">
                <div class="col-12 pt-2 bg-dark text-light py-4">
                    <h4 class="text-center text-white mt-2">Listar Clientes</h4>
                </div>
            </div>
    
            <div class="row bg-dark">
                    <div class="col-12 bg-dark mb-2 table-responsive">
                        <?php
                            ini_set('display_errors', true); //Para não mostrar os erros no lugar do resultado
                            error_reporting(E_ERROR|E_PARSE);
                            $servername = "localhost";
                            $username = "id17467365_bdatv2semestre";
                            $password = "T7jWnTOlh&vVUprY";
                            $banco = "id17467365_mydb2021";

                            // Create connection
                            $conn = mysqli_connect($servername, $username, $password, $banco);

                            // Check connection
                            if(!$conn){
                                die("<div class='alert alert-danger mt-2' role='alert' style='white-space: normal; Word-wrap: break-Word;'>
                                            Conexão com o banco de dados mal sucedida.
                                            <br><hr>
                                    ".mysqli_connect_error()."</div>"); 
                                echo "<button style='width: 40%; margin-left: 30%;' onclick='goBack()' class='btn btn-outline-secondary text-center col-12 my-4'>VOLTAR</button>";
                            };

                            $sql = "SELECT * FROM `cliente`;";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0){
                                echo "
                                        <table class='table table-striped table-sm mt-2 table-responsive table-hover'>
                                            <thead class='table-dark border border-light'>
                                                <tr>
                                                    <th scope='col'>Id</th>
                                                    <th scope='col'>Nome</th>
                                                    <th scope='col'>CPF</th>
                                                    <th scope='col'>RG</th>
                                                    <th scope='col'>E-mail</th>
                                                    <th scope='col'>Ação</th>
                                                </tr>
                                            </thead>
                                            <tbody class='table-light border border-dark'>
                                    ";
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>
                                            <td>".$row["id"]."</td>
                                            <td>".$row["nome"]."</td>
                                            <td>".$row["cpf"]."</td>
                                            <td>".$row["rg"]."</td>
                                            <td>".$row["email"]."</td>
                                            <td>
                                                <form method='POST'>
                                                    <div class='d-flex py-1'>
                                                        <button type='submit' class='flex-grow-1 px-1 btn align-self-center' name='edit' value='".$row["id"]."'><img src='../img/editar.png' alt='Editar essa linha'></button>
                                                        <button type='submit' class='flex-grow-1 px-1 btn align-self-center' name='remove' value='".$row["id"]."'><img src='../img/excluir.png' alt='Excluir essa linha'></button>
                                                    </div>
                                                </form>
                                            </td>
                                         <tr>
                                    ";
                                }
                                echo " 
                                            </tbody>
                                        </table>
                                ";

                                } else {
                                echo "<div class='alert alert-danger mt-2' role='alert' style='white-space: normal; Word-wrap: break-Word;'>
                                Nenhum resultado encontrado!
                                <br><hr>";
                                };
                        ?>
                    </div>
                        
            </div>
            <div class="row flex-grow-1">
                <div class="col-12 bg-secondary text-center py-3 print"> <!--Print da questão-->
                   <a href="../../img/atv/atv5-exe2.png" target="_blank" rel="noopener noreferrer"><img class="img-fluid rounded" src="../../img/atv/atv5-exe2.png" alt="Print da questão"></a>
                </div>
            </div>
        </div>

                <script>
                function goBack() {
                    window.history.back()
                }
                </script>
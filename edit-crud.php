<?php
    if(isset($_POST['confirm'])){
        $id = $_POST['confirm'];
        $nome = $_POST['nome'];
        $rg = $_POST['rg'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];

        $servername = "localhost";
        $username = "id17467365_bdatv2semestre";
        $password = "T7jWnTOlh&vVUprY";
        $banco = "id17467365_mydb2021";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $banco);

        // Check connection
        if($conn){
            $sql = "UPDATE `cliente` SET `nome` = '$nome',`rg` = '$rg', `cpf` = '$cpf', `email` = '$email' WHERE id = $id;";
            if(mysqli_query($conn,$sql)){
                mysqli_close($conn);
                echo "<meta http-equiv='refresh' content='0;url=https://atividades2semestre.000webhostapp.com?pagina=atv5-exe2'>";
            }else{
                mysqli_close($conn);
                echo "<meta http-equiv='refresh' content='0;url=https://atividades2semestre.000webhostapp.com?pagina=atv5-exe2'>";
            };
        }else{
            echo "<meta http-equiv='refresh' content='0;url=https://atividades2semestre.000webhostapp.com?pagina=atv5-exe2'>";
        };
    }else{
        echo "<meta http-equiv='refresh' content='0;url=https://atividades2semestre.000webhostapp.com?pagina=atv5-exe2'>";
    }
?>
<?php 
    session_start();
    include("cabecalho.php");
?>

    <div class="container-fluid" id="container-1">
        <div class="row">
            <header class="fixed-top">

                <?php
                    if(!isset($_GET["pagina"])){
                        include("header-home.php");
                    }
                ?>

                <?php include("nav.php"); ?>

            </header>
        </div>

        <div class="container" id="conteudo">
            <?php
                if(isset($_GET["pagina"])){
                    $pagina = $_GET["pagina"];
                    $num = $pagina[3];
                    $pagina = "./atv/atv".$num."/".$pagina.".php";
            
                    if(file_exists($pagina)){
                        include_once($pagina);
                    }else {
                        include_once("page-error.php");
                    }

                }else{
                    include_once("conteudo-home.php");
                }
            ?>
         </div>

        <?php include("rodape.php"); ?>
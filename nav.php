<nav class="navbar navbar-expand-lg navbar-light bg-light px-5" id="nav-menu">
            <a class="navbar-brand" href="./index.php">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-md-flex" id="navbarNavDropdown">
                <ul class="navbar-nav flex-grow-1">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Atividades Básicas
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="?pagina=atv1-exe1">Exercício 1</a>
                            <a class="dropdown-item" href="?pagina=atv1-exe2">Exercício 2</a>
                            <a class="dropdown-item" href="?pagina=atv1-exe3">Exercício 3</a>
                            <a class="dropdown-item" href="?pagina=atv1-exe4">Exercício 4</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Atividades If/Else
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="?pagina=atv2-exe1">Exercício 1</a>
                            <a class="dropdown-item" href="?pagina=atv2-exe2">Exercício 2</a>
                            <a class="dropdown-item" href="?pagina=atv2-exe3">Exercício 3</a>
                            <a class="dropdown-item" href="?pagina=atv2-exe4">Exercício 4</a>
                            <a class="dropdown-item" href="?pagina=atv2-exe5">Exercício 5</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Atividades Repetição
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="?pagina=atv3-exe1">Exercício 1</a>
                            <a class="dropdown-item" href="?pagina=atv3-exe2">Exercício 2</a>
                            <a class="dropdown-item" href="?pagina=atv3-exe3">Exercício 3</a>
                            <a class="dropdown-item" href="?pagina=atv3-exe4">Exercício 4</a>
                            <a class="dropdown-item" href="?pagina=atv3-exe5">Exercício 5</a>
                            <a class="dropdown-item" href="?pagina=atv3-exe6">Exercício 6</a>
                            <a class="dropdown-item" href="?pagina=atv3-exe7">Exercício 7</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Atividades Array
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="?pagina=atv4-exe1">Exercício 1</a>
                            <a class="dropdown-item" href="?pagina=atv4-exe2">Exercício 2</a>
                            <a class="dropdown-item" href="?pagina=atv4-exe3">Exercício 3</a>
                            <a class="dropdown-item" href="?pagina=atv4-exe4">Exercício 4</a>
                            <a class="dropdown-item" href="?pagina=atv4-exe5">Exercício 5</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sistema
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <?php
                                if(isset($_SESSION['user'])){
                                    echo "<a class='dropdown-item' href='?logout=true'>Logout (".$_SESSION['user'].")</a>
                                            <a class='dropdown-item' href='?pagina=atv5-exe1'>Cadastrar cliente</a>
                                            <a class='dropdown-item' href='?pagina=atv5-exe2'>Listar clientes</a>
                                            <a class='dropdown-item' href='?pagina=atv5-exe4'>Cadastrar usuário</a>";
                                } else{
                                    echo "<a class='dropdown-item' href='?pagina=atv5-exe3'>Login</a>
                                        <a class='dropdown-item disabled' href='?pagina=atv5-exe1'>Cadastrar cliente</a>
                                        <a class='dropdown-item disabled' href='?pagina=atv5-exe2'>Listar clientes</a>
                                        <a class='dropdown-item disabled' href='?pagina=atv5-exe4'>Cadastrar usuário</a>";
                                }

                                if(isset($_GET['logout'])){
                                        session_unset();
                                        session_destroy();
                                        echo "<meta http-equiv='refresh' content='0;url=?login=exit'>";
                                }
                            ?>
                        </div>
                    </li>
                </ul>
                <div class="ml-auto">
                    <style>
                        #icon-link:hover{
                            transform: scale(1.03);
                        }
                    </style>
                    <a href="https://github.com/hartmannjonatan/atv2semestre.git" target="_blank" rel="noopener noreferrer">
                        <img src="img/logotipo-do-github.png" alt="Acesse aqui o código fonte" id="icon-link">
                    </a>
                </div>
            </div>
</nav>
                <div class="row px-4" id="cont_home">
                    <div class="col-md-4 col-sm-12 align-self-center text-center p-4">
                        <a href="img/JONATAN_HARTMANN.JPG" target="_blank" rel="noopener noreferrer"><img src="img/JONATAN_HARTMANN.JPG" alt="Foto Jonatan Hartmann" class="img-thumbnail h-75"></a>
                    </div>
                    <div class="col-md-8 col-sm-12 align-self-center text-center">
                            <?php
                                if(isset($_GET['login'])){
                                    if($_GET['login'] == 'exit'){
                                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                                    <button type='button' class='bg-transparent border-0 btn-outline-danger' id='btn-close' data-dismiss='alert' style='position: absolute; top: 0; right: 0;'>
                                                        <span aria-hidden='true'>&times;</span>
                                                    </button>
                                                    <span>Você não está mais logado.</span>
                                                </div> 
                                                ";
                                    }else{
                                        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                                                    <h6>Bem vindo ".$_SESSION['user']."</h6>
                                                    <button type='button' class='bg-transparent border-0 btn-outline-danger' id='btn-close' data-dismiss='alert' style='position: absolute; top: 0; right: 0;'>
                                                        <span aria-hidden='true'>&times;</span>
                                                    </button>
                                                    <hr>
                                                    <span>Login realizado com sucesso.</span>
                                                </div> 
                                                ";
                                    }
                                    
                                }
                            ?>
                        <div class="texto">
                            <h2 class="mb-2">Informações do desenvolvedor</h2>
                            <p>Eu sou Jonatan Felipe Hartmann, estudante do 2º ano do Técnico em Informática no Instituto Federal Farroupilha campus Santo Augusto.</p>
                            <p>Atualmente resido em São Martinho - RS com minha família.</p>
                            <h2 class="mb-2">Sobre o site</h2>
                            <p>A construção desse site tem como objetivo juntar as atividades do 2º semestre (voltadas ao desenvolvimento com php e Mysql) da disciplina de programação II que possui o docente Cleitom Richter como orientador.</p>
                            <p>As respectivas atividades podem ser encontradas no menu superior com as suas determinadas questões.</p>
                        </div>
                    </div>
                </div>
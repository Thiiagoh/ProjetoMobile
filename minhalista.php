<!DOCTYPE html>
<html>
    <head>
        <title>Página - Minha Lista</title>
	    <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="font-awesome/css/all.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <?php 
            session_start();
            if((!isset($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)){
                session_unset();
                echo "<script>alert('Esta página só pode ser acessada por usuário logado');window.location.href = 'index.html';</script>";
            }
            $logado = $_SESSION['email'];
        ?>
    </head>
    <body>
        <div class="root">
            <div class="top-bar">
                <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #272727;">
                    <div class="container">
                        <a class="navbar-brand" href="#">SaveMovies</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarsExample07">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="acesso.php">Início <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="meusfavoritos.php">Assistir Mais Tarde</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="minhalista.php">Minha Lista</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                </li>
                            </ul>
                            <div class="d-flex ml-auto">
                                <div class="dropdown menu">
                                    <button type="button" class="d-flex align-items-center" data-toggle="dropdown">
                                        <img class="avatar" src="images/user.png"/>
                                        <span><?php echo $logado; ?></span>
                                        <i class="fas fa-caret-down ml-2 mr-2"></i>
                                    </button>
                                    <div class="dropdown-menu mt-0 p-0">
                                        <a href="alterarDados.php" class="dropdown-item">Alterar senha</a>
                                        <a href="excluirConta.php" class="dropdown-item">Excluir conta</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="desconectar.php" class="dropdown-item">Sair</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Adicionar Filme/Serie</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="listaadd.php" method="POST">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nome</label>
                                    <input class="form-control" type="text" name="nome_ep" placeholder="Informe um nome" maxlength="45">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Temporada</label>
                                    <input class="form-control" type="number" name="temp_ep" placeholder="Informe um número" max="999">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Episódio</label>
                                    <input class="form-control" type="number" name="ep_ep" placeholder="Informe um número" max="999">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Tipo</label>
                                    <select name="tipo" class="form-control">
                                        <option value="filme">Filme</option>
                                        <option value="serie">Serie</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="email" value="<?php echo $logado; ?>" id="insertdata" class="btn btn-primary btn-sm">Adicionar</button>
                                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Fechar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            

            <div class="main d-flex flex-column">
                <div class="margin-top"></div>
                <div class="main-container">
                    <h2 class="title mb-3">MINHA LISTA<h2 class="title mb-1"><a href="#" data-toggle="modal" data-target="#exampleModal">Adicionar</a></h2></h2>
                    <h2 class="title mb-1">Filmes</h2>
                    <hr>
                    <div class="row list mb-5"> 
                        <?php 
                            include_once "conectar.php";
                            $conecta = mysqli_connect($nome_servidor, $nome_usuario, $senhaBanco, $nome_banco);
                            $sql = mysqli_query($conecta, "select * from vistos where clientes_email ='$logado'");
                            $i=0;
                            while($exibe = mysqli_fetch_assoc($sql)){
                                $id[$i] = $exibe["id"];
                                $clientes_email[$i] = $exibe["clientes_email"];
                                $nome[$i] = $exibe["nome"];
                                $temp[$i] = $exibe["temp"];
                                $ep[$i] = $exibe["ep"];
                                $tipo[$i] = $exibe["tipo"];
                                $editarMod[$i] = $i;

                                $delet[$i] = "DELETE FROM vistos WHERE id='$id[$i]' AND clientes_email='$logado'";
                                if ($tipo[$i] == "filme"){
                                    echo '  <div class="modal fade" id="'.$editarMod[$i].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Editar Filme/Serie</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="listarem.php" method="POST">
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlInput1">Nome</label>
                                                                    <input class="form-control" type="text" name="nome_ep" value="'.$nome[$i].'" maxlength="45">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlInput1">Temporada</label>
                                                                    <input class="form-control" type="number" name="temp_ep" value="'.$temp[$i].'" max="999">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlInput1">Episódio</label>
                                                                    <input class="form-control" type="number" name="ep_ep" value="'.$ep[$i].'" max="999">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlInput1">Tipo</label>
                                                                    <select name="tipo" class="form-control">
                                                                        <option value="filme" selected>Filme</option>
                                                                        <option value="serie">Serie</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <input type="" name="id" value="'.$id[$i].'" hidden>
                                                                <input type="" name="excluir" value="'.$delet[$i].'" hidden>
                                                                <button type="submit" name="opcao" value="0" class="btn btn-primary btn-sm">Atualizar</button>
                                                                <button type="submit" name="opcao" value="1" class="btn btn-danger btn-sm">Excluir</button>
                                                                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Fechar</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                                <div class="card border-light">
                                                    <div class="card-body p-0">
                                                        <h5 class="card-title">'.$nome[$i].'</h5>
                                                        <p class="card-text">Temporada: '.$temp[$i].'</p>
                                                        <p class="card-text">Episódio: '.$ep[$i].'</p>
                                                    </div>
                                                    <div class="btn-update">
                                                        <button data-toggle="modal" data-target="#'.$editarMod[$i].'">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>';
                                }
                                $i++;
                            }
                        ?>
                    </div>
                    <h2 class="title mb-3">Series</h2>
                    <hr>
                    <div class="row list mb-5">
                        <?php 
                            $sql = mysqli_query($conecta, "select * from vistos where clientes_email ='$logado'");
                            while($exibe = mysqli_fetch_assoc($sql)){
                                $id[$i] = $exibe["id"];
                                $clientes_email[$i] = $exibe["clientes_email"];
                                $nome[$i] = $exibe["nome"];
                                $temp[$i] = $exibe["temp"];
                                $ep[$i] = $exibe["ep"];
                                $tipo[$i] = $exibe["tipo"];
                                $editarMod[$i] = $i;

                                $delet[$i] = "DELETE FROM vistos WHERE id='$id[$i]' AND clientes_email='$logado'";

                                if($tipo[$i] == "serie"){
                                    echo '  <div class="modal fade" id="'.$editarMod[$i].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Editar Filme/Serie</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="listarem.php" method="POST">
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlInput1">Nome</label>
                                                                    <input class="form-control" type="text" name="nome_ep" value="'.$nome[$i].'" maxlength="45">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlInput1">Temporada</label>
                                                                    <input class="form-control" type="number" name="temp_ep" value="'.$temp[$i].'" max="999">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlInput1">Episódio</label>
                                                                    <input class="form-control" type="number" name="ep_ep" value="'.$ep[$i].'" max="999">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlInput1">Tipo</label>
                                                                    <select name="tipo" class="form-control">
                                                                        <option value="filme">Filme</option>
                                                                        <option value="serie" selected>Serie</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <input type="" name="id" value="'.$id[$i].'" hidden>
                                                                     <input type="" name="excluir" value="'.$delet[$i].'" hidden>
                                                                <button type="submit" name="opcao" value="0" class="btn btn-primary btn-sm">Atualizar</button>
                                                                <button type="submit" name="opcao" value="1" class="btn btn-danger btn-sm">Excluir</button>
                                                                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Fechar</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                                <div class="card border-light">
                                                    <div class="card-body p-0">
                                                        <h5 class="card-title">'.$nome[$i].'</h5>
                                                        <p class="card-text">Temporada: '.$temp[$i].'</p>
                                                        <p class="card-text">Episódio: '.$ep[$i].'</p>
                                                    </div>
                                                    <div class="btn-update">
                                                        <button data-toggle="modal" data-target="#'.$editarMod[$i].'">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>';
                                }
                                $i++;
                            }
                        ?>
                    </div>
                </div>
            </div>
        </dvi>
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    	<script src="vendor/bootstrap/js/popper.js"></script>
    	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    	<script src="vendor/select2/select2.min.js"></script>
    	<script src="vendor/tilt/tilt.jquery.min.js"></script>
    	<script>
                $('.js-tilt').tilt({
            	scale: 1.1
                });
    	</script>
    	<script src="js/main.js"></script>
    </body>
</html>
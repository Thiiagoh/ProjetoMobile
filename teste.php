<!doctype html>
<html lang="pt-br">
    <head>
		<!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Página - Inícial</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">
        <link rel="stylesheet" href="assets/css/carousel.css">
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <?php 
            session_start();
            include_once "conectar.php";
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
                                <li class="nav-item active">
                                    <a class="nav-link" href="acesso.php">Início <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="meusfavoritos.php">Assistir Mais Tarde</a>
                                </li>
                                <li class="nav-item">
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

            <div id="main" class="main d-flex flex-column">
                <div class="margin-top"></div>
		        <div class="container">
		        	<div class="main-container">
			        	<div class="container-fluid">
			        		<div id="carousel-example" class="carousel slide" data-ride="carousel">
			        			<div class="carousel-inner row w-100 mx-auto" role="listbox">
			            			<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
										<img src="images/img_filme/anne.jpg" class="img-fluid mx-auto d-block" alt="img1">
									</div>
									<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
										<img src="images/img_filme/gente_grande.jpg" class="img-fluid mx-auto d-block" alt="img2">
									</div>
									<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
										<img src="images/img_filme/anne.jpg" class="img-fluid mx-auto d-block" alt="img3">
									</div>
									<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
										<img src="images/img_filme/gente_grande.jpg" class="img-fluid mx-auto d-block" alt="img4">
									</div>
									<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
										<img src="images/img_filme/anne.jpg" class="img-fluid mx-auto d-block" alt="img5">
									</div>
									<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
										<img src="images/img_filme/gente_grande.jpg" class="img-fluid mx-auto d-block" alt="img6">
									</div>
									<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
										<img src="images/img_filme/anne.jpg" class="img-fluid mx-auto d-block" alt="img7">
									</div>
									<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
										<img src="images/img_filme/gente_grande.jpg" class="img-fluid mx-auto d-block" alt="img8">
									</div>
			        			</div>
			        			<a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
			        		</div>
			        	</div>
			        </div>
		        </div>

		        <?php 
                    include_once "conectar.php";
                    $conecta = mysqli_connect($nome_servidor, $nome_usuario, $senhaBanco, $nome_banco);
                    $sql = mysqli_query($conecta, "select nome_filme, nota from filmes_series_avaliacao");
                    $i=0;
                    $notaAnne=0;
                    $gente_grande=0;
                    $notaBrooklyn=0;
                    $notaPaixao=0;
                    $notaVis=0;
                    $notaIlha=0;
                    while($exibe = mysqli_fetch_assoc($sql)){
                        $filme[$i] = $exibe['nome_filme'];
                        $nota[$i] = $exibe['nota'];
                        if ($filme[$i] == 'Anne with an E' AND $nota[$i] == 1)
                            $notaAnne++;
                        else if ($filme[$i] == 'Anne with an E' AND $nota[$i] == 0)
                            $notaAnne--;
                        else if ($filme[$i] == 'Gente Grande' AND $nota[$i] == 1)
                            $gente_grande++;
                        else if ($filme[$i] == 'Gente Grande' AND $nota[$i] == 0)
                            $gente_grande--;
                        else if ($filme[$i] == 'Brooklyn Nine-Nine' AND $nota[$i] == 1)
                            $notaBrooklyn++;
                        else if ($filme[$i] == 'Brooklyn Nine-Nine' AND $nota[$i] == 0)
                            $notaBrooklyn--;
                        else if ($filme[$i] == 'Paixão Obsessiva' AND $nota[$i] == 1)
                            $notaPaixao++;
                        else if ($filme[$i] == 'Paixão Obsessiva' AND $nota[$i] == 0)
                            $notaPaixao--;
                        else if ($filme[$i] == 'Vis a Vis' AND $nota[$i] == 1)
                            $notaVis++;
                         else if ($filme[$i] == 'Vis a Vis' AND $nota[$i] == 0)
                            $notaVis--;
                        else if ($filme[$i] == 'Ilha do Medo' AND $nota[$i] == 1)
                            $notaIlha++;
                        else if ($filme[$i] == 'Ilha do Medo' AND $nota[$i] == 0)
                            $notaIlha--;
                        
                        $i++;
                    }
                ?>

                <div class="main-container">


                	<div class="d-flex align-items-center mb-1">
                        <div>
                            <h2 class="title mb-1">FILMES DO MOMENTO</h2>
                        </div>
                    </div>
                    
                    <div class="row list mb-5">
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                            <div class="card border-dark">
                                <div class="btn-rating">
                                    <button style="color: #fff;background-color: #<?php if($notaAnne>0 || $notaAnne == 0){echo '00FF00';} else{ echo 'FF0000';}?>" data-toggle="modal" data-target="#ModalAne" class="d-flex justify-content-center align-items-center">
                                        <i class="fas fa-thumbs-<?php if($notaAnne>0 || $notaAnne == 0){echo 'up';} else{ echo 'down';}?>"></i>
                                    </button>
                                </div>
                                <img src="images/img_filme/anne.jpg" class="card-img-top mb-3" data-toggle="modal" data-target="#ModalAne"/>
                                <div class="card-body p-0">
                                    <h5 class="card-title"><?php echo $notaAnne?>Anne with an "E"</h5>
                                    <p class="card-text">Drama/Romance</p>
                                    <p class="card-text">2017</p>
                                </div>
                                <div class="btn-play">
                                    <form action="favoritosadd.php" method="POST">
                                        <button name="email" value="<?php echo $logado; ?>" class="d-flex justify-content-center align-items-center">
                                            <input type="" name="filme" value="Anne with an E" hidden>
                                            <input type="" name="genero" value="Drama/Romance" hidden>
                                            <input type="" name="imagem" value="anne" hidden>
                                            <input type="" name="lancamento" value="2017" hidden>
                                            <input type="" name="opcao" value="0" hidden>
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>


                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                            <div class="card border-dark">
                                <div class="btn-rating">
                                    <button style="color: #fff;background-color: #<?php if($gente_grande>0 || $gente_grande == 0){echo '00FF00';} else{ echo 'FF0000';}?>" data-toggle="modal" data-target="#ModalGente" class="d-flex justify-content-center align-items-center">
                                        <i class="fas fa-thumbs-<?php if($gente_grande>0 || $gente_grande == 0){echo 'up';} else{ echo 'down';}?>"></i>
                                    </button>
                                </div>
                                <img src="images/img_filme/gente_grande.jpg" class="card-img-top mb-3" data-toggle="modal" data-target="#ModalGente"/>
                                <div class="card-body p-0">
                                    <h5 class="card-title"><?php echo $gente_grande?>Gente Grande</h5>
                                    <p class="card-text">Comédia</p>
                                    <p class="card-text">2010</p>
                                </div>
                                <div class="btn-play">
                                    <form action="favoritosadd.php" method="POST">
                                        <button name="email" value="<?php echo $logado; ?>" class="d-flex justify-content-center align-items-center">
                                            <input type="" name="filme" value="Gente Grande" hidden>
                                            <input type="" name="genero" value="Comédia" hidden>
                                            <input type="" name="imagem" value="gente_grande" hidden>
                                            <input type="" name="lancamento" value="2010" hidden>
                                            <input type="" name="opcao" value="1" hidden>
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                            <div class="card border-dark">
                                <div class="btn-rating">
                                    <button style="color: #fff;background-color: #<?php if($notaBrooklyn>0 || $notaBrooklyn == 0){echo '00FF00';} else{ echo 'FF0000';}?>" data-toggle="modal" data-target="#ModalBrooklyn" class="d-flex justify-content-center align-items-center">
                                        <i class="fas fa-thumbs-<?php if($notaBrooklyn>0 || $notaBrooklyn == 0){echo 'up';} else{ echo 'down';}?>"></i>
                                    </button>
                                </div>
                                <img src="images/img_filme/brooklyn.jpg" class="card-img-top mb-3" data-toggle="modal" data-target="#ModalBrooklyn"/>
                                <div class="card-body p-0">
                                    <h5 class="card-title">Brooklyn Nine-Nine</h5>
                                    <p class="card-text">Comédia/Crime</p>
                                    <p class="card-text">2019</p>
                                </div>
                                <div class="btn-play">
                                    <form action="favoritosadd.php" method="POST">
                                        <button name="email" value="<?php echo $logado; ?>" class="d-flex justify-content-center align-items-center">
                                            <input type="" name="filme" value="Brooklyn Nine-Nine" hidden>
                                            <input type="" name="genero" value="Comédia/Crime" hidden>
                                            <input type="" name="imagem" value="brooklyn" hidden>
                                            <input type="" name="lancamento" value="2019" hidden>
                                            <input type="" name="opcao" value="2" hidden>
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                          
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                            <div class="card border-dark">
                                <div class="btn-rating">
                                    <button style="color: #fff;background-color: #<?php if($notaPaixao>0 || $notaPaixao == 0){echo '00FF00';} else{ echo 'FF0000';}?>" data-toggle="modal" data-target="#ModalPaixao" class="d-flex justify-content-center align-items-center">
                                        <i class="fas fa-thumbs-<?php if($notaPaixao>0 || $notaPaixao == 0){echo 'up';} else{ echo 'down';}?>"></i>
                                    </button>
                                </div>
                                    <img src="images/img_filme/paixao.jpg" class="card-img-top mb-3" data-toggle="modal" data-target="#ModalPaixao"/>
                                <div class="card-body p-0">
                                    <h5 class="card-title">Paixão Obsessiva</h5>
                                    <p class="card-text">Ação</p>
                                    <p class="card-text">2017</p>
                                </div>
                                <div class="btn-play">
                                    <form action="favoritosadd.php" method="POST">
                                        <button name="email" value="<?php echo $logado; ?>" class="d-flex justify-content-center align-items-center">
                                            <input type="" name="filme" value="Paixão Obsessiva" hidden>
                                            <input type="" name="genero" value="Ação" hidden>
                                            <input type="" name="imagem" value="paixao" hidden>
                                            <input type="" name="lancamento" value="2017" hidden>
                                            <input type="" name="opcao" value="3" hidden>
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                            <div class="card border-dark">
                                <div class="btn-rating">
                                    <button style="color: #fff;background-color: #<?php if($notaVis>0 || $notaVis == 0){echo '00FF00';} else{ echo 'FF0000';}?>" data-toggle="modal" data-target="#ModalVis" class="d-flex justify-content-center align-items-center">
                                        <i class="fas fa-thumbs-<?php if($notaVis>0 || $notaVis == 0){echo 'up';} else{ echo 'down';}?>"></i>
                                    </button>
                                </div>
                                <img src="images/img_filme/vis.jpg" class="card-img-top mb-3" data-toggle="modal" data-target="#ModalVis"/>
                                <div class="card-body p-0">
                                    <h5 class="card-title">Vis a Vis</h5>
                                    <p class="card-text">Drama</p>
                                    <p class="card-text">2015</p>
                                </div>
                                <div class="btn-play">
                                    <form action="favoritosadd.php" method="POST">
                                        <button name="email" value="<?php echo $logado; ?>" class="d-flex justify-content-center align-items-center">
                                            <input type="" name="filme" value="Vis a Vis" hidden>
                                            <input type="" name="genero" value="Drama" hidden>
                                            <input type="" name="imagem" value="vis" hidden>
                                            <input type="" name="lancamento" value="2015" hidden>
                                            <input type="" name="opcao" value="4" hidden>
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                            <div class="card border-dark">
                                <div class="btn-rating">
                                    <button style="color: #fff;background-color: #<?php if($notaIlha>0 || $notaIlha == 0){echo '00FF00';} else{ echo 'FF0000';}?>" data-toggle="modal" data-target="#ModalIlha" class="d-flex justify-content-center align-items-center">
                                        <i class="fas fa-thumbs-<?php if($notaIlha>0 || $notaIlha == 0){echo 'up';} else{ echo 'down';}?>"></i>
                                    </button>
                                </div>
                                <img src="images/img_filme/ilha.jpg" class="card-img-top mb-3" data-toggle="modal" data-target="#ModalIlha"/>
                                <div class="card-body p-0">
                                    <h5 class="card-title">Ilha do medo</h5>
                                    <p class="card-text">Ação</p>
                                    <p class="card-text">2010</p>
                                </div>
                                <div class="btn-play">
                                    <form action="favoritosadd.php" method="POST">
                                        <button name="email" value="<?php echo $logado; ?>" class="d-flex justify-content-center align-items-center">
                                            <input type="" name="filme" value="Ilha do Medo" hidden>
                                            <input type="" name="genero" value="Ação" hidden>
                                            <input type="" name="imagem" value="ilha" hidden>
                                            <input type="" name="lancamento" value="2010" hidden>
                                            <input type="" name="opcao" value="5" hidden>
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-1">
                        <div>
                            <h2 class="title mb-1">FILMES E SÉRIES MAIS POPULARES ATUALMENTE</h2>
                        </div>
                    </div>
                    <div class="row list mb-5">
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                            <div class="card border-dark">
                                <a href="#">
                                    <img src="images/img_filme/ameaca.jpg" class="card-img-top mb-3"/>
                                </a>
                                <div class="card-body p-0">
                                    <h5 class="card-title">Ameaça Profunda</h5>
                                    <p class="card-text">Terror/Ficção/Ação</p>
                                    <p class="card-text">2020</p>
                                </div>
                                <div class="btn-play">
                                    <form action="favoritosadd.php" method="POST">
                                        <button name="email" value="<?php echo $logado; ?>" class="d-flex justify-content-center align-items-center">
                                            <input type="" name="filme" value="Ameaça Profunda" hidden>
                                            <input type="" name="genero" value="Terror/Ficção/Ação" hidden>
                                            <input type="" name="imagem" value="ameaca" hidden>
                                            <input type="" name="lancamento" value="2020" hidden>
                                            <input type="" name="opcao" value="6" hidden>
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                            <div class="card border-dark">
                                <a href="#">
                                    <img src="images/img_filme/homem.jpg" class="card-img-top mb-3"/>
                                </a>
                                <div class="card-body p-0">
                                    <h5 class="card-title">Homem Invisível</h5>
                                    <p class="card-text">Suspense/Ficção/Terror</p>
                                    <p class="card-text">2020</p>
                                </div>
                                <div class="btn-play">
                                    <form action="favoritosadd.php" method="POST">
                                        <button name="email" value="<?php echo $logado; ?>" class="d-flex justify-content-center align-items-center">
                                            <input type="" name="filme" value="Homem Invisível" hidden>
                                            <input type="" name="genero" value="Suspense/Ficção/Terror" hidden>
                                            <input type="" name="imagem" value="homem" hidden>
                                            <input type="" name="lancamento" value="2020" hidden>
                                            <input type="" name="opcao" value="7" hidden>
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                            <div class="card border-dark">
                                <a href="#">
                                    <img src="images/img_filme/dois.jpg" class="card-img-top mb-3"/>
                                </a>
                                <div class="card-body p-0">
                                    <h5 class="card-title">Dois Irmãos Uma Jornada Fantástica</h5>
                                    <p class="card-text">Animação</p>
                                    <p class="card-text">2020</p>
                                </div>
                                <div class="btn-play">
                                    <form action="favoritosadd.php" method="POST">
                                        <button name="email" value="<?php echo $logado; ?>" class="d-flex justify-content-center align-items-center">
                                            <input type="" name="filme" value="Dois Irmãos Uma Jornada Fantástica" hidden>
                                            <input type="" name="genero" value="Animação" hidden>
                                            <input type="" name="imagem" value="dois" hidden>
                                            <input type="" name="lancamento" value="2020" hidden>
                                            <input type="" name="opcao" value="8" hidden>
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                            
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                            <div class="card border-dark">
                                <a href="#">
                                    <img src="images/img_filme/poco.jpg" class="card-img-top mb-3"/>
                                </a>
                                <div class="card-body p-0">
                                    <h5 class="card-title">O poço</h5>
                                    <p class="card-text">Drama</p>
                                    <p class="card-text">2019</p>
                                </div>
                                <div class="btn-play">
                                    <form action="favoritosadd.php" method="POST">
                                        <button name="email" value="<?php echo $logado; ?>" class="d-flex justify-content-center align-items-center">
                                            <input type="" name="filme" value="O poço" hidden>
                                            <input type="" name="genero" value="Drama" hidden>
                                            <input type="" name="imagem" value="poco" hidden>
                                            <input type="" name="lancamento" value="2019" hidden>
                                            <input type="" name="opcao" value="9" hidden>
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                            <div class="card border-dark">
                                <a href="#">
                                    <img src="images/img_filme/sim.jpg" class="card-img-top mb-3"/>
                                </a>
                                <div class="card-body p-0">
                                    <h5 class="card-title">Simpsons </h5>
                                    <p class="card-text">Animação/Comédia</p>
                                    <p class="card-text">2019</p>
                                </div>
                                <div class="btn-play">
                                    <form action="favoritosadd.php" method="POST">
                                        <button name="email" value="<?php echo $logado; ?>" class="d-flex justify-content-center align-items-center">
                                            <input type="" name="filme" value="Simpsons" hidden>
                                            <input type="" name="genero" value="Animação/Comédia" hidden>
                                            <input type="" name="imagem" value="sim" hidden>
                                            <input type="" name="lancamento" value="2019" hidden>
                                            <input type="" name="opcao" value="10" hidden>
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                            <div class="card border-dark">
                                <a href="#">
                                    <img src="images/img_filme/milagre.jpg" class="card-img-top mb-3"/>
                                </a>
                                <div class="card-body p-0">
                                    <h5 class="card-title">Milagre na Cela 7</h5>
                                    <p class="card-text">Drama/Comédia</p>
                                    <p class="card-text">2019</p>
                                </div>
                                <div class="btn-play">
                                    <form action="favoritosadd.php" method="POST">
                                        <button name="email" value="<?php echo $logado; ?>" class="d-flex justify-content-center align-items-center">
                                            <input type="" name="filme" value="Milagre na Cela 7" hidden>
                                            <input type="" name="genero" value="Drama/Comédia" hidden>
                                            <input type="" name="imagem" value="milagre" hidden>
                                            <input type="" name="lancamento" value="2019" hidden>
                                            <input type="" name="opcao" value="11" hidden>
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
		    </div>
	    </div>

        <div class="modal fade" id="ModalAne" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="item active">
                        <div class="fill">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Anne with an "E"</h5>
                            </div>
                            <form action="ratingadd.php" method="POST">
                                <div class="modal-body">
                                    <iframe id="videoIframeAne" width="100%" height="100%" src="https://www.youtube.com/embed/47hHTW4QLjg?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                                    <label for="exampleFormControlInput1">Descrição</label>
                                    <p>Seila</p>
                                    <label for="exampleFormControlInput1">Avalie</label>
                                </div>
                                <div class="modal-footer">
                                    <input type="" name="email" value="<?php echo $logado; ?>" hidden>
                                    <input type="" name="filme" value="Anne with an E" hidden>
                                    <button type="submit" name="avaliacao" value="1" id="insertdata" class="btn btn-success btn-sm">Gostei</button>
                                    <button type="submit" name="avaliacao" value="0" id="insertdata" class="btn btn-danger btn-sm">Não gostei</button>
                                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Fechar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="ModalGente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="item active">
                        <div class="fill">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Gente Grande</h5>
                            </div>
                            <form action="ratingadd.php" method="POST">
                                <div class="modal-body">
                                    <iframe id="videoIframeGente" width="100%" height="100%" src="https://www.youtube.com/embed/47hHTW4QLjg?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                                    <label for="exampleFormControlInput1">Descrição</label>
                                    <p>Seila</p>
                                    <label for="exampleFormControlInput1">Avalie</label>
                                    <div class="modal-footer">
                                        <input type="" name="email" value="<?php echo $logado; ?>" hidden>
                                        <input type="" name="filme" value="Gente Grande" hidden>
                                        <button type="submit" name="avaliacao" value="1" id="insertdata" class="btn btn-success btn-sm">Gostei</button>
                                        <button type="submit" name="avaliacao" value="0" id="insertdata" class="btn btn-danger btn-sm">Não gostei</button>
                                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="ModalBrooklyn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="item active">
                        <div class="fill">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Brooklyn Nine-Nine</h5>
                            </div>
                            <form action="ratingadd.php" method="POST">
                                <div class="modal-body">
                                    <iframe id="videoIframeBrooklyn" width="100%" height="100%" src="https://www.youtube.com/embed/47hHTW4QLjg?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                                    <label for="exampleFormControlInput1">Descrição</label>
                                    <p>Seila</p>
                                    <label for="exampleFormControlInput1">Avalie</label>
                                    <div class="modal-footer">
                                        <input type="" name="email" value="<?php echo $logado; ?>" hidden>
                                        <input type="" name="filme" value="Brooklyn Nine-Nine" hidden>
                                        <button type="submit" name="avaliacao" value="1" id="insertdata" class="btn btn-success btn-sm">Gostei</button>
                                        <button type="submit" name="avaliacao" value="0" id="insertdata" class="btn btn-danger btn-sm">Não gostei</button>
                                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="ModalPaixao" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="item active">
                        <div class="fill">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Paixão Obsessiva</h5>
                            </div>
                            <form action="ratingadd.php" method="POST">
                                <div class="modal-body">
                                    <iframe id="videoIframePaixao" width="100%" height="100%" src="https://www.youtube.com/embed/47hHTW4QLjg?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                                    <label for="exampleFormControlInput1">Descrição</label>
                                    <p>Seila</p>
                                    <label for="exampleFormControlInput1">Avalie</label>
                                    <div class="modal-footer">
                                        <input type="" name="email" value="<?php echo $logado; ?>" hidden>
                                        <input type="" name="filme" value="Paixão Obsessiva" hidden>
                                        <button type="submit" name="avaliacao" value="1" id="insertdata" class="btn btn-success btn-sm">Gostei</button>
                                        <button type="submit" name="avaliacao" value="0" id="insertdata" class="btn btn-danger btn-sm">Não gostei</button>
                                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="ModalVis" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="item active">
                        <div class="fill">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Vis a Vis</h5>
                            </div>
                            <form action="ratingadd.php" method="POST">
                                <div class="modal-body">
                                    <iframe id="videoIframeVis" width="100%" height="100%" src="https://www.youtube.com/embed/47hHTW4QLjg?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                                    <label for="exampleFormControlInput1">Descrição</label>
                                    <p>Seila</p>
                                    <label for="exampleFormControlInput1">Avalie</label>
                                    <div class="modal-footer">
                                        <input type="" name="email" value="<?php echo $logado; ?>" hidden>
                                        <input type="" name="filme" value="Vis a Vis" hidden>
                                        <button type="submit" name="avaliacao" value="1" id="insertdata" class="btn btn-success btn-sm">Gostei</button>
                                        <button type="submit" name="avaliacao" value="0" id="insertdata" class="btn btn-danger btn-sm">Não gostei</button>
                                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="ModalIlha" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="item active">
                        <div class="fill">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ilha do Medo</h5>
                            </div>
                            <form action="ratingadd.php" method="POST">
                                <div class="modal-body">
                                    <iframe id="videoIframeIlha" width="100%" height="100%" src="https://www.youtube.com/embed/47hHTW4QLjg?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                                    <label for="exampleFormControlInput1">Descrição</label>
                                    <p>Seila</p>
                                    <label for="exampleFormControlInput1">Avalie</label>
                                    <div class="modal-footer">
                                        <input type="" name="email" value="<?php echo $logado; ?>" hidden>
                                        <input type="" name="filme" value="Ilha do Medo" hidden>
                                        <button type="submit" name="avaliacao" value="1" id="insertdata" class="btn btn-success btn-sm">Gostei</button>
                                        <button type="submit" name="avaliacao" value="0" id="insertdata" class="btn btn-danger btn-sm">Não gostei</button>
                                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Javascript -->
		<script src="assets/js/jquery-3.3.1.min.js"></script>
		<script src="assets/js/jquery-migrate-3.0.0.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        <script>
            $('#ModalAne').on('show.bs.modal', function() {
                $("#videoIframeAne")[0].src += "&autoplay=1";
            });
            $('#ModalAne').on('hidden.bs.modal', function(e) {
                var rawVideoURL = $("#videoIframeAne")[0].src;
                rawVideoURL = rawVideoURL.replace("&autoplay=1", "");
                $("#videoIframeAne")[0].src = rawVideoURL;
            });
            $('#ModalGente').on('show.bs.modal', function() {
                $("#videoIframeGente")[0].src += "&autoplay=1";
            });
            $('#ModalGente').on('hidden.bs.modal', function(e) {
                var rawVideoURL = $("#videoIframeGente")[0].src;
                rawVideoURL = rawVideoURL.replace("&autoplay=1", "");
                $("#videoIframeGente")[0].src = rawVideoURL;
            });
            $('#ModalBrooklyn').on('show.bs.modal', function() {
                $("#videoIframeBrooklyn")[0].src += "&autoplay=1";
            });
            $('#ModalBrooklyn').on('hidden.bs.modal', function(e) {
                var rawVideoURL = $("#videoIframeBrooklyn")[0].src;
                rawVideoURL = rawVideoURL.replace("&autoplay=1", "");
                $("#videoIframeBrooklyn")[0].src = rawVideoURL;
            });
            $('#ModalPaixao').on('show.bs.modal', function() {
                $("#videoIframePaixao")[0].src += "&autoplay=1";
            });
            $('#ModalPaixao').on('hidden.bs.modal', function(e) {
                var rawVideoURL = $("#videoIframePaixao")[0].src;
                rawVideoURL = rawVideoURL.replace("&autoplay=1", "");
                $("#videoIframePaixao")[0].src = rawVideoURL;
            });
            $('#ModalVis').on('show.bs.modal', function() {
                $("#videoIframeVis")[0].src += "&autoplay=1";
            });
            $('#ModalVis').on('hidden.bs.modal', function(e) {
                var rawVideoURL = $("#videoIframeVis")[0].src;
                rawVideoURL = rawVideoURL.replace("&autoplay=1", "");
                $("#videoIframeVis")[0].src = rawVideoURL;
            });
            $('#ModalIlha').on('show.bs.modal', function() {
                $("#videoIframeIlha")[0].src += "&autoplay=1";
            });
            $('#ModalIlha').on('hidden.bs.modal', function(e) {
                var rawVideoURL = $("#videoIframeIlha")[0].src;
                rawVideoURL = rawVideoURL.replace("&autoplay=1", "");
                $("#videoIframeIlha")[0].src = rawVideoURL;
            });
        </script>
    </body>
</html>
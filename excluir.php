<!DOCTYPE html>
<html>
    <head>
        <title>Excluir um usuário!</title>
        <meta charset="UTF-8">
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
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <?php 
            session_start();
            include_once "conectar.php";
            if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)){
                session_unset();
                echo "<script>window.location.href = 'index.php';</script>";
            }
            $logado = $_SESSION['email'];
        ?>
    </head>
    <body>
         <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100 p-t-50 p-b-90">
                    <span class="login100-form-title p-b-51">Mensagem do sistema</span>       
                    <?php
                        //Receber as informações via formulario
                        $senha = $_POST['senha'];
                        $senha2 = $_POST['senha2'];

                        //Conectar no mysql
                        $conecta = mysqli_connect($nome_servidor, $nome_usuario, $senhaBanco, $nome_banco); 
                        //Pegar Dado do Banco
                        $tenta_achar = "SELECT * FROM clientes WHERE email='$logado' AND senha='$senha'";
                        $resultados = $conecta->query($tenta_achar);
                        if ($resultados->num_rows <= 0){
                            echo ' <div class="flex-sb-m w-full" style="justify-content: center;">
                                                <div class="alert alert-warning fade show" role="alert">
                                                    <strong>Erro!</strong> Nenhum usuário encontrado!
                                                </div>
                                            </div><br>';
                            echo '<a href="excluirConta.php"><button class="login100-form-btn">Voltar</button></a>';
                        }else{
                            $row = $resultados = $conecta->query($tenta_achar);
                            $row = $resultados->fetch_assoc();
                            $user = $row['senha'];
                            //Verificar se a senha do banco é igual ao que o usuário informou
                            if ($user=$row['senha'] == $senha AND $senha == $senha2){
                                $sqlrem = "DELETE FROM filmes_series_assistir_mais_tarde WHERE clientes_email='$logado'";
                                $sql = "DELETE FROM clientes WHERE email='$logado'";
                                $sql2 = "DELETE FROM filmes_series_assistidos WHERE clientes_email='$logado'";
                                $sql3 = "DELETE FROM filmes_series_avaliacao WHERE clientes_email='$logado'";
                                if ($conecta->query($sql3) AND $conecta->query($sql2) AND $conecta->query($sqlrem) AND $conecta->query($sql) === TRUE ){
                                    echo ' <div class="flex-sb-m w-full" style="justify-content: center;">
                                                <div class="alert alert-success fade show" role="alert">
                                                    <strong>Sucesso!</strong> Usuário registrado com sucesso!
                                                </div>
                                            </div><br>';
                                    echo '<a href="desconectar.php"><button class="login100-form-btn">INÍCIO</button></a>';}
                                else{
                                    echo "Erro ao apagar o usuario: " . $conecta->error."<br><br>";
                                    echo '<a href="excluirConta.php"><button class="login100-form-btn">Voltar</button></a>';
                                }
                            }else{
                                echo ' <div class="flex-sb-m w-full" style="justify-content: center;">
                                                <div class="alert alert-warning fade show" role="alert">
                                                    <strong>Erro!</strong> As senhas não correspondem!
                                                </div>
                                            </div><br>';
                                echo '<a href="excluirConta.php"><button class="login100-form-btn">Voltar</button></a>';
                            }
                        }
                        $conecta->close();
                    ?>
        	   </div>
            </div>
    	</div>
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
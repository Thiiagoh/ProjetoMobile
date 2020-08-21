<!DOCTYPE html>
<html>
    <head>
        <title>Cadastrar um novo usuário!</title>
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
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    <body>
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100 p-t-50 p-b-90">
                    <span class="login100-form-title p-b-51">Mensagem do sistema</span>
                       
                     <?php
                        //Receber as informações via formulario
                        include_once "conectar.php";
                        $email = $_POST['email'];
                        $senha = $_POST['senha'];
                        $senha2 = $_POST['senha2'];

                        //Conectar no mysql
                        $conecta = mysqli_connect($nome_servidor, $nome_usuario, $senhaBanco, $nome_banco); 

                        //Inserir registro
                        if ($senha == $senha2){
                            if (empty($email) || empty($senha) || empty($senha2)){
                                echo 'Algum campo esta vazio, escreva algo.<br><br>';
                                echo '<a href="criar.html"><button class="login100-form-btn">Voltar</button></a>';
                            }else{
                                $sql = "INSERT INTO clientes(email, senha) VALUES('$email', '$senha')";
                                if ($conecta->query($sql) === TRUE) {
                                    echo "Usuário registrado com sucesso!<br><br>";
                                    echo '<a href="index.html"><button class="login100-form-btn">Entrar</button></a>';
                                } else{
                                    echo "O usuário informado já existe!<br><br>";
                                    echo '<a href="criar.html"><button class="login100-form-btn">Voltar</button></a>';
                                }
                            }
                        }else{
                            echo 'As senhas não correspondem!<br><br>';
                            echo '<a href="criar.html"><button class="login100-form-btn">Voltar</button></a>';
                        }
                        $conecta->close();
                    ?> 
        	   </div>
            </div>
    	</div>
        
        <div id="dropDownSelect1"></div>
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>
    </body>
</html>
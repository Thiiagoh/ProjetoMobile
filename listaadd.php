<?php
    include_once "conectar.php";
    $logado = $_POST['email'];
    $nome_ep = $_POST['nome_ep'];
    $temp_ep = $_POST['temp_ep'];
    $ep_ep = $_POST['ep_ep'];
    $tipo = $_POST['tipo'];
    $conecta = mysqli_connect($nome_servidor, $nome_usuario, $senhaBanco, $nome_banco);
    
    $add = "INSERT INTO vistos(clientes_email, nome, temp, ep, tipo) VALUES('$logado', '$nome_ep', '$temp_ep', '$ep_ep', '$tipo')";
    $conecta->query($add);
    header('location:minhalista.php');
?>
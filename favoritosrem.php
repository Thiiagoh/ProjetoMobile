<?php
    include_once "conectar.php";
    $logado = $_POST['email'];
    $rem = $_POST['remover'];

    $conecta = mysqli_connect($nome_servidor, $nome_usuario, $senhaBanco, $nome_banco); 
    $conecta->query($rem);
    unset($rem);
    header('location:meusfavoritos.php');
?>
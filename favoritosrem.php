<?php
    include_once "conectar.php";
    $logado = $_POST['email'];
    $opcao = $_POST['opcao'];
    $rem = $_POST['remover'];

    $conecta = mysqli_connect($nome_servidor, $nome_usuario, $senhaBanco, $nome_banco); 
    switch ($opcao) {
        case 1:
            $conecta->query($rem);
            unset($opcao);
            header('location:meusfavoritos.php');
            break;
    }
?>
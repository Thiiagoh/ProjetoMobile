<?php
    include_once "conectar.php";
    $logado = $_POST['email'];
    $id_filme = $_POST['filme'];

    $conecta = mysqli_connect($nome_servidor, $nome_usuario, $senhaBanco, $nome_banco);
    $ameaca = "INSERT INTO filmes_series_assistir_mais_tarde(clientes_email, id_filme_serie) VALUES('$logado', '$id_filme')";
    $conecta->query($ameaca);
    unset($ameaca);
    header('location:acesso.php');
?>
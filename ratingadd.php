<?php
    include_once "conectar.php";
    $logado = $_POST['email'];
    $nome = $_POST['filme'];
    $nota = $_POST['avaliacao'];

    $conecta = mysqli_connect($nome_servidor, $nome_usuario, $senhaBanco, $nome_banco);
    $rem = "DELETE FROM filmes_series_avaliacao WHERE clientes_email='$logado' AND id_filme_serie='$nome'";
    $conecta->query($rem);
    $send = "INSERT INTO filmes_series_avaliacao(nota, clientes_email, id_filme_serie) VALUES('$nota', '$logado', '$nome')";
    $conecta->query($send);
    header('location:acesso.php');
?>
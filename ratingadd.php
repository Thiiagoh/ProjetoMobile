<?php
    include_once "conectar.php";
    $logado = $_POST['email'];
    $nome = $_POST['filme'];
    $nota = $_POST['avaliacao'];

    $conecta = mysqli_connect($nome_servidor, $nome_usuario, $senhaBanco, $nome_banco);
    $rem = "DELETE FROM avaliacao WHERE clientes_email='$logado' AND nome_filme='$nome'";
    $conecta->query($rem);
    $send = "INSERT INTO avaliacao(clientes_email, nome_filme, nota) VALUES('$logado', '$nome', '$nota')";
    $conecta->query($send);
    header('location:acesso.php');
?>
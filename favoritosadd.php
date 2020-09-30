<?php
    include_once "conectar.php";
    $logado = $_POST['email'];
    $id_filme = $_POST['filme'];

    $conecta = mysqli_connect($nome_servidor, $nome_usuario, $senhaBanco, $nome_banco);
    
    $del = "DELETE FROM filmes_series_assistir_mais_tarde WHERE id_filme_serie='$id_filme' AND clientes_email='$logado'";
    $ameaca = "INSERT INTO filmes_series_assistir_mais_tarde(clientes_email, id_filme_serie) VALUES('$logado', '$id_filme')";
    $conecta->query($del);
    $conecta->query($ameaca);
    unset($del);
    unset($ameaca);
    header('location:acesso.php');
?>
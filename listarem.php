<?php
    include_once "conectar.php";
    $id = $_POST['id'];
    $rem = $_POST['excluir'];
    $opcao = $_POST['opcao'];
    $nome_ep = $_POST['nome_ep'];
    $temp_ep = $_POST['temp_ep'];
    $ep_ep = $_POST['ep_ep'];
    $tipo = $_POST['tipo'];

	switch ($opcao) {
	    case 0:
    		$conecta = mysqli_connect($nome_servidor, $nome_usuario, $senhaBanco, $nome_banco);
    		$add = "UPDATE vistos SET nome='$nome_ep', temp='$temp_ep', ep='$ep_ep', tipo='$tipo' WHERE id='$id'";
    		$conecta->query($add);
	    	unset($opcao);
	    	header('location:minhalista.php');
	    	break;
	   	case 1:
	        $conecta = mysqli_connect($nome_servidor, $nome_usuario, $senhaBanco, $nome_banco); 
    		$conecta->query($rem);
    		header('location:minhalista.php');
	        break;
	}
?>
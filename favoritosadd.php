<?php
    include_once "conectar.php";
    $logado = $_POST['email'];
    $nome = $_POST['filme'];
    $imagem = $_POST['imagem'];
    $genero = $_POST['genero'];
    $data = $_POST['lancamento'];
    $opcao = $_POST['opcao'];

    $conecta = mysqli_connect($nome_servidor, $nome_usuario, $senhaBanco, $nome_banco);
    switch ($opcao) {
        case 0:
            $ameaca = "INSERT INTO favoritos(filmes, nome, data, genero, clientes_email) VALUES('$nome', '$imagem', '$data', '$genero', '$logado')";
            $conecta->query($ameaca);
            unset($opcao);
            header('location:acesso.php');
            break;
        case 1:
            $flash = "INSERT INTO favoritos(filmes, nome, data, genero, clientes_email) VALUES('$nome', '$imagem', '$data', '$genero', '$logado')";
            $conecta->query($flash);
            unset($opcao);
            header('location:acesso.php');
            break;
        case 2:
            $supernatural = "INSERT INTO favoritos(filmes, nome, data, genero, clientes_email) VALUES('$nome', '$imagem', '$data', '$genero', '$logado')";
            $conecta->query($supernatural);
            unset($opcao);
            header('location:acesso.php');
            break;
        case 3:
            $the100 = "INSERT INTO favoritos(filmes, nome, data, genero, clientes_email) VALUES('$nome', '$imagem', '$data', '$genero', '$logado')";
            $conecta->query($the100);
            unset($opcao);
            header('location:acesso.php');
            break;
        case 4:
            $breaking = "INSERT INTO favoritos(filmes, nome, data, genero, clientes_email) VALUES('$nome', '$imagem', '$data', '$genero', '$logado')";
            $conecta->query($breaking);
            unset($opcao);
            header('location:acesso.php');
            break;
        case 5:
            $blacklist = "INSERT INTO favoritos(filmes, nome, data, genero, clientes_email) VALUES('$nome', '$imagem', '$data', '$genero', '$logado')";
            $conecta->query($blacklist);
            unset($opcao);
            header('location:acesso.php');
            break;
        case 6:
            $blacklist = "INSERT INTO favoritos(filmes, nome, data, genero, clientes_email) VALUES('$nome', '$imagem', '$data', '$genero', '$logado')";
            $conecta->query($blacklist);
            unset($opcao);
            header('location:acesso.php');
            break;
        case 7:
            $blacklist = "INSERT INTO favoritos(filmes, nome, data, genero, clientes_email) VALUES('$nome', '$imagem', '$data', '$genero', '$logado')";
            $conecta->query($blacklist);
            unset($opcao);
            header('location:acesso.php');
            break;
        case 8:
            $blacklist = "INSERT INTO favoritos(filmes, nome, data, genero, clientes_email) VALUES('$nome', '$imagem', '$data', '$genero', '$logado')";
            $conecta->query($blacklist);
            unset($opcao);
            header('location:acesso.php');
            break;
        case 9:
            $blacklist = "INSERT INTO favoritos(filmes, nome, data, genero, clientes_email) VALUES('$nome', '$imagem', '$data', '$genero', '$logado')";
            $conecta->query($blacklist);
            unset($opcao);
            header('location:acesso.php');
            break;
        case 10:
            $blacklist = "INSERT INTO favoritos(filmes, nome, data, genero, clientes_email) VALUES('$nome', '$imagem', '$data', '$genero', '$logado')";
            $conecta->query($blacklist);
            unset($opcao);
            header('location:acesso.php');
            break;
        case 11:
            $blacklist = "INSERT INTO favoritos(filmes, nome, data, genero, clientes_email) VALUES('$nome', '$imagem', '$data', '$genero', '$logado')";
            $conecta->query($blacklist);
            unset($opcao);
            header('location:acesso.php');
            break;
    }
?>
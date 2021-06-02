<?php
    session_start();
    include_once("conexao.php");

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
    $estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
    $opniao = filter_input(INPUT_POST, 'opniao', FILTER_SANITIZE_STRING);

    // echo "Nome: $nome <br> E-mail: $email";

    $result_usuario = "INSERT INTO usuarios (nome, email, cidade, estado, opniao, created) VALUES ('$nome', '$email', '$cidade', '$estado', '$opniao', NOW())";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    if(mysqli_insert_id($conn)){
        $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
        header("Location: 20210601_01.php");
    }else{
        $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado</p>";
        header("Location: 20210601_01.php");
    }
?>
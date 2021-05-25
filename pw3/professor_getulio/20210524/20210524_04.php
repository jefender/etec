<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>
<body>
<!-- Crie um formulário que receba um login e senha de um usuário. Faça a
validação dos campos de modo que usuário tenha que preencher todos os
campos. Se o login for “etec” e a senha “informática”, exiba uma
mensagem na tela de “logado com sucesso” e não exiba mais o formulário
de login. -->

<form class="formulario" method="post">
        <p>Digite seu Login e Senha para acessar:</p>
    
    <div class="field">
        <label for="nome">Seu Login:</label>
        <input type="text" id="login" name="login" placeholder="Digite seu login" required>
    </div>
    <br>
    <div class="field">
        <label for="nome">Senha:</label>
        <input type="password" id="password" name="password" placeholder="Digite sua senha" required>
    </div>
    <br><br>
    <input type="submit" name="acao" value="Enviar">
</form>

<?php
        if (isset($_POST["acao"])){
            $login=$_POST["login"];
            $senha=$_POST["password"];

        if ($login=="etec" && $senha=="informatica"){
            echo "<script>alert('Logado com sucesso')</script>";
        }else{
            echo "<script>alert('Usuário ou Senha Invalido')</script>";
        }
        }
?>
    
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
</head>
<body>
<!-- Crie um formulário onde o usuário informa seu nome, seu e-mail, sua data
de nascimento e escolha numa lista a bandeira do seu cartão de
crédito. Ao clicar em em botão de submit, exiba todos os dados na tela. -->

<form class="formulario" method="post">
        <p>Digite seus dados:</p>
    
    <div class="field">
        <label for="nome">Digite seu Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="Digite seu Nome" required>
    </div>
    <br>
    <div class="field">
        <label for="email">Digite seu E-mail:</label>
        <input type="email" id="email" name="email" placeholder="Digite seu E-mail" required>
    </div>
    <br>
    <div class="field">
        <label for="date">Informe sua data de Nascimento:</label>
        <input type="date" id="date" name="date" required>
    </div>
    <br>
    <label for="cartoes">Informe a banderia do seu Cartão de Crédito:</label><br>
    <input type="checkbox" name="cartao" value="Visa">Visa <br>
    <input type="checkbox" name="cartao" value="MasterCard">MasterCard <br>
    <input type="checkbox" name="cartao" value="Amercian Express">Amercian Express <br>
    <br><br>
    <input type="submit" name="acao" value="Enviar">
</form>

<?php
        if (isset($_POST["acao"])){
            $nome=$_POST["nome"];
            $email=$_POST["email"];
            $date=implode('/', array_reverse(explode('-', $_POST["date"])));
            $cartao=$_POST["cartao"];

            echo "<p>Olá, ".$nome."</p>";
            echo "<p>Seu email é: ".$email."</p>";
            echo "<p>Sua data de nascimento é: ".$date."</p>";
            echo "<p>A bandeira do seu cartão de crédito é: ".$cartao."</p>";
            
        }
?>
    
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário HTML</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form class="formulario" method="post">
        <p>Envie uma mensagem preenchendo o formulário abaixo:</p>
    
    <div class="field">
        <label for="nome">Seu nome:</label>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
    </div>

    <div class="field">
        <label for="telefone">Seu Telefone:</label>
        <input type="text" id="telefone" name="telefone" placeholder="Digite seu Telefone">
    </div>

    <div class="field">
        <label for="email">Seu E-mail:</label>
        <input type="email" id="email" name="email" placeholder="Digite seu E-mail*" required>
    </div>

    <div class="field radiobox">
        <span>Deseja receber nossas novidades?</span>
        <input type="radio" name="novidades" id="sim" value="sim" checked> <label for="sim">Sim</label>
        <input type="radio" name="novidades" id="nao" value="nao" checked> <label for="sim">Não</label>
    </div>

    <div class="field">
        <label for="mensagem">Sua mensagem:</label>
        <textarea name="mensagem" id="mensagem" placeholder="Mensagem" cols="30" rows="10" required></textarea></div>
    </div>

    <input type="submit" name="acao" value="Enviar">

    </form>

<?php
        if (isset($_POST["acao"])){
            $nome=$_POST["nome"];
            $telefone=$_POST["telefone"];
            $email=$_POST["email"];
            $radio=$_POST["novidades"];
            $msg=$_POST["mensagem"];

            echo "<p>Olá, ".$nome."</p>";
            echo "<p>Seu email é: ".$email."</p>";
            echo "<p>Seu telefone é: ".$telefone."</p>";

        if ($radio=="sim"){
            echo "<p>Você escolheu receber nossas novidades</p>";
        }elseif ($radio=="nao") {
            echo "<p>Você escolheu NÃO receber nossas novidades</p>";
        }
            echo "<p>Sua mensagem é:<br/>".$msg."</p>";
        }

?>

</body>
</html>
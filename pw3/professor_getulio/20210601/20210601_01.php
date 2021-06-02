<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Cadastrar</title>
</head>
<body>
    <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION ['msg'];
            unset($_SESSION['msg']);
        }
    ?>
    <br>    
<form action="processa.php" method="POST">
<pre>
<h1>Cadastro de Usuários do Site</h1>
Insira as informações para efetuar o cadastro e deixe seu comentário.
<br>
<label>Nome:</label>    <input type="text" name="nome">
<label>E-mail:</label>  <input type="email" name="email">
<label>Cidade:</label>  <input type="text" name="cidade">
<label>Estado:</label>  <input type="text" name="estado" maxlength="2" size="2"><br>
Digite sua opnião sobre o site no espaço abaixo: <br>
<textarea rows="5" cols="42" name="opniao"></textarea><br><br>
<input type="submit" value="Efetuar Cadastro" name="cadastrar">
</pre>
</form>    
</body>
</html>
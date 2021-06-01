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
    <h1>Cadastrar Usuário</h1>
    <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION ['msg'];
            unset($_SESSION['msg']);
        }
    ?>
    <form action="processa.php" method="POST">
        <label>Nome: </label>       
        <input type="text" name="nome" placeholder="Digite o nome completo"><br><br>
        <label>Email: </label>      
        <input type="email" name="email" placeholder="Digite o seu E-mail"><br><br>
        <input type="submit" value="Cadastrar" name="cadastrar">
    </form>    
</body>
</html>
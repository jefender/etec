<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercício 8 PHP</title>
</head>
<body>

<?php
    $nome = "Angelo";
    $sobrenome = "Ferreira";
    $idade = 45;

    $nCompleto = "<h2>Meu nome é ";
    $nCompleto .= "$nome ";
    $nCompleto .= "$sobrenome ";
    $nCompleto .= "e tenho $idade anos</h2>";

    echo $nCompleto;
?>
    
</body>
</html>
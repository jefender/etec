<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>
<?php

    $lista = ["Domingo","Segunda","Terça","Quarta","Quinta","Sexta","Sabado"];

    foreach($lista as $chave => $valor){
        echo "$chave: $valor \n";
    }

    echo '<br><br>';

    $nomes = array('Thiago', 'João', 'Ricardo', 'Paula');

    foreach ($nomes as $indice => $valor) {
    echo $indice . " - ";
    echo $valor . "";
    }

?>    
</body>
</html>
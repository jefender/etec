<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício para Entregar</title>
</head>
<body>
<?php
    // Exercicio 02 Utilizar o IF  ELSE para testar se o usuario tem 18 ou mais, apresenta a mensagem  não posso dirigir.

    $idade = 17;

    if($idade >= 18){
        echo "Você pode dirigir." . " Você tem " . $idade . " anos de idade.";
    }else{
        echo "Você não pode dirigir." . " Você tem " . $idade . " anos de idade.";
    }
?>    
</body>
</html>
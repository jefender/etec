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
    // Exercicio 03 Utilizar o IF  ELSEIF ELSE para testar se o usuario tem 18 ou >= 12 e <= 17 , apresenta a mensagem "posso dirigir" ou  "não posso dirigir" , "nenhuma das anteriores".

    $idade = 11;

    if($idade >= 18){
        echo "Você pode dirigir." . " Você tem " . $idade . " anos de idade.";
    }elseif($idade >=12 && $idade <= 17){
        echo "Você não pode dirigir." . " Você tem " . $idade . " anos de idade.";
    }else{
        echo "Nenhuma das anteriores.";
    }
?>    
</body>
</html>
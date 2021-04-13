<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laço</title>
</head>
<body>
<?php
    $i = 0;
    $soma = 0;
    while($i <= 10){
        if($i % 2 != 0){
            echo $i . "<br>";
            $soma += $i;            
        }
        $i++;
    }
    echo "A soma dos numeros impares de 0 a 10 é: " . $soma . '<br>';
    ?>     
</body>
</html>
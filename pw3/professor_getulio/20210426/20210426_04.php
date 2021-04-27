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
    // Exercicio  utilizar o laço foreach para contar até 15, verificar se o numero é maior que 5 e usar break parando o laço antes que ele termine.
    
    $i = 0;
    $numeros = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
    foreach ($numeros as $indice => $nada) {
    echo $indice . " <br>";
    $i += 1;
    if($i > 5){
        break;
    }
    }
?>  
</body>
</html>
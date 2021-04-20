<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio</title>
</head>
<body>
<?php 
    $sorteio = rand(0,5);

    switch($sorteio){
        case 0:
        echo "Você perdeu a vez";
        break;
        case 1:
        echo "Avance 1 casa";
        break;
        case 2:
        echo "Você ganhou um bônus! Avance 3 casas";
        break;
        default:
        echo "Jogue novamente";
        break;
    } 
?>    
</body>
</html>
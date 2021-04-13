<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>
<body>
    <?php
    $mensagem = "Estou aprendendo loopings PHP";
    $i = 1;
    while($i <= 10){
        echo $i . ' - ' . $mensagem . '<br />' . PHP_EOL;
        $i++;
    }
    echo "<br>";
    $j = 10;
    while($j >= 1){
        echo $j . ' - ' . $mensagem . '<br />' . PHP_EOL;
        $j--;
    }
    ?>    
</body>
</html>
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
    do{
        echo $i . ' - ' . $mensagem . '<br />' . PHP_EOL;
        $i++;
    } while($i <= 10);
    ?>    
</body>
</html>
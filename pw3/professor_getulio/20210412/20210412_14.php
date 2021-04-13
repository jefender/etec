<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada Completa</title>
</head>
<body>
    <?php
        for($j = 1; $j <= 10; $j++){
            $multTabuada = $j;
            for($i = 0; $i <= 10; $i++){
                echo $multTabuada . ' X ' . $i . ' = ' . $multTabuada * $i . '<br>';
                }
                echo '<br>';      
        }
    ?>      
</body>
</html>
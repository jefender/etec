<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laço FOR</title>
</head>
<body>
    <?php
        for ($i = 1; $i <= 10; $i++){
            echo '<br>' . $i . '<br>';
            echo 'Contando...';

            for ($j = $i + 1; $j <= $i + 5; $j++){
                if($j != $i + 5){
                    echo $j . ', ';
                } else {
                    echo $j;
                }
                if($j == 7){
                    break 2; 
                }               
            }
        }
    ?>   
</body>
</html>
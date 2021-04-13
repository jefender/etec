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
            if ($i % 2 == 0){
                echo $i . ' é par ' . '<br />' . PHP_EOL ;
            }else {
                echo $i . ' é impar ' . '<br />' . PHP_EOL ;
            }
        }
    ?>     
</body>
</html>
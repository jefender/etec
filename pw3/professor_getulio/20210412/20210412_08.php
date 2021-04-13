<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laço For</title>
</head>
<body>
    <?php
        $mensagem = "Estou parendendo Loopins PHP";

        for ($i = 1; $i <= 10; $i++){
            echo $i . ' - ' .$mensagem . '<br />' . PHP_EOL ;
        }
    ?>    
</body>
</html>
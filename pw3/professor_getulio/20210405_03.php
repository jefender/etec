<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variável Inválida</title>
</head>
<body>
    <?php
        $valor1; //variável válida
        $1valor; //variável inválida
        echo $valor1;
        echo $1valor;

    ?>
    
</body>
</html>
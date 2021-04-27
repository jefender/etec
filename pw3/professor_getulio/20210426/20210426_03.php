<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach - Array com nome de Frutas</title>
</head>
<body>
<?php
    $frutas = array('Banana', 'Laranja', 'Mamão', 'Abacate');

    foreach ($frutas as $indice => $nome) {
    echo $indice . " - ";
    echo $nome . " <br>";
    }
?>       
</body>
</html>
<?php
$texto="<p>Este é o quarto parágrafo</p>";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mistura de php com html</title>
</head>
<body>
<h1>Exercício 4 PHP - Misturando o código</h1>
<p>Este é o primeiro parágrafo</p>
<p>
    <?php
        echo "Este é o segundo paragrafo.";
    ?>  
</p>
<p>Este é o terceiro parágrafo</p>
    <?php
        echo $texto;
    ?>  
</body>
</html>
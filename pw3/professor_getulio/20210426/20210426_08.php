<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício para Entregar</title>
</head>
<body>
<?php
    // Exercicio 04 switch e case definam uma variavel cor e caso a cor seja azul como verdadeiro apresenta a cor azul lembrando de utilizar o break.

    $cor = 'Azul';

    switch ($cor) {
        case 'Verde':
        echo ("A cor é VERDE.");
        break;
        case 'Amarelo':
        echo ("A cor é AMARELO.");
        break;
        case 'Azul':
        echo ("A cor é AZUL.");
        break;
        case 'Roxo':
        echo ("A cor é ROXO.");
        break;
        default:
        echo "Informado a cor errada.";
    }
?>    
</body>
</html>
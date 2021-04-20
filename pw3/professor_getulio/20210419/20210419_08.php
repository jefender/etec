<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia da Semana</title>
</head>
<body>
<?php
    $diaSemana = 1;

    switch ($diaSemana) {
        case 1:
        echo ("Domingo");
        break;
        case 2:
        echo ("Segunda-feira");
        break;
        case 3:
        echo ("Terça-feira");
        break;
        case 4:
        echo ("Quarta-feira");
        break;
        case 5:
        echo ("Quinta-feira");
        break;
        case 6:
        echo ("Sexta-feira");
        break;
        case 7:
        echo ("Sábado");
        break;
        default:
        echo "Informado o dia errado";
    }
?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dias do Mês</title>
    <!--         
    Crie um programa onde os números de 1 até 12, representando o mês do ano, e deve retornar o número de dias que possui nesse mês. Desconsidere os anos bissextos.
    Sabemos que:
    Meses com 31 dias: Janeiro (1), Março (3), Maio (5), Julho (7), Agosto (8), Outubro (10) e Dezembro (12)
    Meses com 30 dias: Abril (4), Junho (6), Setembro (9) e Novembro (11)
    Meses com 28 dias: Fevereiro (2) 
    -->
</head>
<body>
<?php
    $mes = 2;
    $mensagem = 'O número de dias dete mês é: ';

    switch($mes){
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            $dias = '31 dias';              
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            $dias = '30 dias';              
            break;
        case 2:
            $dias = '28 dias';              
            break;
        default:
            $dias = 'mês errado';              
            break;
    }
    echo $mensagem.$dias;
?>    
</body>
</html>
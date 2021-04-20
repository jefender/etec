<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ler Código de Produto</title>
</head>
<body>
<?php
    $codigo = 80;
    $mensagem = 'A sua Classificação é: ';

    switch($codigo){
        case 1:
            $classificacao = 'Alimento não-perecível';              
            break;
        case ($codigo >= 2 && $codigo <= 4):
            $classificacao = 'Alimento perecível';              
            break;
        case ($codigo >= 5 && $codigo <= 6):
            $classificacao = 'Vestuário';              
            break;
        case 7:
            $classificacao = 'Higiene Pessoal';              
            break;
        case ($codigo >= 8 && $codigo <= 15):
            $classificacao = 'Limpeza e Utensílios Domésticos';              
            break;
        default:
            $classificacao = 'Código inválido';              
            break;
    }
    echo $mensagem.$classificacao;
?>    
</body>
</html>
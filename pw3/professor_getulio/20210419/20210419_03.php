<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio Casa de Lanches</title>
</head>
<body>
<?php
        $produto = 105;
        $quantidade = 2;
        $mensagem = 'O valor a pagar é: R$';

        switch($produto){
            case 100:
                $valor = 1.70 * $quantidade;              
                break;
            case 101:
                $valor = 2.30 * $quantidade;              
                break;
            case 102:
                $valor = 2.60 * $quantidade;              
                break;
            case 103:
                $valor = 2.40 * $quantidade;              
                break;
            case 104:
                $valor = 2.50 * $quantidade;              
                break;
            case 105:
                $valor = 1.00 * $quantidade;              
                break;
            default:
                $valor = ' de graça';              
                break;
        }
        echo $mensagem.$valor;
?>    
</body>
</html>
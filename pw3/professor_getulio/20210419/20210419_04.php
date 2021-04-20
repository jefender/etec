<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clube de Futebol</title>
</head>
<body>
<?php
    $nome = 'João';
    $idade = 2;
    $mensagem = 'A sua Categoria é: ';

    switch($idade){
        case ($idade >= 5 && $idade <= 10):
            $categoria = 'Infantil';              
            break;
        case ($idade >= 11 && $idade <= 15):
            $categoria = 'Juvenil';              
            break;
        case ($idade >= 16 && $idade <= 20):
            $categoria = 'Junior';              
            break;
        case ($idade >= 21 && $idade <= 25):
            $categoria = 'Profissional';              
            break;
        default:
            $categoria = ' sem categoria';              
            break;
    }
    echo $mensagem.$categoria;
?>    
</body>
</html>
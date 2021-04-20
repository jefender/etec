<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch PHP</title>
</head>
<body>
    <?php
        $numero = 3;

        switch($numero){
            case 1:
                $mensagem = 'uma Bicicleta';
                break;
            case 2:
                $mensagem = '20 mil reais em barras de ouro';
                break;
            case 3:
                $mensagem = 'uma casa';
                break;
            case 4:
                $mensagem = 'um conjunto de panelas';
                break;
            case 5:
                $mensagem = 'um carro Zero';
                break;
            default:
                $mensagem = 'nada, infelizmente';
                break;
        }
        echo "Parabéns o seu prêmio foi {$mensagem}";
    ?>    
</body>
</html>
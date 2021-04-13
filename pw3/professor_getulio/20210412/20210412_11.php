<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laço FOR</title>
</head>
<body>
    <?php
        $premiado = 9;
   
        if( $premiado < 10 ){         
            for( $i = 1; $i <= 10; $i++ ){         
                if( $i == $premiado ){         
                    echo $i . ' é o número premiado ' . '<br />';
                break;
                } else {         
                    if ( $i % 2 == 0 ){
                        echo $i . ' é par ' . '<br />';
                    } else {
                        echo $i . ' é impar ' . '<br />';
                    }         
                }         
            }         
        } else {         
            echo 'O número deve ser menor que 10';         
        }
    ?>    
</body>
</html>
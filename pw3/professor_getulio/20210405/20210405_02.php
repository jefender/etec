<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes</title>
</head>
<body>
    <?php
        //declaramos as constantes validas
        define("BOLA1","FUTEBOL");
        define("BOLA2","BASQUETE");
        define("BOLA3","PING-PING");

        // Tudo em minúsculo, funciona mas recomenda-se não usar
        define("bola4","tenis"); 

        //constante inválida, pois começa com número
        define("5BOLA1","BOLA MARCHA");

        echo BOLA1 ."<br>";
        echo BOLA2 . "<br>";
        echo BOLA3 . "<br>";
    ?>    
</body>
</html>
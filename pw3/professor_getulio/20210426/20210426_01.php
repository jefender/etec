<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>
<?php
    $ead =  array('Aqui na ETEC ','você se torna um ','desenvolvedor PHP.<br>');

    foreach($ead as $can){
        echo "$can";
    }

    $cores = array("azul", "vermelho", "amarelo", "verde"); 
    
    foreach ($cores as $value){
        echo "$value <br>";
    }

    // Sintaxe Básica

    foreach ( $meu_array as $valor_do_array ) {
        echo $valor_do_array;
    }
?>    
</body>
</html>
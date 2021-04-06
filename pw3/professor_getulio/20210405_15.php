<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatenar com aspas duplas</title>
</head>
<body>

<?php
$nome = "Angelo";
$sobrenome = "Ferreira";
$idade = 40;
echo "<h2>Meu nome é $nome $sobrenome e tenho $idade anos</h2>.";

$end = 'Rua São João';
$n = "1129";
$endCompleto = "<h2>Endereço: $end, $n</h2>";
echo $endCompleto;
?>
    
</body>
</html>
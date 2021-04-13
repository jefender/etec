<?php
$nome = "Roger";
$sobrenome = "de Castro";
$end = "Rua da Ordem";
$num = 256;
$endCompleto = $end.", ".$num;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatenar String</title>
</head>
<body>
<p>
<?php
echo "<h2>Meu nome é: ".$nome." ".$sobrenome."</h2>";

echo "<h2>Endereço: ".$endCompleto."</h2>";
?>
</p>    
</body>
</html>
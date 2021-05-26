<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica o Cadastro</title>
</head>
<body>
<?php
$nome           =   $_POST["nome"];
$email          =   $_POST["email"];
$cidade         =   $_POST["cidade"];
$estado         =   $_POST["estado"];
$comentarios    =   $_POST["comentarios"];
$erro           =   0;
//Verifica se o campo nome não está em branco 
if (empty($nome) or strstr ($nome, ' ') == false){
    echo "Favor digitar seu nome corretamente.<br>"; 
    $erro=1;
}
//Verifica se o campo email está preenchido corretamente 
if (strlen($email) < 8 || strstr ($email, '@') == false){
    echo "Favor digitar sew email corretamento.<br>";
    $erro=1;
}
//Verifica se o campo cidade está em branco 
if (empty ($cidade)){
    echo "Favor digitar sua cidade.<br>";
    $erro=1;
}
//Verifica o campo estado está preenchido com 2 digitos 
if (strlen($estado) != 2){
    echo "Favor digitar seu estado corretamente.<br>";
    $erro=1;
}
//Verifica se o campo comentarios está vazio
if (empty ($comentarios)){
    echo "Favor entre com algum comentário.<br>";
    $erro=1;
}
//Verifica se não houve erro - beste caso chama a include para inserir os dados
if ($erro==0){
    echo "Todos os dados foram digitados corretamente!.<br>";
    include 'insere.inc';
}
?>    
</body>
</html>
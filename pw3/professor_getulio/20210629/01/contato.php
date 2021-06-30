<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$depart = $_POST['departamento'];
$fone = $_POST['telefone'];
$desc_equip = $_POST['desc_equip'];
$equip_number = $_POST['equip_number'];
$problem = $_POST['problema'];

if (!$conn) {
    die('Não foi possível conectar ao Banco de Dados');
}

$sql = "INSERT INTO contato VALUES ";
$sql .= "(null, '$nome', '$email', '$depart', '$fone', '$desc_equip', '$equip_number', '$problem')"; 
mysqli_query($conn,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($conn);
echo "Cliente cadastrado com sucesso!<br>";
echo "<a href='form.html'>Clique aqui para realizar um novo cadastro</a><br>";
?>
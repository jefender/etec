<?php

//Configuração BD
$host = "localhost";
$user = "root";
$pass = "usbw";
$d_b = "u671492475_teste";

//////////////////////////////////////
//Não altere a partir daqui!
/////////////////////////////////////
//Estilo orientado a objetos
$con = new mysqli($host, $user, $pass, $d_b);

$res = mysqli_query($con,"SELECT * FROM fornecedores");
$pag = mysqli_query($con,"SELECT * FROM pagamentos");

?>

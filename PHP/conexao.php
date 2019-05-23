<?php
$host = "localhost";
$user = "pattypra_gP2TYpS";
$pass = "gP2TYpS";
$banco = "pattypra_gP2TYpS";
$conexao = mysqli_connect($host, $user, $pass) or die (mysql_error());
mysqli_select_db($conexao, $banco);
?>

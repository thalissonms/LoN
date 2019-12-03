<?php 
// Conexão com servidor SQL 
$server = "localhost";
$user = "root";
$password = "";
$sql_connect = mysqli_connect ($server, $user, $password) or die($error = $error005);
#Lista de Bancos de Dados
$database_1 = "alpha";
$database_2 = "alpha-match";
#Conexões com Bancos de Dados 
$mysql_db_select_geral = mysqli_connect ($server, $user, $password, $database_1) or die($error = $error005);
$mysql_db_select_match = mysqli_select_db($sql_connect, $database_2) or die($error = $error005); 
?>
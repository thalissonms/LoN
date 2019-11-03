<?php
error_reporting(1);
// Conexão com servidor SQL 
$server = "localhost";
$user = "root";
$password = "";
$sttsLog1 = 1;

$sql_connect = mysqli_connect ($server, $user, $password) or ($sttsLog1 = 0);
#Lista de Bancos de Dados
$database_1 = "log-site-ver";
#Conexões com Bancos de Dados 
$mysql_db_select = mysqli_connect ($server, $user, $password, $database_1) or ($sttsLog1 = 0);
?>
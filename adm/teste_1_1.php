<?php 
include '../003/conf-global.php';
include '../002/alpha_conect.php';
$name1 = $_GET['smns'];
$region1 = $_GET['region'];
$sql_get_basic = "select * from summonerprimaryinfo where inv_name_006 = '$name1' and inv_rg_006 = '$region1'";
$sql_query_basic = mysqli_query($mysql_db_select_geral, $sql_get_basic);
$sql_num_basic = mysqli_num_rows($sql_query_basic);
$sql_fetch_basic = mysqli_fetch_array($sql_query_basic);
include 'teste_1_2.php';
?>
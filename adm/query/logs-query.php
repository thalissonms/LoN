<?php 
include'connect.php';
include '../../003/conf-global.php';

$region = "BR1";
$summonerNameForm = "ForLove";

$resultado1 = "off";
$resultado2 = "off"; 
$resultado3 = "off"; 
$resultado4 = "off"; 
$resultado5 = "bol-logs"; 
$resultado6 = "bol-logs"; 
$resultado7 = "bol-logs"; 

if ($sttsLog1 == 0){$resultado1 = "off";} else {
$sql_get_basic = "select * from logs-pages where inv_name_006 = '$name1' and inv_rg_006 = '$region1'";
$sql_query_basic = mysqli_query($mysql_db_select, $sql_get_basic);
$sql_num_basic = mysqli_num_rows($sql_query_basic);
$sql_fetch_basic = mysqli_fetch_array($sql_query_basic);
$resultado1 = "on";
}

if (!empty($GameLastVersion)){
$resultado2 = "on";}

$summonerUrl = "https://".$region.".api.riotgames.com/lol/summoner/v4/summoners/by-name/".$summonerNameForm."?api_key=".$apiKey;
$getResults = file_get_contents($summonerUrl);
$summonerItens = json_decode($getResults, true);
if (!empty($summonerItens)) {$resultado3 = 'on';}

$lolSttsUrl = "https://br1.api.riotgames.com/lol/status/v3/shard-data?api_key=".$apiKey;
$lolSttsResults = file_get_contents($lolSttsUrl);
$lolSttsItens = json_decode($lolSttsResults, true);
if($lolSttsItens['services'][0]['status'] == "online"){$resultado4 = "on";}

include'packJson.php';
?>
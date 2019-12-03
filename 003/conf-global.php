<?php
#error_reporting(1);
include 'basic-info.php';
include 'errors.php';
include '../001/api_key.php'
date_default_timezone_set('Brazil/East');

// Conexão com a RiotGame
$region = $_GET['region'];
$summonerNameForm = $_GET['smns'];
$idioma = "pt_BR";
$apiKey = $api_key;

if($siteStatus == "1"){
// Informações sobre ultima versão do Game
$gameInfo = "https://ddragon.leagueoflegends.com/api/versions.json";
$getGameInfo = file_get_contents($gameInfo);
$showGameInfo = json_decode($getGameInfo, true);
$GameLastVersion = $showGameInfo['0'];
} 



?>

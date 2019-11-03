<?php
#error_reporting(1);
include 'basic-info.php';
include 'errors.php';
date_default_timezone_set('Brazil/East');

// Conexão com a RiotGame
$region = $_GET['region'];
$summonerNameForm = $_GET['smns'];
$idioma = "pt_BR";
$apiKey = "RGAPI-0f88a5f9-0d43-42cc-a18e-03b72b70b279";

if($siteStatus == "1"){
// Informações sobre ultima versão do Game
$gameInfo = "https://ddragon.leagueoflegends.com/api/versions.json";
$getGameInfo = file_get_contents($gameInfo);
$showGameInfo = json_decode($getGameInfo, true);
$GameLastVersion = $showGameInfo['0'];
} 



?>
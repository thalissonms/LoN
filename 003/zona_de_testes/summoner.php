<?php 
include 'sqlinject_sv.php';


// Informações basicas do invocador 
/*$summonerUrl = "https://".$region.".api.riotgames.com/lol/summoner/v3/summoners/by-name/".$summonerNameForm."?api_key=".$apiKey;
$getResults = file_get_contents($summonerUrl);
$sumonnerItens = json_decode($getResults, true);

$summonerId =  $sumonnerItens['id'];
$summonerLv =  $sumonnerItens['summonerLevel'];
$summonerName = $sumonnerItens['name'];


// Pre definindo valores para variaveis
$summonerLeagueQueueSolo = "Unranked";
$summonerLeaguesTierSolo = "Unranked";
$summonerLeaguesRankSolo = "Unranked";
$summonerLeaguesWinsSolo = "Unranked";
$summonerLeaguesLoseSolo = "Unranked";
$summonerLeaguesPdlsSolo = "Unranked";

$summonerLeagueQueueFlex = "Unranked";
$summonerLeaguesTierFlex = "Unranked";
$summonerLeaguesRankFlex = "Unranked";
$summonerLeaguesWinsFlex = "Unranked";
$summonerLeaguesLoseFlex = "Unranked";
$summonerLeaguesPdlsFlex = "Unranked";


// Informações de Liga do invocador
$summonerLeagueUrl = "https://".$region.".api.riotgames.com/lol/league/v3/positions/by-summoner/".$summonerId."?api_key=".$apiKey;
$getLeagueResults = file_get_contents($summonerLeagueUrl);
$summonerLeagueItens = json_decode($getLeagueResults, true);

if (isset($summonerLeagueItens[0]) == false){
$summonerLeagueItens[0]['queueType'] =  "Unranked";
} else { if ($summonerLeagueItens[0]['queueType'] == "RANKED_SOLO_5x5") {
$summonerLeagueQueueSolo = $summonerLeagueItens[0]['queueType'];
$summonerLeaguesTierSolo = $summonerLeagueItens[0]['tier'];
$summonerLeaguesRankSolo = $summonerLeagueItens[0]['rank'];
$summonerLeaguesWinsSolo = $summonerLeagueItens[0]['wins'];
$summonerLeaguesLoseSolo = $summonerLeagueItens[0]['losses'];
$summonerLeaguesPdlsSolo = $summonerLeagueItens[0]['leaguePoints'];
}  else {
$summonerLeagueQueueFlex = $summonerLeagueItens[0]['queueType'];
$summonerLeaguesTierFlex = $summonerLeagueItens[0]['tier'];
$summonerLeaguesRankFlex = $summonerLeagueItens[0]['rank'];
$summonerLeaguesWinsFlex = $summonerLeagueItens[0]['wins'];
$summonerLeaguesLoseFlex = $summonerLeagueItens[0]['losses'];
$summonerLeaguesPdlsFlex = $summonerLeagueItens[0]['leaguePoints'];
}}

if (isset($summonerLeagueItens[1]) == false){
$summonerLeagueItens[1]['queueType'] =  "Unranked";
}
else { if ($summonerLeagueItens[1]['queueType'] == "RANKED_SOLO_5x5") {
$summonerLeagueQueueSolo = $summonerLeagueItens[1]['queueType'];
$summonerLeaguesTierSolo = $summonerLeagueItens[1]['tier'];
$summonerLeaguesRankSolo = $summonerLeagueItens[1]['rank'];
$summonerLeaguesWinsSolo = $summonerLeagueItens[1]['wins'];
$summonerLeaguesLoseSolo = $summonerLeagueItens[1]['losses'];
$summonerLeaguesPdlsSolo = $summonerLeagueItens[1]['leaguePoints'];
}  else {
$summonerLeagueQueueFlex = $summonerLeagueItens[1]['queueType'];
$summonerLeaguesTierFlex = $summonerLeagueItens[1]['tier'];
$summonerLeaguesRankFlex = $summonerLeagueItens[1]['rank'];
$summonerLeaguesWinsFlex = $summonerLeagueItens[1]['wins'];
$summonerLeaguesLoseFlex = $summonerLeagueItens[1]['losses'];
$summonerLeaguesPdlsFlex = $summonerLeagueItens[1]['leaguePoints'];
}}*/
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="../css/style_css_sm.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>League of News - Alpha 0.3</title>
</head>
<body>

</body>
</html>
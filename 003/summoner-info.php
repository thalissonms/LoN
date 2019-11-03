<?php

 error_reporting(1);
// Informações basicas do invocador
$summonerUrl = "https://".$region.".api.riotgames.com/lol/summoner/v4/summoners/by-name/".$summonerNameForm."?api_key=".$apiKey;
$getResults = file_get_contents($summonerUrl);
$summonerItens = json_decode($getResults, true);

if (!$getResults) {$error = $error003;} else {

$summonerId =  $summonerItens['id'];
$summonerLv =  $summonerItens['summonerLevel'];
$summonerName = $summonerItens['name'];
$summonerIcoID = $summonerItens['profileIconId'];
$summonerOccount = $summonerItens['accountId'];
$summonerIco = "http://ddragon.leagueoflegends.com/cdn/".$GameLastVersion."/img/profileicon/".$summonerIcoID.".png";
	

// Informações de Liga do invocador
$summonerLeagueUrl = "https://".$region.".api.riotgames.com/lol/league/v4/positions/by-summoner/".$summonerId."?api_key=".$apiKey;
$getLeagueResults = file_get_contents($summonerLeagueUrl);
$summonerLeagueItens = json_decode($getLeagueResults, true);
// Criando Variaveis
$filaSolo = "RANKED_SOLO_5x5"; 
$filaFlex = "RANKED_FLEX_SR";
$filaTres = "RANKED_FLEX_TT";
$arrChave = array();
$arrIdent  = array();
foreach ($summonerLeagueItens as $ranked){array_push($arrChave, $ranked['queueType']);}
$soloRank = array_search($filaSolo, $arrChave);
$flexRank = array_search($filaFlex, $arrChave);
$tresRank = array_search($filaTres, $arrChave);
	

if ($summonerLeagueItens[$soloRank]['queueType'] != "RANKED_SOLO_5x5"){$soloRank = "Null";}else{
$summonerLeagueQueueSolo = $summonerLeagueItens[$soloRank]['queueType'];
$summonerLeaguesTierSolo = $summonerLeagueItens[$soloRank]['tier'];
$summonerLeaguesRankSolo = $summonerLeagueItens[$soloRank]['rank'];
$summonerLeaguesWinsSolo = $summonerLeagueItens[$soloRank]['wins'];
$summonerLeaguesLoseSolo = $summonerLeagueItens[$soloRank]['losses'];
$summonerLeaguesPdlsSolo = $summonerLeagueItens[$soloRank]['leaguePoints'];
}
if ($summonerLeagueItens[$flexRank]['queueType'] != "RANKED_FLEX_SR"){$flexRank = "Null";} else{
$summonerLeagueQueueFlex = $summonerLeagueItens[$flexRank]['queueType'];
$summonerLeaguesTierFlex = $summonerLeagueItens[$flexRank]['tier'];
$summonerLeaguesRankFlex = $summonerLeagueItens[$flexRank]['rank'];
$summonerLeaguesWinsFlex = $summonerLeagueItens[$flexRank]['wins'];
$summonerLeaguesLoseFlex = $summonerLeagueItens[$flexRank]['losses'];
$summonerLeaguesPdlsFlex = $summonerLeagueItens[$flexRank]['leaguePoints'];
}


if     ($summonerLeaguesTierSolo == 'IRON'){$colorSolo = "#778899"; $eloInvocadorSolo = "Ferro";}
elseif ($summonerLeaguesTierSolo == 'BRONZE'){$colorSolo = "#A85400"; $eloInvocadorSolo = "Bronze";}
elseif ($summonerLeaguesTierSolo == 'SILVER'){$colorSolo = "#A6B1C6"; $eloInvocadorSolo = "Prata";}
elseif ($summonerLeaguesTierSolo == 'GOLD'){$colorSolo = "#FADE4B"; $eloInvocadorSolo = "Ouro";}
elseif ($summonerLeaguesTierSolo == 'PLATINUM'){$colorSolo = "#03C272"; $eloInvocadorSolo = "Platina";}
elseif ($summonerLeaguesTierSolo == 'DIAMOND'){$colorSolo = "#0080FF"; $eloInvocadorSolo = "Diamante";}
elseif ($summonerLeaguesTierSolo == 'MASTER'){$colorSolo = "#008C69"; $eloInvocadorSolo = "Mestre";}
elseif ($summonerLeaguesTierSolo == 'CHALLENGER'){$colorSolo = "#B28500"; $eloInvocadorSolo = "Desafiante";}
elseif ($summonerLeaguesTierSolo == 'Unranked'){$colorSolo = "#00698C"; $eloInvocadorSolo = "Não Colocado";}

if     ($summonerLeaguesTierFlex == 'IRON'){$colorFlex = "#778899"; $eloInvocadorFlex = "Ferro";}
elseif ($summonerLeaguesTierFlex == 'BRONZE'){$colorFlex = "#A85400"; $eloInvocadorFlex = "Bronze";}
elseif ($summonerLeaguesTierFlex == 'SILVER'){$colorFlex = "#A6B1C6"; $eloInvocadorFlex = "Prata";}
elseif ($summonerLeaguesTierFlex == 'GOLD'){$colorFlex = "#FADE4B"; $eloInvocadorFlex = "Ouro";}
elseif ($summonerLeaguesTierFlex == 'PLATINUM'){$colorFlex = "#03C272"; $eloInvocadorFlex = "Platina";}
elseif ($summonerLeaguesTierFlex == 'DIAMOND'){$colorFlex = "#0080FF"; $eloInvocadorFlex = "Diamante";}
elseif ($summonerLeaguesTierFlex == 'MASTER'){$colorFlex = "#008C69"; $eloInvocadorFlex = "Mestre";}
elseif ($summonerLeaguesTierFlex == 'CHALLENGER'){$colorFlex = "#B28500"; $eloInvocadorFlex = "Desafiante";}
elseif ($summonerLeaguesTierFlex == 'Unranked'){$colorFlex = "#00698C"; $eloInvocadorFlex = "Não Colocado";}
}  ?> 

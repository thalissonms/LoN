<?php 
include 'sqlinject_sv.php';
$region = "br1";
$summonerNameForm = $_GET['smns'];
$apiKey = "RGAPI-c9eac3ae-73e8-4d9d-97ea-25c91385cbd7";

// Informações basicas do invocador
$summonerUrl = "https://".$region.".api.riotgames.com/lol/summoner/v3/summoners/by-name/".$summonerNameForm."?api_key=".$apiKey;
$getResults = file_get_contents($summonerUrl);
$sumonnerItens = json_decode($getResults, true);

$summonerId =  $sumonnerItens['id'];
$summonerLv =  $sumonnerItens['summonerLevel'];
$summonerName = $sumonnerItens['name'];

// Informações de Liga do invocador
$summonerLeagueUrl = "https://".$region.".api.riotgames.com/lol/league/v3/positions/by-summoner/".$summonerId."?api_key=".$apiKey;
$getLeagueResults = file_get_contents($summonerLeagueUrl);
$summonerLeagueItens = json_decode($getLeagueResults, true);
	//String 0 resultados
if (isset($summonerLeagueItens[0]['tier']) == 0 ) {
$summonerLeagueQueue0 = $summonerLeaguesTier0 = $summonerLeagueswins0 =
$summonerLeaguesLose0 = $summonerLeaguesPdls0 = $summonerLeaguesvete0 = "INVOCADOR SEM LIGA";
$summonerLeaguesRank0 = "";
	} else {
$summonerLeagueQueue0 = $summonerLeagueItens[0]['queueType'];
$summonerLeaguesTier0 = $summonerLeagueItens[0]['tier'];
$summonerLeaguesRank0 = $summonerLeagueItens[0]['rank'];
$summonerLeaguesWins0 = $summonerLeagueItens[0]['wins'];
$summonerLeaguesLose0 = $summonerLeagueItens[0]['losses'];
$summonerLeaguesPdls0 = $summonerLeagueItens[0]['leaguePoints'];

if ($summonerLeagueItens[0]['veteran'] == 'false'){
	$summonerLeaguesvete0 = "Já jogou mais de 100 partidas nessa liga";} else 
   {$summonerLeaguesvete0 = "Ingressou a pouco tempo nessa liga";}
}
	//String 1 resultados
if (isset($summonerLeagueItens[1]['tier']) == 0 ) {
$summonerLeagueQueue1 = $summonerLeaguesTier1 = $summonerLeagueswins1 =
$summonerLeaguesLose1 = $summonerLeaguesPdls1 = $summonerLeaguesvete1 = "INVOCADOR SEM LIGA";
$summonerLeaguesRank1 = "";
	} else {
	
$summonerLeagueQueue1 = $summonerLeagueItens[1]['queueType'];
$summonerLeaguesTier1 = $summonerLeagueItens[1]['tier'];
$summonerLeaguesRank1 = $summonerLeagueItens[1]['rank'];
$summonerLeaguesWins1 = $summonerLeagueItens[1]['wins'];
$summonerLeaguesLose1 = $summonerLeagueItens[1]['losses'];
$summonerLeaguesPdls1 = $summonerLeagueItens[1]['leaguePoints'];

if ($summonerLeagueItens[1]['veteran'] == 'false'){
	$summonerLeaguesvete1 = "Já jogou mais de 100 partidas nessa liga";} else 
   {$summonerLeaguesvete1 = "Ingressou a pouco tempo nessa liga";}
}


// >>>>>> Incluindo dados no banco de dados <<<<<<
$veriSummonerSolo = mysql_query('SELECT * FROM `summonerleaguesolo` WHERE `summonid` ="'.$summonerId.'"');
$veriSummonerFlex = mysql_query('SELECT * FROM `summonerleagueflex` WHERE `summonid` ="'.$summonerId.'"');

if ($summonerLeagueItens[1]['queueType'] == 'RANKED_SOLO_5x5'){
	
if (mysql_num_rows($veriSummonerFlex) == 1) {echo "Ja cadastrado na flex";}
else {	
$sql = mysql_query('INSERT INTO `summonerleagueflex` (`summonid`, `summoname`, `summoqueue`, `summotier`, `summorank`, `summowins`, `summolosses`, `summopdl`, `summovet`) VALUES ("'.$summonerId.'", "'.$summonerName.'", "'.$summonerLeagueQueue0.'", "'.$summonerLeaguesTier0.'", "'.$summonerLeaguesRank0.'", "'.$summonerLeaguesWins0.'", "'.$summonerLeaguesLose0.'", "'.$summonerLeaguesPdls0.'",  "'.$summonerLeaguesvete0.'")');}

if (mysql_num_rows($veriSummonerSolo) == 1) {echo "Ja cadastrado na solo";}
else {
$sql = mysql_query('INSERT INTO `summonerleaguesolo` (`summonid`, `summoname`, `summoqueue`, `summotier`, `summorank`, `summowins`, `summolosses`, `summopdl`, `summovet`) VALUES ("'.$summonerId.'", "'.$summonerName.'", "'.$summonerLeagueQueue1.'", "'.$summonerLeaguesTier1.'", "'.$summonerLeaguesRank1.'", "'.$summonerLeaguesWins1.'", "'.$summonerLeaguesLose1.'", "'.$summonerLeaguesPdls1.'", "'.$summonerLeaguesvete1.'")');}
} else {
	
if (mysql_num_rows($veriSummonerSolo) == 1) {echo "Ja cadastrado na solo";}
else {
$sql = mysql_query('INSERT INTO `summonerleaguesolo` (`summonid`, `summoname`, `summoqueue`, `summotier`, `summorank`, `summowins`, `summolosses`, `summopdl`, `summovet`) VALUES ("'.$summonerId.'", "'.$summonerName.'", "'.$summonerLeagueQueue0.'", "'.$summonerLeaguesTier0.'", "'.$summonerLeaguesRank0.'", "'.$summonerLeaguesWins0.'", "'.$summonerLeaguesLose0.'", "'.$summonerLeaguesPdls0.'", "'.$summonerLeaguesvete0.'")');}

if (mysql_num_rows($veriSummonerFlex) == 1) {echo "Ja cadastrado na flex";}
else {	
$sql = mysql_query('INSERT INTO `summonerleagueflex` (`summonid`, `summoname`, `summoqueue`, `summotier`, `summorank`, `summowins`, `summolosses`, `summopdl`, `summovet`) VALUES ("'.$summonerId.'", "'.$summonerName.'", "'.$summonerLeagueQueue1.'", "'.$summonerLeaguesTier1.'", "'.$summonerLeaguesRank1.'", "'.$summonerLeaguesWins1.'", "'.$summonerLeaguesLose1.'", "'.$summonerLeaguesPdls1.'", "'.$summonerLeaguesvete1.'")');}		
}


?>











<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
echo "<div id='ligas' style='background:#B4B; height:400px'><h1 style='color:#00ccff; font-family:Arial; text-align:center;'> Valores da String 0 de Liga do Invocador&nbsp".$summonerName." </h1> 
<b>Summoner String 0 Fila:&nbsp</b>".$summonerLeagueQueue0."<br>
<b>Summoner String 0 Liga:&nbsp</b>".$summonerLeaguesTier0."&nbsp".$summonerLeaguesRank0."<br>
<b>Summoner String 0 Vitorias:&nbsp</b>".$summonerLeaguesWins0."<br>
<b>Summoner String 0 Derrotas:&nbsp</b>".$summonerLeaguesLose0."<br>
<b>Summoner String 0 Pontos de Liga:&nbsp</b>".$summonerLeaguesPdls0."<br>
<b>Summoner String 0 Veterano/Novato:&nbsp</b>".$summonerLeaguesvete0."

<br><br><h1 style='color:#00ccff; font-family:Arial; text-align:center;'> Valores da String 1 Liga do Invocador&nbsp".$summonerName." </h1> 
<b>Summoner String 1 Fila:&nbsp</b>".$summonerLeagueQueue1."<br>
<b>Summoner String 1 Liga:&nbsp</b>".$summonerLeaguesTier1."&nbsp".$summonerLeaguesRank1."<br>
<b>Summoner String 1 Vitorias:&nbsp</b>".$summonerLeaguesWins1."<br>
<b>Summoner String 1 Derrotas:&nbsp</b>".$summonerLeaguesLose1."<br>
<b>Summoner String 1 Pontos de Liga:&nbsp</b>".$summonerLeaguesPdls1."<br>
<b>Summoner String 1 Veterano/Novato:&nbsp</b>".$summonerLeaguesvete1."
</div>";

function CheckString0($summonerLeagueQueue0 = 'RANKED_FLEX_SR'){
	print "Filtro 1 ativado";
	}
CheckString0();
?>
<body>
</body>
</html>
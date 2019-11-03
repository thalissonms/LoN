<?php 
include 'conf-global.php';
include 'summoner-info.php';
$summonerNameForm = 'ForLove';
$region = 'BR1';

// Informações basicas do invocador
$summonerUrl = "https://".$region.".api.riotgames.com/lol/summoner/v4/summoners/by-name/".$summonerNameForm."?api_key=".$apiKey;
$getResults = file_get_contents($summonerUrl);
$summonerItens = json_decode($getResults, true);


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>TESTES API V4</title>
</head>

<body>
<?php echo $summonerLeaguesTierFlex; ?>

</body>
</html>
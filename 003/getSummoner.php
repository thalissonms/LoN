<?php 
include 'basic-info.php'
$summonerUrl = "https://".$region.".api.riotgames.com/lol/summoner/v4/summoners/by-name/".$summonerNameForm."?api_key=".$apiKey;
$getResults = file_get_contents($summonerUrl);
$summonerItens = json_decode($getResults, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style>
    body {
      background:#000;
    }
  </style>
  <title>Document</title>
</head>
<body>

</body>
</html>

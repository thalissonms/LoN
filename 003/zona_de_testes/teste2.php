<?php
 
$region = "br1"; //https://developer.riotgames.com/regional-endpoints.html
$summonerName = $_GET['smns'];
$apiKey = "RGAPI-8665500e-5b08-4d3b-8515-668568a9c7e2";
 
// PART I. OBTAIN SUMMONERID
 
// construct url to grab the summonerId
$summonerURL = "https://". $region . ".api.riotgames.com/lol/summoner/v3/summoners/by-name/". $summonerName ."?api_key=". $apiKey;
 
// grab the results from the url, this will be in a JSON format
$summonerResult = file_get_contents($summonerURL);
 
// Take the result (JSON encoded string) and converts it into a PHP variable. 
$summonerDecoded = json_decode($summonerResult, true);
 
// to output the associative arrays uncomment the next 2 lines
// echo "<pre>"; // this line will make your array more readable
// print_r($summonerDecoded); //out put your array
 
 
 
// PART II. GET RANK INFORMATION
 
$summonerId = $summonerDecoded['id'];
 echo $summonerId;
// construct url to grab the rank information
$rankInfoURL = "https://". $region . ".api.riotgames.com/lol/league/v3/positions/by-summoner/". $summonerId ."?api_key=". $apiKey;
 
// grab the results from the url, this will be in a JSON format
$rankInfoResult = file_get_contents($rankInfoURL);
 
// Take the result (JSON encoded string) and converts it into a PHP variable. 
$rankInfoDecoded = json_decode($rankInfoResult, true);
 
// to output the associative arrays uncomment the next 2 lines
// echo "<pre>"; // this line will make your array more readable
// print_r($rankInfoDecoded); //out put your array
 
 
// PART III. Transform the data into information
 
if (isset($rankInfoDecoded[0]['tier']) == false) {
$rank = "";
$tier = "UNRANKED";
} else {
$tier = $rankInfoDecoded[0]['tier'];
$rank = $rankInfoDecoded[0]['rank'];		
		
}
echo $rankInfoDecoded[0]['queueType'];
  $seueloimg = "<img src='img/tiers/".$tier."_".$rank.".png'>"; 
//echo "<a style='color:#F00;'> ". $summonerName ." is stuck in ". $seuelo ." ". $rank ." :P</a>"; // just kidding ofcourse

$elo5x5 = $rankInfoDecoded['queueType'];


?>

<style>
#elo {
	width:600px;
	height:600px;
	position:absolute;
	left:70%;
	margin-left:-600px;
}
#elo h1 {
	font-family:Arial, Helvetica, sans-serif;
	color:#0C9;
	text-align:center;
}
#elo h2 {
	font-family:Arial, Helvetica, sans-serif;
	color:#699;
	text-align:center;
}
#elo img {
	margin-left:200px;!important	
}
</style>
<html style="background:;">
<head>
</head>
<body>
<div id="elo">
<h1><?php echo "O Invocador <font color='#00ccff'>".$summonerName."</font> está atualmente no elo:" ?></h1>
<?php echo $seueloimg ?>
<h2><?php echo $tier." ". $rank ?></h2>
</div>

</body>
</html>
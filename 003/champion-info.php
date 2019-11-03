<?php 
//include '../002/alpha_conect.php';
$masteryChampUrl = "https://".$region.".api.riotgames.com/lol/champion-mastery/v4/champion-masteries/by-summoner/".$summonerId."?api_key=".$apiKey;
$masteryChampGet = file_get_contents($masteryChampUrl);
$masteryChampJson = json_decode($masteryChampGet, true);
$champKey0 = $masteryChampJson[0]['championId'];
$champKey1 = $masteryChampJson[1]['championId'];
$champKey2 = $masteryChampJson[2]['championId']; 

$url = 'http://ddragon.leagueoflegends.com/cdn/'.$GameLastVersion.'/data/en_US/champion.json';
$getContents = file_get_contents($url);
$decode = json_decode($getContents);
$arrKey = array();
$arrId  = array();

if (!$champKey0) {

} else { 
//Pegar a KEY do campe�o e transformar em ID
foreach ($decode->data as $itemKey){array_push($arrKey, $itemKey->key);}
$champId0 = array_search($champKey0, $arrKey);
$champId1 = array_search($champKey1, $arrKey);
$champId2 = array_search($champKey2, $arrKey);
foreach ($decode->data as $itemId){array_push($arrId, $itemId->id);}
$champName0 = str_replace(' ','', $arrId[$champId0]);
$champName1 = str_replace(' ','', $arrId[$champId1]);
$champName2 = str_replace(' ','', $arrId[$champId2]);
// Maestria do invocador
$champImg0 = "http://ddragon.leagueoflegends.com/cdn/".$GameLastVersion."/img/champion/".$champName0.".png";
$champImg1 = "http://ddragon.leagueoflegends.com/cdn/".$GameLastVersion."/img/champion/".$champName1.".png";
$champImg2 = "http://ddragon.leagueoflegends.com/cdn/".$GameLastVersion."/img/champion/".$champName2.".png";
$champLv0 = $masteryChampJson[0]['championLevel'];
$champLv1 = $masteryChampJson[1]['championLevel'];
$champLv2 = $masteryChampJson[2]['championLevel']; 
$champPoints0 = number_format($masteryChampJson[0]['championPoints'],0,',','.');
$champPoints1 = number_format($masteryChampJson[1]['championPoints'],0,',','.');
$champPoints2 = number_format($masteryChampJson[2]['championPoints'],0,',','.');
}

?>

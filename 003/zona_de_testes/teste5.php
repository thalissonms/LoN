<?php 

include 'sqlinject_sv.php';
$url = 'http://ddragon.leagueoflegends.com/cdn/'.$GameLastVersion.'/data/pt_BR/champion.json';
$getContents = file_get_contents($url);
$decode = json_decode($getContents);
$arrKey = array();
$arrId  = array(); 
if (!$champKey) {$chmapKey = NULL; echo "Identificação do campeão não preenchida"; } else { 
//Pegar a KEY do campeão e transformar em ID
foreach ($decode->data as $itemKey){array_push($arrKey, $itemKey->key);}
$champId = array_search($champKey, $arrKey);
foreach ($decode->data as $itemId){array_push($arrId, $itemId->name);}
$champName = $arrId[$champId];
echo "<p style='font-family:Arial; font-size:25px; text-align:center'>KEY:".$champKey."<br/>ID&nbsp;:".$champId."<br/>Name:&nbsp;".$champName."</p>";}
?>

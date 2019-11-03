<?php 
include '../003/conf-global.php';
$allchampurl = 'http://ddragon.leagueoflegends.com/cdn/'.$GameLastVersion.'/data/'.$idioma.'/champion.json';
$allchampget = file_get_contents($allchampurl);
$allchampdecode = json_decode($allchampget);
for ($i=0;$i<10;$i++){
$participant = $champPacote[$i];
$getchampId = $participant;
$champKey[$i] = array();
foreach ($allchampdecode->data as $itens[$i]){array_push($champKey[$i], $itens[$i]->key);}
$champAll[$i] = array_search($getchampId, $champKey[$i]);

$champId = array();
foreach ($allchampdecode->data as $names[$i]){array_push($champId, $names[$i]->id);}
$champName[$i] = $champId[$champAll[$i]]; 
}

?>
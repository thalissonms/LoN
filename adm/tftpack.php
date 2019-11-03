<?php 
 ini_set('default_charset','UTF-8');
// Organizando os dados em arrays
$compName = $_GET['compName'];

for ($a = 0; $a < 8; $a++){
	
	$champ[$a] = $_GET['champ'.$a]; 
	$itemNum1[$a] = $_GET['item1Num'.$a];
	$itemNum2[$a] = $_GET['item2Num'.$a];
	$itemNum3[$a] = $_GET['item3Num'.$a];

$champFor[$a] = array('name' => $champ[$a], 'itens' => array($itemNum1[$a], $itemNum2[$a], $itemNum3[$a]));

$compPack = array('compName' => $compName, 'data' => array($champFor[0], $champFor[1], $champFor[2], $champFor[3], $champFor[4], $champFor[5], $champFor[6], $champFor[7]));
	echo $name;
}
$encode = json_encode($compPack);
$decode = json_decode($encode, true);

file_put_contents('../../TFT/data/json/comp.json',",".$encode."\n", FILE_APPEND);

?>

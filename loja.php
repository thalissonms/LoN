<?php
$prodId = $_GET['id'];

$url = "http://localhost/localization.json";
$getContents = file_get_contents($url);
$decode = json_decode($getContents);
$arrKey = array();
$arrId  = array();

foreach ($decode->tabelaPreço as $itemKey){array_push($arrKey, $itemKey->id);}
$item = array_search($prodId, $arrKey);
foreach ($decode->tabelaPreço as $itemId){array_push($arrId, $itemId);}
$prodId = str_replace(' ','', $arrId);

echo json_encode($arrId[$_GET['id']])
?>
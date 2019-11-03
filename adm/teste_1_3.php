<?php
$name1 = $_GET['smns'];
$region1 = $_GET['region'];
$sql_get_basic = "select * from summonerprimaryinfo where inv_name_006 = '$name1' and inv_rg_006 = '$region1'";
$sql_query_basic = mysqli_query($mysql_db_select_geral, $sql_get_basic);
$sql_num_basic = mysqli_num_rows($sql_query_basic);
$sql_fetch_basic = mysqli_fetch_array($sql_query_basic);

$sql_get_solo = "select * from summonerleaguesolo where summoname = '$name1' and summonid = '$sql_fetch_basic[3]'";
$sql_query_solo = mysqli_query($mysql_db_select_geral, $sql_get_solo);
$sql_fetch_solo = mysqli_fetch_array($sql_query_solo);

$sql_get_flex = "select * from summonerleagueflex where summoname = '$name1' and summonid = '$sql_fetch_basic[3]'";
$sql_query_flex = mysqli_query($mysql_db_select_geral, $sql_get_flex);
$sql_fetch_flex = mysqli_fetch_array($sql_query_flex);




$nomeInvocador   = $sql_fetch_basic[1];
$idInvocador     = $sql_fetch_basic[2];
$idConta 	     = $sql_fetch_basic[3];
$idIcone 	     = $sql_fetch_basic[4];
$lvInvocador     = $sql_fetch_basic[5];
$regiaoInvocador = $sql_fetch_basic[6];

$eloSoloInvocador	= $sql_fetch_solo[4];
$rankSoloInvocador   = $sql_fetch_solo[5];
$vitSoloInvocador	= $sql_fetch_solo[6];
$derSoloInvocador	= $sql_fetch_solo[7];
$pdlSoloInvocador	= $sql_fetch_solo[8];
$vetSoloInvocador	= $sql_fetch_solo[9];

$eloFlexInvocador	= $sql_fetch_flex[4];
$rankFlexInvocador   = $sql_fetch_flex[5];
$vitFlexInvocador	= $sql_fetch_flex[6];
$derFlexInvocador	= $sql_fetch_flex[7];
$pdlFlexInvocador	= $sql_fetch_flex[8];
$vetFlexInvocador	= $sql_fetch_flex[9];



$pack = array('nome'=>$nomeInvocador, 'idInv'=>$idInvocador, 'idConta'=>$idConta, 'idIco'=>$idIcone, 'lv'=>$lvInvocador, 'rg'=>$regiaoInvocador, 'eloSolo'=>$eloSoloInvocador, 'rankSolo'=>$rankSoloInvocador, 'vitSolo'=>$vitSoloInvocador, 'derSolo'=>$derSoloInvocador, 'pdlSolo'=>$pdlSoloInvocador, 'vetSolo'=>$vetSoloInvocador, 'eloFlex'=>$eloFlexInvocador, 'rankFlex'=>$rankFlexInvocador, 'vitFlex'=>$vitFlexInvocador, 'derFlex'=>$derFlexInvocador, 'pdlFlex'=>$pdlFlexInvocador, 'vetFlex'=>$vetFlexInvocador, 'msgW'=>$mensageWait);
echo $ajaxSend = json_encode($pack);
?>
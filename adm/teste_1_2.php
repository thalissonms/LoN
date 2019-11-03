<?php /* Començando a registrar os dados no servidor my SQL */
include '../003/conf-global.php';
include '../002/alpha_conect.php';
include '../003/summoner-info.php';
include '../003/champion-info.php';

$mensageWait = "Dados atualizados/gravados com sucesso!";

$sql_date_ver = "select * from summonerleaguesolo where summonid = '$summonerOccount'";
$query_data_ver = mysqli_query($mysql_db_select_geral, $sql_date_ver);
$busca_data_ver = mysqli_fetch_array($query_data_ver);
$row_data_ver = mysqli_num_rows($query_data_ver);
$data1 = $busca_data_ver['summo_last_update'] - strtotime(date('d-m-Y H:i:s'));
$data3 = $data1/60;


$data_last_update = date('d-m-Y H:i:s', strtotime('+2 minutes')); //Criar uma variavel para esta função quando fazer adminArea
$data_last_update_str = strtotime($data_last_update);

$solo_vet = $summonerLeagueItens[$soloRank]['veteran'];
$flex_vet = "OK?";
/* AQUI TERMINA AS CONFIGURAÇÕES INICIAIS PARA O CODIGO FUNCIONAR PERFEITO///////////////////////////////////////////////////////////////////////////////////////

/* ADICIONANDO INFORMAÇÕES BASICAS SOBRE O INVOCARDOR */
$sql_verifica = "select * from summonerprimaryinfo where inv_occount_006 = '$summonerOccount' ";//selecionar tudo da tabela quando login for igual ao $login
$query_verifica = mysqli_query($mysql_db_select_geral, $sql_verifica); //executa o query
$busca_verifica = mysqli_num_rows($query_verifica); //pega o total das linhas encontradas

if (($busca_verifica)=='0'){
$sql_basic_info_by_summoner = "INSERT INTO summonerprimaryinfo (inv_name_006,inv_id_006,inv_occount_006,inv_icoid_006,inv_lv_006,inv_rg_006) VALUES ('$summonerName', '$summonerId', '$summonerOccount', '$summonerIcoID', '$summonerLv', '$region')";
$insert_basic_info = mysqli_query($mysql_db_select_geral, $sql_basic_info_by_summoner);}

/* ADICIONANDO INFORMAÇÕES SOBRE A FILA SOLO DO JOGADOR */


 //ADICIONAR SE NÃO HOUVER REGISTRO ANTERIOR
	// ADICIONAR INFORMAÇÕES SOBRE FILA SOLO
if ($row_data_ver == '0'){
$sql_solo_info_by_summoner = "INSERT INTO summonerleaguesolo (summonid, summoname, summoqueue, summotier, summorank, summowins, summolosses, summopdl, summovet, summo_last_update) VALUES ('$summonerOccount', '$summonerName', '$summonerLeagueQueueSolo', '$summonerLeaguesTierSolo', '$summonerLeaguesRankSolo', '$summonerLeaguesWinsSolo', '$summonerLeaguesLoseSolo', '$summonerLeaguesPdlsSolo', '$solo_vet', '$data_last_update_str') ";
$insert_solo_info = mysqli_query($mysql_db_select_geral, $sql_solo_info_by_summoner) or die(mysqli_error($mysql_db_select_geral));
	// ADICIONANDO INFORMAÇÕES SOBRE FILA FLEX 5X5
$sql_flex_info_by_summoner = "INSERT INTO summonerleagueflex (summonid, summoname, summoqueue, summotier, summorank, summowins, summolosses, summopdl, summovet) VALUES ('$summonerOccount', '$summonerName', '$summonerLeagueQueueFlex', '$summonerLeaguesTierFlex', '$summonerLeaguesRankFlex', '$summonerLeaguesWinsFlex', '$summonerLeaguesLoseFlex', '$summonerLeaguesPdlsFlex', '$flex_vet') ";
$insert_flex_info = mysqli_query($mysql_db_select_geral, $sql_flex_info_by_summoner) or die(mysqli_error($mysql_db_select_geral));
	// ADICIONAR INFORMAÇÕES SOBRE MASTERY CHAMPIONS
$sql_champ_mastery_name = "INSERT INTO summonerchampmasterynames (inv_champ_01, inv_champ_02, inv_champ_03, inv_occount_id) VALUES ('$champName0', '$champName1', '$champName2', '$summonerOccount')";
$sql_champ_mastery_lv = "INSERT INTO summonerchampmasterylv (inv_mastery_01, inv_mastery_02, inv_mastery_03, inv_occount_id) VALUES ('$champLv0', '$champLv1', '$champLv2', '$summonerOccount')";
$sql_champ_mastery_pts = "INSERT INTO summonerchampmasterypts (	inv_mastery_01, inv_mastery_02, inv_mastery_03, inv_occount_id) VALUES ('$champPoints0', '$champPoints1', '$champPoints2', '$summonerOccount')";
$sql_query_mastery_name = mysqli_query($mysql_db_select_geral, $sql_champ_mastery_name) or die(mysqli_error($mysql_db_select_geral));
$sql_query_mastery_lv = mysqli_query($mysql_db_select_geral, $sql_champ_mastery_lv) or die(mysqli_error($mysql_db_select_geral));
$sql_query_mastery_pts = mysqli_query($mysql_db_select_geral, $sql_champ_mastery_pts) or die(mysqli_error($mysql_db_select_geral));
}
 //ATUALIZAR DE 20 EM 20MIN AS INFORMAÇÕES
	//ATUALIZAR INFORMAÇÕES SOBRE A FILA SOLO
if ($busca_data_ver['summo_last_update'] < strtotime(date('d-m-Y H:i:s'))) {
$update_fila_solo = "UPDATE summonerleaguesolo SET summotier='$summonerLeaguesTierSolo', summorank='$summonerLeaguesRankSolo', summowins='$summonerLeaguesWinsSolo', summolosses='$summonerLeaguesLoseSolo', summopdl='$summonerLeaguesPdlsSolo', summovet='$solo_vet', summo_last_update='$data_last_update_str' WHERE summonid='$summonerOccount'";
$query_update_solo = mysqli_query($mysql_db_select_geral, $update_fila_solo) or die(mysqli_error($mysql_db_select_geral)); 
	//ATUALIZAR INFORMAÇÕES SOBRE A FILA FLEX
$update_fila_flex = "UPDATE summonerleagueflex SET summotier='$summonerLeaguesTierFlex', summorank='$summonerLeaguesRankFlex', summowins='$summonerLeaguesWinsFlex', summolosses='$summonerLeaguesLoseFlex', summopdl='$summonerLeaguesPdlsFlex', summovet='$flex_vet' WHERE summonid='$summonerOccount'";
$query_update_flex = mysqli_query($mysql_db_select_geral, $update_fila_flex) or die(mysqli_error($mysql_db_select_geral)); 
	//ATUALIZAR NICK E LV
$sql_update_basic = "UPDATE summonerprimaryinfo SET inv_name_006='$summonerName', inv_lv_006='$summonerLv', inv_icoid_006='$summonerIcoID' WHERE 	inv_occount_006='$summonerOccount'";
$sql_query_update_basic = mysqli_query($mysql_db_select_geral, $sql_update_basic) or die (mysqli_error($mysql_db_select_geral));
	//ATUALIZAR INFORMAÇÕES SOBRE MASTERY CHAMP
$sql_update_mastary_name = "UPDATE summonerchampmasterynames SET inv_champ_01='$champName0', inv_champ_02='$champName1', inv_champ_03='$champName2' WHERE inv_occount_id='$summonerOccount'";
$sql_update_mastary_lv = "UPDATE summonerchampmasterylv SET inv_mastery_01='$champLv0', inv_mastery_02='$champLv1', inv_mastery_03='$champLv2' WHERE inv_occount_id='$summonerOccount'";
$sql_update_mastary_pts = "UPDATE summonerchampmasterypts SET inv_mastery_01='$champPoints0', inv_mastery_02='$champPoints1', inv_mastery_03='$champPoints2' WHERE inv_occount_id='$summonerOccount'";
$sql_query_update_name = mysqli_query($mysql_db_select_geral, $sql_update_mastary_name) or die (mysqli_error($mysql_db_select_geral));
$sql_query_update_lv = mysqli_query($mysql_db_select_geral, $sql_update_mastary_lv) or die (mysqli_error($mysql_db_select_geral));
$sql_query_update_pts = mysqli_query($mysql_db_select_geral, $sql_update_mastary_pts) or die (mysqli_error($mysql_db_select_geral));
} else {$mensageWait = "Você atualizou recentemente o seu perfil, espere alguns minutos para fazer novamente!";}


include 'teste_1_3.php';

?>


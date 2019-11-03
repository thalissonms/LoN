<?php

$match_info_url = "https://br1.api.riotgames.com/lol/match/v3/matches/".$game_id."?api_key=".$apiKey;
$match_info_contents = file_get_contents($match_info_url);
$match_info_decode = json_decode($match_info_contents, true);
/* WIN */

if ($match_info_decode['teams'][0]['win'] == 'Win') {$win = "100";} else {$win = "200";}
if ($win == "100") {$team_win = "BLUE";} else {$team_win = "RED";}
/* MATCH INFO */
$match_id = $match_info_decode['gameId'];
$match_game_version = $match_info_decode['gameVersion'];
$match_map_id = $match_info_decode['mapId'];
$match_game_type = $match_info_decode['gameType'];
$match_game_mode = $match_info_decode['gameMode'];
$match_duration = gmdate("i:s", $match_info_decode['gameDuration']);
$match_region = $match_info_decode['platformId'];
$match_game_win = $win;

/* INVOCADOR INFO */ 
	// -- INVOCADOR 01 INFO
for ($i=0; $i<10; $i++){

$player = $match_info_decode['participantIdentities'][$i]['player'];
$participant = $match_info_decode['participants'][$i];
$participantStats = $participant['stats'];
	$inv_name[$i] = $player['summonerName'];
	$inv_occount[$i] = $player['accountId'];
	$inv_ico[$i] = $player['profileIcon'];
	$inv_history_[$i] = $player['summonerName'];
	$inv_lane[$i] = $participant['timeline']['lane'];
	$inv_position[$i] = $participantStats['participantId'];
	$inv_champion[$i] = $participant['championId'];
	$inv_last_tier[$i] = $participant['highestAchievedSeasonTier'];
		// -- INVOCADOR ITENS
		$inv_bag_1[$i] = $participantStats['item0'];
		$inv_bag_2[$i] = $participantStats['item1'];
		$inv_bag_3[$i] = $participantStats['item2'];
		$inv_bag_4[$i] = $participantStats['item3'];
		$inv_bag_5[$i] = $participantStats['item4'];
		$inv_bag_6[$i] = $participantStats['item5'];
		$inv_bag_7[$i] = $participantStats['item6']; // WARD
		// -- INVOCADOR KDA / LV / GOLD / FARM
		$inv_gold[$i] = $participantStats['goldEarned'];
		$inv_lv[$i] = $participantStats['champLevel'];
		$inv_kills[$i] = $participantStats['kills'];
		$inv_deaths[$i] = $participantStats['deaths'];
		$inv_assists[$i] = $participantStats['assists'];
		$inv_minions[$i] = $participantStats['totalMinionsKilled'];
}
$sql_match_list = "INSERT INTO infomatchlinst (match_game_id, match_game_version, match_game_map, match_game_type, match_game_mode, match_game_duration, match_game_region, match_game_win) VALUES ('$match_id', '$match_game_version', '$match_map_id', '$match_game_type', '$match_game_mode', '$match_duration', '$match_region', '$match_game_win')";
$sql_match_info = "INSERT INTO matchfullinfo (match_game_id, match_info_complet) VALUES ('$match_id', '$match_info_contents')";
$sql_query_match = mysql_query($sql_match_list) or die(mysql_error());
$sql_query_full = mysql_query($sql_match_info) or die(mysql_error())

?>
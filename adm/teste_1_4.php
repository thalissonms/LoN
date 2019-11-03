<?php /*
include '../002/alpha_conect.php';
include '../003/conf-global.php';
$game_id = $_GET['gameid'];
$sql_get_match = "SELECT * FROM matchfullinfo WHERE match_game_id='$game_id'";
$sql_get_match_query = mysql_query($sql_get_match);
$sql_rows_match = mysql_num_rows($sql_get_match_query);
if ($sql_rows_match == "0"){include 'teste_1_5.php';} else {include 'teste_1_6.php';}
include 'teste_1_0.php'; 
echo $allchampurl;*/
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../009/fonts.css" />
<style>
* {margin:0; padding:0;}
html {background:url(../008/background-vi.jpg); background-size:cover; background-position:center; background-attachment:fixed; background-repeat:no-repeat;}
body {background:linear-gradient(rgba(3,3,3,0.90), rgba(5,5,5,0.95), rgba(6,6,6,1)); height:1050px;}
h1 {font-family:Beaufort; color:#BDAA71; font-size:48px; padding-top:40px; text-align:center; text-shadow:0.2px 0.2px 0px #A65414;}
#central {width:90%; height:700px; position:absolute; left:5%; top:120px; background-color:#03232A; border:1px #195657 solid;}
#head {width:80%; height:20px; margin-left:10%; margin-top:76px; font-size:18px; font-family:dobegaramond; color:#BEB087; text-align:center;}
.point {opacity:0.9; width:5px; height:5px; margin-bottom:3px; margin-left:5%; margin-right:5%;}
</style>
</head>
<body>
<h1>DETALHES DA PARTIDA</h1>
<div id="central">
<div id="head";>
<font>Summoner's Rift<img src="../007/point.png" class="point"  />Ranqueada Flexível<img src="../007/point.png" class="point"  />42:15<img src="../007/point.png" class="point"  />30/10/2017</font>
</div>
<hr color="#94724D" size="0.1" style="box-shadow:0.1px 0.1px 0px #960; width:80%; position:absolute; top:100px; left:10%; opacity:0.5;" />	
</div>
</body>
</html>


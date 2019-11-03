<?php 
$jsonChampFile = '../../TFT/data/json/championsNum.json';
$jsonChampGet  = file_get_contents($jsonChampFile);
$jsonChamp 	   = json_decode($jsonChampGet, true);
$champCount    = count($jsonChamp);

$fileItens = '../../TFT/data/json/itens.json';
$getItens = file_get_contents($fileItens);
$decodeItens = json_decode($getItens, true);
$countItens = count($decodeItens);
?>
<!doctype html>
<html>
<link rel="stylesheet" type="text/css" href="css/slyle-index.css" />
<link rel="stylesheet" type="text/css" href="../009/fonts.css" />
<script type="text/javascript" src="../004/jquery-1.12.3.min.js"></script>
<script type="text/javascript" src="jquery/ajax-index.js"></script>
<script type="text/javascript" src="jquery/script-index.js"></script>
<head>
<meta charset="utf-8">
<title>ADM V 0.4b</title>
</head>
<body>
<span id="champCount" name="<?php echo $champCount; ?>"></span>
<span id="itensCount" name="<?php echo $countItens  ?>"></span>
	<h1 id="title">Admin area</h1>
	<div id="body">
	  <div id="primeira-faixa">
		<p class="1"></p>
		
		<div id="files-links">
			<h2 class="title-files-links" id="arquivoDown">Arquivo +</h2>
			<h2 class="title-files-links" id="arquivoUp" style="display:none;">Arquivo -</h2>
			<ul id="arquivos-ul">
				<a href="../index.html" target="_blank"><li><img src="../007/file-ico.png"><p>index.html</p></li></a>
				<a href="../summoner.php?smns=ForLove&region=BR1" target="_blank"><li><img src="../007/file-ico.png"><p>summoner.php</p></li></a>
				<a href="../003/v4.php" target="_blank"><li><img src="../007/file-ico.png"><p>v4.php</p></li></a>
				<a href="informacao_total.php" target="_blank"><li><img src="../007/file-ico.png"><p>informação_total.php</p></li></a>
				<a href="teste_1_4.php" target="_blank"><li><img src="../007/file-ico.png"><p>teste_1_4.php</p></li></a>
				<a href="../../phpmyadmin" target="_blank"><li><img src="../007/file-ico.png"><p>phpMyAdmin</p></li></a>
				<a href="query/logs-query.php" target="_blank"><li><img src="../007/file-ico.png"><p>logs-query.php</p></li></a>
				<a href="teste_1_2.php?smns='ForLove'&region='BR1'" target="_blank"><li><img src="../007/file-ico.png"><p>teste_1_2.php</p></li></a>
			</ul>
		</div>
	
	<div id="logs-site">
		<h2 class="title-logs-site" id="logsDown">Logs de testes +</h2>
		<h2 class="title-logs-site" id="logsUp" style="display:none;">Logs de testes -</h2>
		<ul id="logs-ul">
			<li><img id="log-1" src="../007/bol-logs.png"><p>Servidor MySQL</p></li>
			<li><img id="log-2" src="../007/bol-logs.png"><p>Servidor DDragon</p></li>
			<li><img id="log-3" src="../007/bol-logs.png"><p>Servidor da API Riot</p></li>
			<li><img id="log-4" src="../007/bol-logs.png"><p>Servidor do LoL</p></li>
			<li><img id="log-5" src="../007/bol-logs.png"><p>Vazio</p></li>
			<li><img id="log-6" src="../007/bol-logs.png"><p>Vazio</p></li>
			<li><img id="log-7" src="../007/bol-logs.png"><p>Vazio</p></li>
			<li class="log-teste" style="background-image:linear-gradient(#FF0, #EE0, #FF0);"><h3 id="executar-teste">Executar testes</h3></li>
		</ul>
		
		  </div>
	</div>
	<div id="tft-add-comp">
	<form id="compcreate" action="" onSubmit="comp(); return false;">	
	<h2 class="title-tft-add-comp" id="tft-add-champDown">Adicionar nova comp +</h2>
	<h2 class="title-tft-add-comp" id="tft-add-champUp" style="display:none;">Adicionar nova comp -</h2>
		<div id="compName"><h2>Nome da comp:</h2><input name="compName" value="" /></div>
	<div id="comp-all">
	
		<?php for($i = 0; $i < 8; $i++){ ?>
		
		<div class="comp" id="champ<?php echo $i; ?>" name="<?php echo $i ?>" >
		<img class="imgTier" src="../../TFT/img/ui/teste.png">
		<img class="imgChamp" id="imagemChampNum<?php echo $i; ?>" src="../../TFT/img/splash/tft_hud_texture_atlas.png" >
		<div class="itensComp">
			<img class="imagemNum" id="1Num<?php echo $i; ?>" src="../../TFT/img/itens/tft_item_unknown.tft.png">
			<img class="imagemNum" id="2Num<?php echo $i; ?>" src="../../TFT/img/itens/tft_item_unknown.tft.png">
			<img class="imagemNum" id="3Num<?php echo $i; ?>" src="../../TFT/img/itens/tft_item_unknown.tft.png">
			<input id="inputChamp<?php echo $i; ?>" style="display:none;" value="" name="champ<?php echo $i ?>" />
			<input id="input1Num<?php echo $i; ?>" style="display:none;" value="" name="item1Num<?php echo $i ?>" />
			<input id="input2Num<?php echo $i; ?>" style="display:none;" value="" name="item2Num<?php echo $i ?>" />
			<input id="input3Num<?php echo $i; ?>" style="display:none;" value="" name="item3Num<?php echo $i ?>" />
		</div>
		</div>

		<?php } ?>
	</div>
	<button id="sendComp">Finalizar</button>
	</div>
	</form>
	</div>
	
	<div class="selectChamp">
	<div id="marginSelectChamp">
		<?php for($a = 0; $a < $champCount; $a++){ ?>
		<div id="unitSelect<?php echo $a ?>" title="<?php echo $jsonChamp[$a]['key']?>">
		<img src="https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft_<?php echo strtolower($jsonChamp[$a]['key']); ?>.png" >
		<img class="imgMoldura" src="../../TFT/img/molduras/lv-<?php echo strtolower($jsonChamp[$a]['cost']) ?>.png" >
		<img class="imgOrigin" src="https://raw.communitydragon.org/latest/game/assets/ux/traiticons/trait_icon_<?php echo strtolower($jsonChamp[$a]['origin'][0]) ?>.png" >
		<img class="imgClass" src="https://raw.communitydragon.org/latest/game/assets/ux/traiticons/trait_icon_<?php echo strtolower($jsonChamp[$a]['class'][0]); ?>.png" >
		<?php if (isset($jsonChamp[$a]['origin'][1]) == false){} else { echo '<img class="imgOrigin2" src="https://raw.communitydragon.org/latest/game/assets/ux/traiticons/trait_icon_'. strtolower($jsonChamp[$a]['origin'][1]) .'.png" >'; } ?>
		</div>
		<?php } ?>
	</div>
	</div>
	<div id="selectItens">
	<?php for($b = 0; $b < $countItens; $b++){ ?>
		<img id="item<?php echo $b ?>" src="../../TFT/img/itens/tft_item_<?php echo $decodeItens[$b]['key'] ?>.tft.png" name="<?php echo $decodeItens[$b]['key'] ?>">
	<?php } ?>
	</div>

</div>
</body>
</html>
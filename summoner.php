<?php 

include '003/conf-global.php';
include '002/alpha_conect.php';
if($siteStatus == "1"){
	include '003/summoner-info.php';
	include '003/champion-info.php';} else {$error = $error001;}
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="006/style_css_sm.css" />
<link rel="stylesheet" type="text/css" href="006/menu-mb.css" />
<link rel="stylesheet" type="text/css" href="009/fonts.css" />
<script type="text/javascript" src="004/jquery-1.12.3.min.js"></script>
<script type="text/javascript" src="005/menu-script-mb.js"></script>
<script type="text/javascript">
    function gravar(){

        $.ajax({
            method: "get",
            url: "_notas hide/teste.php",
            data: $("#form").serialize(),
			 beforeSend: function () {
				jQuery('#enviar').html('ENVIANDO<br><img style="width:20px; height:20px;" src="../007/send2.gif">');
   },
        success: function(data){
                   alert(data);
					
					jQuery('#enviar').css('background', 'url(007/update_button_bk_send.png)');
					jQuery('#enviar').css('box-shadow', '0px 0px 5px #CCC');
					jQuery('#enviar').html('FEITO');
				   
        }
    });
    }

</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>League of News - Alpha 0.4</title>
<div id="error"><?php echo $error ?></div><img class="close-error" src="007/c.png" />
<div id="menu-mb">
	<a href="index.html">
		<img id="logo-sm" src="007/Logo.png" /></a> 
	<img id="menu-close" class="btmenu" src="007/mb-menu.png" />
	<img id="menu-open" class="btmenu" src="007/mb-menu.png" />
	<img id="search-mn" src="007/search-icon.png" />

</div> 

<div id="leteralbar-mb">
<form id="form" action="" onSubmit="gravar(); return false;">
 <input class="input_update" type="text" id="ident" name="smns" value="ForLove" />
 <input class="input_update" type="text" id="pass" name="region" value="BR1" />
<button type="submit" id="enviar">ATUALIZAR</button>
</form>
</div>


<form action="summoner.php" method="get" id="mb-form">
<input id="input-form" maxlength="16" size="16"  type="text" action="summoner.php" name="smns"  />
<select id="select-form" name="region">
 	<option value="BR1">BR</option>
    <option value="EUN1">EUNE</option>
    <option value="EUW1">EUW</option>
    <option value="JP1">JP</option>
    <option value="KR">KR</option>
    <option value="LA1">LAN</option>
	<option value="LA2">LAS</option>
    <option value="NA1">NA</option>
    <option value="OC1">OCE</option>
    <option value="TR1">TR</option>
    <option value="RU">RU</option>
</select>
<button id="button-form">Buscar</button>
</form>

</head>
<body> 

<div id="down">
 <span id="summoner-ico-lv">
    <div id="summoner-lv-mb"><p><?php echo $summonerLv ?></p></div>
	<img id="summoner-ico-mb" src="<?php echo $summonerIco ?>" /> 
 </span>
 <span id="summoner-name-mb">
  <h1><?php echo $summonerName ?></h1>
 </span>
 <span id="solo-tier-mb" class="tier-mb">
	<img class="img-tier-mb" src="007/tiers/<?php echo strtolower($summonerLeaguesTierSolo) ?>.png" />
    <h3 style="color:<?php echo $colorSolo ?>;"><?php echo $eloInvocadorSolo ?><?php if ($eloInvocadorSolo != "Desafiante" and $eloInvocadorSolo != "Mestre") { echo "&nbsp;". $summonerLeaguesRankSolo;} else {} ?></h3>
    <h4>Solo/Duo</h4>
    <h5>Wins: <font color="#00CC99"><?php echo $summonerLeaguesWinsSolo ?></font> - Loss: <font color="#F03"><?php echo $summonerLeaguesLoseSolo ?></font> <br /> LP: 							 	<font color="#BAB441"><?php echo $summonerLeaguesPdlsSolo ?></font></h5>
    
 </span>
 <span id="flex-tier-mb" class="tier-mb">
	<img class="img-tier-mb" src="007/tiers/<?php echo strtolower($summonerLeaguesTierFlex) ?>.png" />
    <h3 style="color:<?php echo $colorFlex ?>;"><?php echo $eloInvocadorFlex;?><?php if ($eloInvocadorFlex != "Desafiante" and $eloInvocadorFlex != "Mestre") { echo "&nbsp;". $summonerLeaguesRankFlex;} else {} ?></h3>
    <h4>Flex</h4>
    <h5>Wins: <font color="#00CC99"><?php echo $summonerLeaguesWinsFlex ?></font> - Loss: <font color="#F03"><?php echo $summonerLeaguesLoseFlex ?></font> <br /> LP:   	 	<font color="#BAB441"><?php echo $summonerLeaguesPdlsFlex ?></font></h5>
   
 </span>

<div id="summoner-general-mb">
	<div id="championsPool">
    	<div id="mastery-champion" class="championThree">
        	<div class="championMastery" id="Mastery1">
            	<img class="masteryLvSecodary" src="007/lol-img/mastery_<?php echo $champLv1 ?>.png" />
            	<img class="borderSecondary" src="007/lol-img/champbordertwo.png" />
        		<img class="masterChampion" src="<?php echo $champImg1 ?>" />  
                <h2><?php echo $champPoints1 ?></h2>
            </div>
        	<div class="championMastery" id="Mastery2">
            	<img id="borderPrimary" src="007/lol-img/chamborderone.png" />
        		<img class="masterChampion" src="<?php echo $champImg0 ?>" /> 
                <img id="masteryLvPrimary" src="007/lol-img/mastery_<?php echo $champLv0 ?>.png" />
                <h2><?php echo $champPoints0 ?></h2>
            </div>
        	<div class="championMastery" id="Mastery3">
            	<img class="masteryLvSecodary" src="007/lol-img/mastery_<?php echo $champLv2 ?>.png" />
            	<img class="borderSecondary" src="007/lol-img/champborderthree.png" />
        		<img class="masterChampion" src="<?php echo $champImg2 ?>" />  
                <h2><?php echo $champPoints2 ?></h2>
            </div> 
        </div>
    </div>
   <!-- <div id="lastGameInfo">&nbsp; sada</div> -->
  </div>
</div>


</body>
</html>
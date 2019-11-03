<link rel="stylesheet" type="text/css" href="../006/style_css_sm.css" />
<link rel="stylesheet" type="text/css" href="../006/menu-mb.css" />
<link rel="stylesheet" type="text/css" href="../009/fonts.css" />
<script type="text/javascript" src="../004/jquery-1.12.3.min.js"></script>
<script type="text/javascript" src="../005/menu-script-mb.js"></script>
<script type="text/javascript">
function get(){
	$.ajax({
		method: "get",
		url: "teste_1_1.php",
		data: $('#buscar').serialize(),
		beforeSend: function(){
			jQuery('#bt_enviar').html('Espere');
			jQuery('#ready').attr('src', '../007/send_info.gif');
			},
		success: function(data){
			var decode = jQuery.parseJSON(data);
			var nome = decode['nome'];
			var idInv = decode['idInv'];
			var idConta = decode['idConta'];
			var idIco = decode['idIco'];
			var rg = decode['rg'];
			var eloSolo = decode['eloSolo'];
			var eloFlex = decode['eloFlex'];
			var msgW = decode['msgW'];
			jQuery('#nick').html(nome);
			jQuery('#who').html(nome);
			jQuery('#idInv').html(idInv);
			jQuery('#idConta').html(idConta);
			jQuery('#idIco').html(idIco);
			jQuery('#eloFlex').html(eloFlex);
			jQuery('#eloSolo').html(eloSolo);
			jQuery('#rg').html(rg);
			jQuery('#error').html(msgW);
			jQuery('#bt_enviar').html("Let's go");
			jQuery('#ready').attr('src', '../007/check.png');
			}
		}, 3);
	
	}
$(document).ready(get());
</script>

<div id="error"></div>
<br>
<span id="h1"><h1>INFORMAÇÕES SOBRE A CONTA DE: <font style="color:rgb(204,204,51);" id="who"></font></h1></span>
<div id="unic">
<form id="buscar" action="" onSubmit="get(); return false;">
<p>Buscar:</p> <input id="" maxlength="16" size="16"  type="text"  name="smns"  /></br>
<select id="new-select" name="region">
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
<button id="bt_enviar">Let's go</button><img id="ready" src="../007/check.png" />
</form>
<table style="width:30%; height:500px; position:absolute; left:35%; margin-top:-150px; top:375;">
	<tr> 
    	<th><p style="color:#096;">Nome:</p></th>
        <th ><p id="nick"><p></th>
    </tr>
	<tr> 
    	<th><p style="color:#096;">ID da Conta:</p></th>
        <th><p id="idConta"></p></th>
    </tr>
	<tr> 
    	<th><p style="color:#096;">ID do Invocador:</p></th>
        <th><p id="idInv"></p></th>
    </tr>
	<tr> 
    	<th><p style="color:#096;">ID do Icone:</p></th>
        <th><p id="idIco"></p></th>
    </tr>
	<tr> 
    	<th><p style="color:#096;">Elo Flex:</p></th>
        <th><p id="eloFlex"></p></th>
    </tr>
	<tr> 
    	<th><p style="color:#096;">Elo Solo:</p></th>
        <th><p id="eloSolo"></p></th>
    </tr>
	<tr> 
    	<th><p style="color:#096;">ID da ultima partida:</p></th>
        <th><p></p></th>
    </tr>
	<tr> 
    	<th><p style="color:#096;">SERVIDOR:</p></th>
        <th><p id="rg"></p></th>
    </tr>
</table>
</div>


<style>
html {background:url(../008/background-vi.jpg); background-position:center; background-repeat:no-repeat; background-attachment:fixed; background-size:cover;}
#unic {width:90%; height:750px; margin-left:5%; margin-top:5%; margin-bottom:5%; background:rgba(0,0,0, 0.75)}
p {font-family:Arial, Helvetica, sans-serif; color:#FFF; margin-top:4px; margin-bottom:4px; text-align:justify;}
h1 {font-family:Arial, Helvetica, sans-serif; color:#FFF; text-align:center; text-shadow:5px 5px 10px #000;}
body {background:rgba(51,51,51,0); height:750px;}
#new-select {width:45px;}
#bt_enviar {width:55px; height:19px; font-family:Arial, Helvetica, sans-serif; border:none; background:url(../007/update_button_bk_info.png); color:#F05228;}
#ready {width:22px; height:22px; margin-left:15px; margin-bottom:-7px;}
#error {width:100%; height:27px; background-color:#124724; font-family:Arial; font-weight:bolder; color:#000; text-align:center; font-size:22px; padding-top:3px;
display:none;}
</style>


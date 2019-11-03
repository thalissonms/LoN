<?php
date_default_timezone_set('Brazil/East');
$data1 = date('d-m-Y H:i:s');
$data2 = date('d-m-Y H:i:s', strtotime("+20 minutes"));
/*if (strtotime($data1) < strtotime($data2."10 minutes")){
	
echo "ok";} else {echo "not";}*/
$data3 = (strtotime($data2) - strtotime($data1));
echo strtotime($data2) ."<br>". strtotime($data1)."<br>";
echo $data3/60 ."<br>";
echo $data2 ."<br>"; 
echo $data1;

?>
<link rel="stylesheet" type="text/css" href="../009/fonts.css" />
<style>
html {background:#CCC;}
.input_update {display:block;}
#enviar {background: linear-gradient(to bottom, #FFF, #DDD, #AAA); width:90px; height:45px; border-radius:3px; border:none; box-shadow:0px 0px 5px #000; font-family:Adobe Garamond Pro; font-size:14px; color:#333; text-align:center; text-shadow:2px 0px 4px #BBB;}
</style>
<script type="text/javascript" src="../005/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
   function gravar(){

        $.ajax({
            method: "get",
            url: "teste_1_2.php",
            data: $("#form").serialize(),
			 beforeSend: function () {
				jQuery('#enviar').html('ENVIANDO<br><img style="width:20px; height:20px;" src="../007/send2.gif">');
   },
        success: function(data){
                  alert(data);
				
					jQuery('#enviar').css('background', 'url(../007/update_button_bk_send.png)');
					jQuery('#enviar').css('box-shadow', '0px 0px 5px #CCC');
					jQuery('#enviar').html('FEITO');
					var data_array = $.parseJSON(data);
					var deco = data_array['summonerName'];
						jQuery('#name').html(deco);
        }
    });

				
    }
		
</script>
<html>
<head>
</head>
<body>
<form id="form" action="" onSubmit="gravar(); return false;">
 <input class="input_update" type="text" id="ident" name="smns" value="ForLove" />
 <input class="input_update" type="text" id="pass" name="region" value="BR1" />
<button type="submit" id="enviar">ATUALIZAR</button>
</form>
<div id="name"></div>
</body>
</html>
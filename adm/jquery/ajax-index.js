function comp(){
	$.ajax({
		method: "get",
		url: "tftpack.php",
		data: $('#compcreate').serialize(),
		beforeSend: function(){
			jQuery('#sendComp').html('Enviando...')
		},
		success: function(){
			jQuery('#sendComp').html('Finalizar');
			for (i = 0; i < 8; i++){
				$('#imagemChampNum'+i).attr('src', '../../TFT/img/splash/tft_hud_texture_atlas.png');
				$('#1Num'+i).attr('src', '../../TFT/img/itens/tft_item_unknown.tft.png');
				$('#2Num'+i).attr('src', '../../TFT/img/itens/tft_item_unknown.tft.png');
				$('#3Num'+i).attr('src', '../../TFT/img/itens/tft_item_unknown.tft.png');
				$('#compName').val('');
				$('#inputChamp'+i).val('');
				$('#input1Num'+i).val('');
				$('#input2Num'+i).val('');
				$('#input3Num'+i).val('');
			}
			
		}
	}, 3)
}
//$(document).ready(comp());
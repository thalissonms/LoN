$(document).ready(
function(){
	 var and1 = '0'
	 var and2 = '0'
	$('#arquivoDown').click(function(){ 
	 	$("#files-links").animate({
		 	height:'374px'
		}, 500)
	 	$("#arquivos-ul").animate({
		 	height:'toggle'
		}, 500)

		$(".title-files-links").toggle()
		and1 = '1'
		
		$("#tft-add-comp").animate({
			marginTop:'495px'
		}, 500)

		$()
	
});
 	$('#arquivoUp').click(function(){ 
	 	$("#files-links").animate({
		 	height:'40px'
		}, 500)
		$("#arquivos-ul").animate({
		 	height:'toggle'
		}, 500)
		$(".title-files-links").toggle()
		and1 = '0'

		if (and1 == '0' && and2 == '0'){
		$("#tft-add-comp").animate({
			marginTop:'180px'
		}, 500)}
	
	
});
	
  $('#logsDown').click(function(){ 
	$("#logs-site").animate({
		 	height:'374px'
		}, 500)
	 	$("#logs-ul").animate({
		 	height:'toggle'
		}, 500)

		$(".title-logs-site").toggle()
		and2 = '1'
		
	  	$("#tft-add-comp").animate({
			marginTop:'495px'
		}, 500)
	
});
 	$('#logsUp').click(function(){ 
	 	$("#logs-site").animate({
		 	height:'40px'
		}, 500)
		$("#logs-ul").animate({
		 	height:'toggle'
		}, 500)
		$(".title-logs-site").toggle()	
		and2 = '0'

		if (and1 == '0' && and2 == '0'){
		$("#tft-add-comp").animate({
			marginTop:'180px'
		}, 500)}
	
});

	$('#tft-add-champDown').click(function(){
		$('#tft-add-comp').animate({
			height: '450px'
		}, 500)
		$('.title-tft-add-comp').toggle()
		$('#comp-all').animate({
			height:'toggle'	
		}, 500)
		$('#sendComp').animate({
			height: 'toggle'
		})
		$("#compName").toggle(500)
	});
	$('#tft-add-champUp').click(function(){
		$('#tft-add-comp').animate({
			height: '40px'
		}, 500)
		$('.title-tft-add-comp').toggle()
		$('#comp-all').animate({
			height:'toggle'	
		}, 500)
		$('#sendComp').animate({
			height: 'toggle'
		})
		$("#compName").toggle(500)
		
	});
/*	$('#champ0').click(function(){
		$('.selectChamp').toggle()
	}); */

$(".log-teste").click(	
	function (){
		$.ajaxSetup({
		url: "query/logs-query.php",
		dataType: "text",
		beforeSend: function(){
			jQuery('#executar-teste').html('Espere...');
			}, 
		success: function(data){
			var decode = jQuery.parseJSON(data);
			var log1 = decode['log1'];
			var log2 = decode['log2'];
			var log3 = decode['log3'];
			var log4 = decode['log4'];
			var log5 = decode['log5'];
			var log6 = decode['log6'];
			var log7 = decode['log7'];
			jQuery('#log-1').attr('src', '../007/'+ log1 +'.png');
			jQuery('#log-2').attr('src', '../007/'+ log2 +'.png');
			jQuery('#log-3').attr('src', '../007/'+ log3 +'.png');
			jQuery('#log-4').attr('src', '../007/'+ log4 +'.png');
			jQuery('#log-5').attr('src', '../007/'+ log5 +'.png');
			jQuery('#log-6').attr('src', '../007/'+ log6 +'.png');
			jQuery('#log-7').attr('src', '../007/'+ log7 +'.png');
			jQuery('#executar-teste').html('Executar testes')
			}
		} );
		$.ajax();
	
	}
);
	
	var i;
	for (i = 0; i < 8; i++) {		
	$('#champ'+i).click(function(){		
		champNumSelect = $(this).attr('name')
		})
	$('#imagemChampNum'+i).click(function(){
		$('.selectChamp').toggle()
	})
	}
	for (a = 0; a < $('#champCount').attr('name'); a++) {	
	$('#unitSelect'+a).click(function(){
		champSelect = $(this).attr('title')
		var imagemChamp = 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft_'+champSelect.toLowerCase()+'.png'
		$('#inputChamp'+champNumSelect).val(champSelect)
		$('#imagemChampNum'+champNumSelect).attr('src', imagemChamp)
		$('.selectChamp').toggle()
		champSelect = ""
		champNumSelect = ""
	})
	}
	$('.imagemNum').click(function(){
		$('#selectItens').toggle()
	})
	for (b = 0; b < $('#itensCount').attr('name'); b++){
		for (c = 1; c < 4; c++){
		$('#'+ c +'Num'+b).click(function(){
			itemNumSelect = $(this).attr('id')
		})
		}
	
	$('#item'+b).click(function(){
		
		itemName = $(this).attr('name')
		findItemImg = $(this).attr('src')
		$('#'+itemNumSelect).attr('src', findItemImg)
		$('#input'+itemNumSelect).val(itemName)
		$('#selectItens').toggle()
	})
	}	
	}
	 
)



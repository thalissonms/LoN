$(document).ready(function(e) {

var btmenuc = $("#menu-close");
var btmenuo = $("#menu-open");

 btmenuc.click(function(){
	 
	 $("#leteralbar-mb").animate({
		 height: "toggle"
	 }, 10)
	 

	 
	  $("#down").animate({
		 marginTop: "200"
	 }, 10)
	 
	 $("#menu-close").css('display', 'none')
	 $("#menu-open").css('display', 'block')
});
function menuclose(){
	 $("#leteralbar-mb").hide();
	  $("#down").animate({
		 marginTop: ""
	 }, 10)
	 
	 $("#menu-open").css('display', 'none')
	 $("#menu-close").css('display', 'block')
	 
}

 btmenuo.click(menuclose);
 

if ($('#error').text() != "false"){
 $('#error').animate({height: "toggle"}, 500);
 $('#logo-sm').animate({top:"47px"}, 500);
 $('#mb-form').animate({top:"177px"}, 500);
 $('#search-mn').animate({top:"57px"}, 500);	
 $('#menu-mb').animate({top:"27px"}, 500);	 
} 
$('.close-error').click(function(){
 $('#error').animate({height: "toggle"}, 500);
 $('#logo-sm').animate({top:"20px"}, 500);
 $('#mb-form').animate({top:"150px"}, 500);
 $('#search-mn').animate({top:"30px"}, 500);
 $('#menu-mb').animate({top:"0px"}, 500);
	});	

var btsearch = $('#search-mn');
 btsearch.click(function(){
	 $('#mb-form').toggle();
	menuclose();
	 
}); 
	 


	 
	 });
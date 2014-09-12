//SETTING UP OUR POPUP
//0 means disabled; 1 means enabled;
var popupStatus_registro = 0;

//loading popup with jQuery magic!
function loadPopup_registro(){
	
	/*document.getElementById('documentacionrequerida').text('');*/
	//loads popup only if it is disabled
	if(popupStatus_registro==0){
		$("#backgroundPopup_registro").css({
			"opacity": "0.7"
		});
		$("#backgroundPopup_registro").fadeIn("slow");
		$("#popupContact_registro").fadeIn("slow");
		popupStatus_registro = 1;
	}
}

//disabling popup with jQuery magic!
function disablePopup_registro(){
	//disables popup only if it is enabled
	if(popupStatus_registro==1){
		$("#backgroundPopup_registro").fadeOut("slow");
		$("#popupContact_registro").fadeOut("slow");
		popupStatus_registro = 0;
	}
}

//centering popup
function centerPopup_registro(){
	//request data for centering
	var windowWidth_registro = document.documentElement.clientWidth;
	var windowHeight_registro = document.documentElement.clientHeight;
	var popupHeight_registro = $("#popupContact_registro").height();
	var popupWidth_registro = $("#popupContact_registro").width();
	//centering
	$("#popupContact_registro").css({
		"position": "absolute",
		"top": windowHeight_registro/2-popupHeight_registro/2,
		"left": windowWidth_registro/2-popupWidth_registro/2
	});
	//only need force for IE6
	
	$("#backgroundPopup_registro").css({
		"height": windowHeight_registro
	});
	
}


//CONTROLLING EVENTS IN jQuery
$(document).ready(function(){
	
	//LOADING POPUP
	//Click the button event!
	$("#button_registro").click(function(){
		//centering with css
		centerPopup_registro();
		//load popup
		loadPopup_registro();
	});
				
	//CLOSING POPUP
	//Click the x event!
	$("#popupContactClose_registro").click(function(){
		disablePopup_registro();
	});
	//Click out event!
	$("#backgroundPopup_registro").click(function(){
		disablePopup_registro();
	});
	//Press Escape event!
	$(document).keypress(function(e){
		if(e.keyCode==27 && popupStatus_registro==1){
			disablePopup_registro();
		}
	});

});

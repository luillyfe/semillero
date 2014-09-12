//SETTING UP OUR POPUP
//0 means disabled; 1 means enabled;
var popupStatus_edit_objetivos_especificos = 0;

//loading popup with jQuery magic!
function loadPopup_edit_objetivos_especificos(){
	
	/*document.getElementById('documentacionrequerida').text('');*/
	//loads popup only if it is disabled
	if(popupStatus_edit_objetivos_especificos==0){
		$("#backgroundPopup_edit_objetivos_especificos").css({
			"opacity": "0.7"
		});
		$("#backgroundPopup_edit_objetivos_especificos").fadeIn("slow");
		$("#popupContact_edit_objetivos_especificos").fadeIn("slow");
		popupStatus_edit_objetivos_especificos = 1;
	}
}

//disabling popup with jQuery magic!
function disablePopup_edit_objetivos_especificos(){
	//disables popup only if it is enabled
	if(popupStatus_edit_objetivos_especificos==1){
		$("#backgroundPopup_edit_objetivos_especificos").fadeOut("slow");
		$("#popupContact_edit_objetivos_especificos").fadeOut("slow");
		popupStatus_edit_objetivos_especificos = 0;
	}
}

//centering popup
function centerPopup_edit_objetivos_especificos(){
	//request data for centering
	var windowWidth_edit_objetivos_especificos = document.documentElement.clientWidth;
	var windowHeight_edit_objetivos_especificos = document.documentElement.clientHeight;
	var popupHeight_edit_objetivos_especificos = $("#popupContact_edit_objetivos_especificos").height();
	var popupWidth_edit_objetivos_especificos = $("#popupContact_edit_objetivos_especificos").width();
	//centering
	$("#popupContact_edit_objetivos_especificos").css({
		"position": "absolute",
		"top": windowHeight_edit_objetivos_especificos/2-popupHeight_edit_objetivos_especificos/2,
		"left": windowWidth_edit_objetivos_especificos/2-popupWidth_edit_objetivos_especificos/2
	});
	//only need force for IE6
	
	$("#backgroundPopup_edit_objetivos_especificos").css({
		"height": windowHeight_edit_objetivos_especificos
	});
	
}


//CONTROLLING EVENTS IN jQuery
$(document).ready(function(){
	
	//LOADING POPUP
	//Click the button event!
	$("#button_edit_objetivos_especificos").click(function(){
		//centering with css
		centerPopup_edit_objetivos_especificos();
		//load popup
		loadPopup_edit_objetivos_especificos();
	});
				
	//CLOSING POPUP
	//Click the x event!
	$("#popupContactClose_edit_objetivos_especificos").click(function(){
		disablePopup_edit_objetivos_especificos();
	});
	//Click out event!
	$("#backgroundPopup_edit_objetivos_especificos").click(function(){
		disablePopup_edit_objetivos_especificos();
	});
	//Press Escape event!
	$(document).keypress(function(e){
		if(e.keyCode==27 && popupStatus_edit_objetivos_especificos==1){
			disablePopup_edit_objetivos_especificos();
		}
	});

});

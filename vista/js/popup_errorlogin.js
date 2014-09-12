/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//SETTING UP OUR POPUP
//0 means disabled; 1 means enabled;
var popupStatus_ini = 0;

//loading popup with jQuery magic!
function loadPopup_ini(){
	
	/*document.getElementById('documentacionrequerida').text('');*/
	//loads popup only if it is disabled
	if(popupStatus_ini==0){
		$("#backgroundPopup_ini").css({
			"opacity": "0.7"
		});
		$("#backgroundPopup_ini").fadeIn("slow");
		$("#popupContact_ini").fadeIn("slow");
		popupStatus_ini = 1;
	}
}

//disabling popup with jQuery magic!
function disablePopup_ini(){
	//disables popup only if it is enabled
	if(popupStatus_ini==1){
		$("#backgroundPopup_ini").fadeOut("slow");
		$("#popupContact_ini").fadeOut("slow");
		popupStatus_ini = 0;
	}
}

//centering popup
function centerPopup_ini(){
	//request data for centering
	var windowWidth_ini = document.documentElement.clientWidth;
	var windowHeight_ini = document.documentElement.clientHeight;
	var popupHeight_ini = $("#popupContact_ini").height();
	var popupWidth_ini = $("#popupContact_ini").width();
	//centering
	$("#popupContact_ini").css({
		"position": "absolute",
		"top": windowHeight_ini/2-popupHeight_ini/2,
		"left": windowWidth_ini/2-popupWidth_ini/2
	});
	//only need force for IE6
	
	$("#backgroundPopup_ini").css({
		"height": windowHeight_ini
	});
	
}


//CONTROLLING EVENTS IN jQuery
$(document).ready(function(){
	
	//LOADING POPUP
	//Click the button event!


	$("#button_ini").ready(function(){
		//centering with css
		centerPopup_ini();
		//load popup
		loadPopup_ini();
	});
				
	//CLOSING POPUP
	//Click the x event!
	$("#popupContactClose_ini").click(function(){
		disablePopup_ini();
	});
	//Click out event!
	$("#backgroundPopup_ini").click(function(){
		disablePopup_ini();
	});
	//Press Escape event!
	$(document).keypress(function(e){
		if(e.keyCode==27 && popupStatus_ini==1){
			disablePopup_ini();
		}
	});


});

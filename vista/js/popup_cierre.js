/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//SETTING UP OUR POPUP
//0 means disabled; 1 means enabled;
var popupStatus_cierre = 0;

//loading popup with jQuery magic!
function loadPopup_cierre(){
	
	/*document.getElementById('documentacionrequerida').text('');*/
	//loads popup only if it is disabled
	if(popupStatus_cierre==0){
		$("#backgroundPopup_cierre").css({
			"opacity": "0.7"
		});
		$("#backgroundPopup_cierre").fadeIn("slow");
		$("#popupContact_cierre").fadeIn("slow");
		popupStatus_cierre = 1;
	}
}

//disabling popup with jQuery magic!
function disablePopup_cierre(){
	//disables popup only if it is enabled
	if(popupStatus_cierre==1){
		$("#backgroundPopup_cierre").fadeOut("slow");
		$("#popupContact_cierre").fadeOut("slow");
		popupStatus_cierre = 0;
	}
}

//centering popup
function centerPopup_cierre(){
	//request data for centering
	var windowWidth_cierre = document.documentElement.clientWidth;
	var windowHeight_cierre = document.documentElement.clientHeight;
	var popupHeight_cierre = $("#popupContact_cierre").height();
	var popupWidth_cierre = $("#popupContact_cierre").width();
	//centering
	$("#popupContact_cierre").css({
		"position": "absolute",
		"top": windowHeight_cierre/2-popupHeight_cierre/2,
		"left": windowWidth_cierre/2-popupWidth_cierre/2
	});
	//only need force for IE6
	
	$("#backgroundPopup_cierre").css({
		"height": windowHeight_cierre
	});
	
}


//CONTROLLING EVENTS IN jQuery
$(document).ready(function(){
	
	//LOADING POPUP
	//Click the button event!


	$("#button_cierre").ready(function(){
		//centering with css
		centerPopup_cierre();
		//load popup
		loadPopup_cierre();
	});
				
	//CLOSING POPUP
	//Click the x event!
	$("#popupContactClose_cierre").click(function(){
		disablePopup_cierre();
	});
	//Click out event!
	$("#backgroundPopup_cierre").click(function(){
		disablePopup_cierre();
	});
	//Press Escape event!
	$(document).keypress(function(e){
		if(e.keyCode==27 && popupStatus_cierre==1){
			disablePopup_cierre();
		}
	});


});

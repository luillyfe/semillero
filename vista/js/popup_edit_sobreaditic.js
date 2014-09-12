//SETTING UP OUR POPUP
//0 means disabled; 1 means enabled;
var popupStatus_edit_sobreaditic = 0;

//loading popup with jQuery magic!
function loadPopup_edit_sobreaditic(){
	
	/*document.getElementById('documentacionrequerida').text('');*/
	//loads popup only if it is disabled
	if(popupStatus_edit_sobreaditic==0){
		$("#backgroundPopup_edit_sobreaditic").css({
			"opacity": "0.7"
		});
		$("#backgroundPopup_edit_sobreaditic").fadeIn("slow");
		$("#popupContact_edit_sobreaditic").fadeIn("slow");
		popupStatus_edit_sobreaditic = 1;
	}
}

//disabling popup with jQuery magic!
function disablePopup_edit_sobreaditic(){
	//disables popup only if it is enabled
	if(popupStatus_edit_sobreaditic==1){
		$("#backgroundPopup_edit_sobreaditic").fadeOut("slow");
		$("#popupContact_edit_sobreaditic").fadeOut("slow");
		popupStatus_edit_sobreaditic = 0;
	}
}

//centering popup
function centerPopup_edit_sobreaditic(){
	//request data for centering
	var windowWidth_edit_sobreaditic = document.documentElement.clientWidth;
	var windowHeight_edit_sobreaditic = document.documentElement.clientHeight;
	var popupHeight_edit_sobreaditic = $("#popupContact_edit_sobreaditic").height();
	var popupWidth_edit_sobreaditic = $("#popupContact_edit_sobreaditic").width();
	//centering
	$("#popupContact_edit_sobreaditic").css({
		"position": "absolute",
		"top": windowHeight_edit_sobreaditic/2-popupHeight_edit_sobreaditic/2,
		"left": windowWidth_edit_sobreaditic/2-popupWidth_edit_sobreaditic/2
	});
	//only need force for IE6
	
	$("#backgroundPopup_edit_sobreaditic").css({
		"height": windowHeight_edit_sobreaditic
	});
	
}


//CONTROLLING EVENTS IN jQuery
$(document).ready(function(){
	
	//LOADING POPUP
	//Click the button event!
	$("#button_edit_sobreaditic").click(function(){
		//centering with css
		centerPopup_edit_sobreaditic();
		//load popup
		loadPopup_edit_sobreaditic();
	});
				
	//CLOSING POPUP
	//Click the x event!
	$("#popupContactClose_edit_sobreaditic").click(function(){
		disablePopup_edit_sobreaditic();
	});
	//Click out event!
	$("#backgroundPopup_edit_sobreaditic").click(function(){
		disablePopup_edit_sobreaditic();
	});
	//Press Escape event!
	$(document).keypress(function(e){
		if(e.keyCode==27 && popupStatus_edit_sobreaditic==1){
			disablePopup_edit_sobreaditic();
		}
	});

});

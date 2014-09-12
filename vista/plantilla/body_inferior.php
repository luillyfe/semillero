<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
</div>
    
</section>
</div>
    
    
<br />
    
    
<div id="bottom">
    <footer>
        <div id='contenido_pie'>
            
            <p>
                
                Copyright © 2020 AdiTIC 
                    
            </p>
        </div>
    </footer>
</div>
    
<?php include("./popup_login.php"); ?>
    
<?php include("./popup_registro.php"); ?>


</div>
    
<script type="text/javascript" charset="utf-8">
    
    var scrollSpeed = 70; 		// Speed in milliseconds
    var step = 1; 				// How many pixels to move per step
    var current = 0;			// The current pixel row
    var imageHeight = 4300;		// Background image height
    var headerHeight = 300;		// How tall the header is.
    
    //The pixel row where to start a new loop
    var restartPosition = -(imageHeight - headerHeight);
    
    function scrollBg(){
        
        //Go to next pixel row.
        current -= step;
        
        //If at the end of the image, then go to the top.
        if (current == restartPosition){
            current = 0;
        }
        
        //Set the CSS of the header.
        $('#headere').css("background-position","0 "+current+"px");
        
        
    }
    
    //Calls the scrolling function repeatedly
    var init = setInterval("scrollBg()", scrollSpeed);
    
    
</script>	        
    
<script type="text/javascript" charset="utf-8">
    
    var scrollSpeed_deco1 = 70; 		// Speed in milliseconds
    var step_deco1 = 1; 				// How many pixels to move per step
    var current_deco1 = 0;			// The current pixel row
    var imageHeight_deco1 = 4300;		// Background image height
    var headerHeight_deco1 = 300;		// How tall the header is.
    
    //The pixel row where to start a new loop
    var restartPosition_deco1 = -(imageHeight_deco1 - headerHeight_deco1);
    
    function scrollBg_deco1(){
        
        //Go to next pixel row.
        current_deco1 -= step_deco1;
        
        //If at the end of the image, then go to the top.
        if (current_deco1 == restartPosition_deco1){
            current_deco1 = 0;
        }
        
        //Set the CSS of the header.
        $('#headere_deco1').css("background-position","0 "+current_deco1+"px");
        
        
    }
    
    //Calls the scrolling function repeatedly
    var init_deco1 = setInterval("scrollBg_deco1()", scrollSpeed_deco1);
    
    
</script>
    
<script type="text/javascript" charset="utf-8">
    
    var scrollSpeed_deco2 = 70; 		// Speed in milliseconds
    var step_deco2 = 1; 				// How many pixels to move per step
    var current_deco2 = 0;			// The current pixel row
    var imageHeight_deco2 = 4300;		// Background image height
    var headerHeight_deco2 = 300;		// How tall the header is.
    
    //The pixel row where to start a new loop
    var restartPosition_deco2 = +(imageHeight_deco2 - headerHeight_deco2);
    
    function scrollBg_deco2(){
        
        //Go to next pixel row.
        current_deco2 -= step_deco2;
        
        //If at the end of the image, then go to the top.
        if (current_deco2 == restartPosition_deco2){
            current_deco2 = 0;
        }
        
        //Set the CSS of the header.
        $('#headere_deco2').css("background-position","0 "+current_deco2+"px");
        
        
    }
    
    //Calls the scrolling function repeatedly
    var init_deco2 = setInterval("scrollBg_deco2()", scrollSpeed_deco2);
    
    
</script>
    
<?php if (isset($_GET['errorlogin']) && ($_GET['errorlogin'] == 'true')) : ?>
        
        
    <div id="popupContact_ini">
        <a id="popupContactClose_ini" title="Cerrar esta ventana">
            <img src="imagenes/cerrar.png" width="23" height="23" /></a>
        <br />
        <div class="error">
            <?php echo $_GET['mensaje']; ?>  
        </div>
    </div>
    <div id="backgroundPopup_ini"></div>
        
        
<?php endif; ?>
            

                
                
</body>
</html>

<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html lang='es'>
    <head>
        
        <?php
        session_start();
        ?>
        
        <?php
        include("../controlador/registro.php");
        $objetoRegistro = new registro;
        ?>

        <meta charset='utf-8'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>AdiTIC</title>
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" type="text/css" href="css/lksMenuSkin3.css" />
        <link rel="stylesheet" type="text/css" href="css/fondomovil.css" />
        <link rel="stylesheet" type="text/css" href="css/decoracionmembrete1.css" />
        <link rel="stylesheet" type="text/css" href="css/decoracionmembrete2.css" />
        <link rel="stylesheet" type="text/css" href="css/css_login.css" />
        <link rel="stylesheet" type="text/css" href="css/css_popup_errorlogin.css" />
        <link rel="stylesheet" type="text/css" href="css/css_popup_cierre.css" />
        <link rel="stylesheet" type="text/css" href="css/css_popup_registro.css" />
        <!--<link href='http://fonts.googleapis.com/css?family=Wellfleet' rel='stylesheet' type='text/css'>-->
        
         <!--#### Css solo cuando son administradores ####-->
        
         <?php if (isset($_SESSION['tipousuario']) && ($_SESSION['tipousuario'] == 1)): ?> 
         <link rel="stylesheet" type="text/css" href="css/css_popup_edit_sobreaditic.css" />
         <?php endif; ?>
                  <link rel="stylesheet" type="text/css" href="css/css_popup_edit_sobreaditic.css" />

         <!--#############################################-->

        <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>-->
        <!--<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>-->
        <!--<script src="js/script.js"></script>-->
         <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
         <script type="text/javascript" src="js/jquery.js"></script> 
         <script type="text/javascript" src="js/popup.js"></script> 
         <script type="text/javascript" src="js/jquery.ui.core.js"></script>
         <script type="text/javascript" src="js/jquery.ui.widget.js"></script>
         <script type="text/javascript" src="js/jquery.ui.datepicker.js"></script>
         <script type="text/javascript" src="js/popup_errorlogin.js"></script>
         <script type="text/javascript" src="js/popup_cierre.js"></script>
         <script type="text/javascript" src="js/popup_registro.js"></script>
         <script type="text/javascript" src="js/jconfirmaction.jquery.js"></script>
         

             
         <!--#### Scripts solo cuando son administradores ####-->
         <?php if (isset($_SESSION['tipousuario']) && ($_SESSION['tipousuario'] == 1)): ?> 
             <script type="text/javascript" src="js/popup_edit_sobreaditic.js"></script>
         <?php endif; ?> 
         <!--########################-->
             
             
             
         <!--[if IE]>
         <style type="text/css" media="screen">
         @font-face{
         font-family:'Fontin-Regular';
         src: url('css/hemi_head_bd_it.eot');
         }
         </style>
         <![endif]-->
             
         <!--[if lte IE 6]>
                         <style type="text/css" media="screen">
                                 #headere div{
                                         background-image: none;
                                         filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='overlay.png', sizingMethod='scale');
                                 }
                         </style>
                 <![endif]-->
                     
         <!--[if lte IE 6]>
                       <style type="text/css" media="screen">
                               #headere_deco1 div{
                                       background-image: none;
                                       filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='overlay.png', sizingMethod='scale');
                               }
                       </style>
               <![endif]-->
                   
         <!--[if lte IE 6]>
                     <style type="text/css" media="screen">
                             #headere_deco2 div{
                                     background-image: none;
                                     filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='overlay.png', sizingMethod='scale');
                             }
                     </style>
         <![endif]-->
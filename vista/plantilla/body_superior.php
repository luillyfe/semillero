<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->




<?php
if (isset($_GET['cierresesion']) && ($_GET['cierresesion'] == true)) {
   
   
    session_destroy();
    session_unset();
    

}
?>
</head>
<body>
    <div id='contenedor'>

        <div id="top">

            <header>

                <div id='membrete'>





                    <table>
                        <tr>

                            <td width="10%" valign="top">
                                <div id="wrapper_deco1"> 
                                    <div id="headere_deco1">

                                        <div>


                                        </div>  
                                    </div>
                                </div>

                            </td>


                            <td valign="top" width="20%" >    
                                <div style="width: 40px;" class="haciaizquerda" >
                                    <!--<img src="imagenes/logoaditic3.png" alt="Logo semillero adiTIC"/>-->
                                    
                                    <img style="height:2.117cm;width:5.292cm;" alt="" src="data:image/*;base64,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"/>
                                    
                                </div>
                            </td> 


                            <td valign="top" width="40%" >



                                <div class="haciaizquerda" >
                                    <div id="nombresemillero">
                                        Semillero de Tecnologías de la Información y Comunicación
                                    </div>
                                </div>  




                            </td>

                            <td align="center"  width="60px" valign="top">
                                
                                
                                
                                
                                <?php
                                
                               
                               
                                if (isset($_SESSION['nombrecompleto'])) {


                                    echo '<a href="../controlador/login.php?cierresesion=true">';
                                    echo '<div class="iniciarsesion">';
                                    echo 'Cerrar Sesión';
                                } else {
                                    echo '<a  href="#">';
                                    echo '<div id="button"  class="iniciarsesion">';
                                    echo 'Iniciar Sesión';
                                }

                                echo '</div>';
                                echo '</a>';
                                ?>


                                
                                <a target="_blank"  href="http://www.unisimoncucuta.edu.co/es/">
                                    <div  class="universidad">

                                        Universidad
                                        

                                    </div> 
                                </a>
                                <a target="_blank" href="http://www.unisimoncucuta.edu.co/aulaextendida/intro/">
                                    <div  class="aulaextendida">

                                        Aula Extendida

                                    </div> 

                                </a>
                            </td>
                            <td width="10%" valign="top">
                                <div id="wrapper_deco2"> 
                                    <div id="headere_deco2">

                                        <div>


                                        </div>  
                                    </div>
                                </div>

                            </td>

                        </tr>
                    </table>

                </div>
            </header>

        </div> 




        <div id="left">    
            <div id='menu'>
                <nav>

                    <div class="menu">

                        <ul>

                            <li><a href="./index.php" >Sobre AdiTIC</a></li>
                            <li><a href="./objetivos.php" >Objetivos</a></li>
                            <li><a href="./mision.php" >Misión</a></li>
                            <li><a href="./vision.php" >Visión</a></li>
                            <li><a href="./integrantes.php">Integrantes</a></li>
                            <li><a href="#" >Notícias</a></li>
                            <li><a href="#" >Proyectos</a></li>        
                            <li><a href="#">Sobre las TIC</a></li>
                            <li><a href="#" >La Universidad</a></li>
                            <li><a href="#" >Vínvulos</a></li><!--http://www.enticconfio.gov.co/-->
                            <li><a href="#" >Contacto</a></li>
                            <!-- <li>
                               <a href="#">Sobre las TIC</a>
                               <ul>
                                   <li><a href="http://www.ajaxshake.com/es/JS/1111/jquery.html">jQuery</a></li>
                                   <li><a href="http://www.ajaxshake.com/es/JS/1141/flash.html">Flash</a></li>
                                   <li><a href="http://www.ajaxshake.com/es/JS/1121/prototype.html">Prototype</a></li>
                                   <li><a href="http://www.ajaxshake.com/es/JS/12111/mootools.html">Mootools</a></li>
                               </ul>
                           </li> -->
                        </ul>
                    </div>   

                </nav>    
            </div>
        </div>
        <div id="content" class="left_content">     
            <section>
               
               

                <div id='contenido_seccion'>
                        
                 <div class="haciaizquerda"><p>
                 <?php 
                 
                 
                if (isset($_SESSION['nombrecompleto'])) {   
                echo '<h5>Usted ha ingresado como <i><span style="color:orangered;" >'.$_SESSION['nombrecompleto'].'</span></i>, Bienvenido.</h5>';
                }
               
               ?>
            </p></div>
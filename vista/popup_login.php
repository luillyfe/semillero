<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!-- POPUP INICIO DE SESIÓN-->

<div id="popupContact">


    <div id="wrapper">
        <div id="headere">

            <!-- Div is for Shadow Overlay-->
            <div>

                <a id="popupContactClose" title="Cerrar"><img src="imagenes/cerrar.png" width="20" height="20" /></a>

                <form id="login" action="../controlador/login.php" name="login" method="POST">

                    <table>

                        <tr>
                            <td style="color: #ffffff; font-weight: bold;  "> ¿No tienes cuenta?,<a style="color: yellow;" href="#"><div id="button_registro">Registrarsé</div></a></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td style="color: #ffffff" colspan="3" class="centrar" > 

                            </td>     
                        </tr>    
                        <tr>
                            <td title="AYUDA: Ingresa tu código universitario" style="color: #ffffff" class="negritaaderecha">
                                <label for="codigo" >Código:</label>
                            </td>
                            <td title="AYUDA: Ingresa tu código universitario" style="text-align: left;">
                                <input title="Se necesita tu código universitario" required name="codigo" id="codigo" type="text" />
                            </td>
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <td title="AYUDA: Ingresa la contraseña que proporcionaste cuanto te registraste" style="color: #ffffff" class="negritaaderecha">
                                <label for="contrasenia" >Contraseña:</label>
                            </td>
                            <td title="AYUDA: Ingresa la contraseña que proporcionaste cuanto te registraste" style="text-align: left;">

                                <input title="Se necesita tu contraseña" required name="contrasenia" id="contrasenia" type="password" />

                            </td> 
                            <!--<td class="haciaizquerda" >
                                <a  title="AYUDA:Ingresa tu código universitario y el código que proporcionaste cuanto te registraste." >
                                    <img src="imagenes/ayuda.png"/>
                                </a>

                            </td>-->

                        </tr>
                        <tr>
                            <td colspan="3" class="centrar" > 
                                <br /> 
                                <input name="enviar" id="enviar" type="submit" value="Ingresar" />
                            </td>    
                        </tr>
                         
                    </table>
                </form> 



            </div>	
        </div>

    </div>


</div>
<div id="backgroundPopup"></div>

<!-- -->


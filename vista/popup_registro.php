<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!-- POPUP INICIO DE SESIÓN-->

<?php
if(  !class_exists('registro') ) {
include("../controlador/registro.php");
}
$objetoRegistro = new registro;
?>


<div id="popupContact_registro">


    <div id="wrapper">
        <div id="headere">

            <!-- Div is for Shadow Overlay-->
            <div>

                <a id="popupContactClose_registro" title="Cerrar"><img src="imagenes/cerrar.png" width="20" height="20" /></a>

                <form id="registroF" action="../controlador/registro.php" name="registroF" method="POST">

                    <table>


                        <tr>
                            <td title="" style="color: #ffffff" class="negritaaderecha">
                                <label for="nombres" >Nombres:</label>
                            </td>
                            <td title="" style="text-align: left;">
                                <input title="nombres" required name="nombres" id="nombre" type="text" />
                            </td>
                        </tr>


                        <tr>
                            <td title="" style="color: #ffffff" class="negritaaderecha">
                                <label for="apellidos" >Apellidos:</label>
                            </td>
                            <td title="" style="text-align: left;">
                                <input title="" required name="apellidos" id="apellidos" type="text" />
                            </td>
                        </tr>

                        <tr>
                            <td title="" style="color: #ffffff" class="negritaaderecha">
                                <label for="codigo" >Código:</label>
                            </td>
                            <td title="" style="text-align: left;">
                                <input title="" required name="codigo" id="codigo" type="text" />
                            </td>
                        </tr>

                        <tr>
                            <td title="" style="color: #ffffff" class="negritaaderecha">
                                <label for="carrera" >Carrera:</label>
                            </td>
                            <td title="" style="text-align: left;">
                                <select title="" name="carrera" id="carrera">
                                    <option></option>
                                </select>    
                            </td>
                        </tr>


                        <tr>
                            <td title="" style="color: #ffffff" class="negritaaderecha">
                                <label for="fechanacimiento" >Fecha de Nacimiento:</label>
                            </td>
                            <td title="" style="text-align: left;">
                                <input title="" required name="fechanacimiento" id="fechanacimiento" type="text" />

                            </td>
                        </tr>

                        <tr>
                            <td title="" style="color: #ffffff" class="negritaaderecha">
                                <label for="fechaingresosemillero" >Fecha de ingreso al semillero:</label>
                            </td>
                            <td title="" style="text-align: left;">
                                <input title="" required name="fechaingresosemillero" id="fechaingresosemillero" type="text" />
                            </td>
                        </tr>

                        <tr>
                            <td title="" style="color: #ffffff" class="negritaaderecha">
                                <label for="contrasenia" >Contraseña:</label>
                            </td>
                            <td title="" style="text-align: left;">
                                <input title="" required name="contrasenia" id="contrasenia" type="password" />
                            </td>
                        </tr>


                        <tr>
                            <td title="" style="color: #ffffff" class="negritaaderecha">
                                <label for="rol" >Tipo de usuario:</label>
                            </td>
                            <td title="" style="text-align: left;">
                                <select title="" name="rol" id="rol">
                                    <?php
                                    $arrayroles = $objetoRegistro->traerRoles();
                                    
                                    foreach ($arrayroles as $rol) {
                                       echo "<option value=\"".$rol["idroles"]."\">".$rol["nombrerol"]."</option>"; 
                                    }
                                   
                                    ?>
                                </select> 
                            </td>
                        </tr>


                        <tr>
                            <td colspan="2" class="centrar" > 
                                <br /> 
                                <input name="registrar" id="registrar" type="submit" value="Registrarse" />
                            </td>    
                        </tr>

                    </table>
                </form> 



            </div>	
        </div>

    </div>


</div>
<div id="backgroundPopup_registro"></div>

<!-- -->


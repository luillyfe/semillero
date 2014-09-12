<?php include("./plantilla/header.php"); ?>

<?php
include("../controlador/vision_controlador.php");
$objetoVision_controlador = new vision_controlador;
?>
<!--##########-->


<?php include("./plantilla/body_superior.php"); ?>       


<!-- VARIABLE -->
<?php
//print_r($resultadoVista);
$fila = $objetoVision_controlador->traervision();
echo "<h3>" . $fila->nombreinformacion . "</h3>";
echo $fila->contenidoinformacion;
?>


<!-- VARIABLE -->
<?php if (isset($_SESSION['tipousuario']) && ($_SESSION['tipousuario'] == 1)): ?>

    <a href="#">
        <div id="button_edit_sobreaditic" class="editar">

            Editar     

        </div> 
    </a>


    <div id="popupContact_edit_sobreaditic">
        <div id="wrapper">
            <div id="headere">

                <!-- Div is for Shadow Overlay-->
                <div>

                    <a id="popupContactClose_edit_sobreaditic" title="Cerrar esta ventana">
                        <img src="imagenes/cerrar.png" width="23" height="23" />
                    </a>

                    <br />
                    <form id="editvision" action="../controlador/vision_controlador.php" name="editvision" method="POST">
                        <center>
                            <textarea rows="9" cols="50" name="txta_editvision" id="txta_editvision"><?php echo $fila->contenidoinformacion; ?></textarea>
                            <br />
                            <input name="btn_editvision" value="Actualizar" id="btn_editvision" type="submit"/>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="backgroundPopup_edit_sobreaditic"></div>    

<?php endif; ?>
<!--##########-->


<?php if (isset($_GET['cierretransaccion']) && ($_GET['cierretransaccion'] == 'true')) : ?>


    <div id="popupContact_cierre">

        <br />
        <div>
            <form id="login" action="../controlador/redireccion.php?destino=vision.php"  method="POST">
                <?php echo $_GET['textoaviso'] ?><br />
                <input name="aceptar" value="OK!" id="Aceptar" type="submit" />
            </form>
        </div>
    </div>
    <div id="backgroundPopup_cierre"></div>


<?php endif; ?>


<?php include("./plantilla/body_inferior.php"); ?>
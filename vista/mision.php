<?php include("./plantilla/header.php"); ?>

<?php
include("../controlador/mision_controlador.php");
$objetoVision_controlador = new mision_controlador;
?>
<!--##########-->


<?php include("./plantilla/body_superior.php"); ?>       


<!-- VARIABLE -->
<?php
//print_r($resultadoVista);
$fila = $objetoVision_controlador->traermision();
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
                    <form id="editmision" action="../controlador/mision_controlador.php" name="editmision" method="POST">
                        <center>
                            <textarea rows="9" cols="50" name="txta_editmision" id="txta_editmision"><?php echo $fila->contenidoinformacion; ?></textarea>
                            <br />
                            <input name="btn_editmision" value="Actualizar" id="btn_editmision" type="submit"/>
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
            <form id="login" action="../controlador/redireccion.php?destino=mision.php"  method="POST">
                <?php echo $_GET['textoaviso'] ?><br />
                <input name="aceptar" value="OK!" id="Aceptar" type="submit" />
            </form>
        </div>
    </div>
    <div id="backgroundPopup_cierre"></div>


<?php endif; ?>


<?php include("./plantilla/body_inferior.php"); ?>
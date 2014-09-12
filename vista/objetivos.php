<?php include("./plantilla/header.php"); ?>


<link rel="stylesheet" type="text/css" href="css/fondomovil_2.css" />

<script type="text/javascript" src="js/popup_edit_objetivos_especificos.js"></script>

<link rel="stylesheet" type="text/css" href="css/css_popup_edit_objetivos_especificos.css" />


<?php
include("../controlador/objetivos_controlador.php");
$objetoObjetivos_controlador = new objetivos_controlador;
?>
<!--##########-->


<?php include("./plantilla/body_superior.php"); ?>       


<!-- VARIABLE -->
<?php
//print_r($resultadoVista);
$fila = $objetoObjetivos_controlador->traerobjetivogeneral();
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
                    <form id="editobjetivogeneral" action="../controlador/objetivos_controlador.php" name="editobjetivogeneral" method="POST">
                        <center>
                            <textarea rows="9" cols="50" name="txta_editobjetivogeneral" id="txta_editobjetivogeneral"><?php echo $fila->contenidoinformacion; ?></textarea>
                            <br />
                            <input name="btn_editobjetivogeneral" value="Actualizar" id="btn_editobjetivogeneral" type="submit"/>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="backgroundPopup_edit_sobreaditic"></div>    

<?php endif; ?>
<!--##########-->



<?php
echo '<br />';
$fila2 = $objetoObjetivos_controlador->traerobjetivosespecificos();
echo "<h3>" . $fila2->nombreinformacion . "</h3>";
echo $fila2->contenidoinformacion;
//var_dump($resultadoVista);
// echo($resultadoVista);
?>
<!--##########-->





<!-- MODIFICA OBJETIVOS ESPECIFICOS-->
<?php if (isset($_SESSION['tipousuario']) && ($_SESSION['tipousuario'] == 1)): ?>

    <a href="#">
        <div id="button_edit_objetivos_especificos" class="editar">

            Editar     

        </div> 
    </a>


    <div id="popupContact_edit_objetivos_especificos">
        <div id="wrapper_2">
            <div id="headere_2">

                <!-- Div is for Shadow Overlay-->
                <div>

                    <a id="popupContactClose_edit_objetivos_especificos" title="Cerrar esta ventana">
                        <img src="imagenes/cerrar.png" width="23" height="23" />
                    </a>

                    <br />
                    <form id="editobjetivosespecificos" action="../controlador/objetivos_controlador.php" name="editobjetivosespecificos" method="POST">
                        <center>
                            <textarea rows="9" cols="50" name="txta_editobjetivosespecificos" id="txta_editobjetivosespecificos"><?php echo $fila2->contenidoinformacion; ?></textarea>
                            <br />
                            <input name="btn_editobjetivosespecificos" value="Actualizar" id="btn_editobjetivosespecificos" type="submit"/>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="backgroundPopup_edit_objetivos_especificos"></div>    

<?php endif; ?>
<!--##########-->








<?php if (isset($_GET['cierretransaccion']) && ($_GET['cierretransaccion'] == 'true')) : ?>


    <div id="popupContact_cierre">

        <br />
        <div>
            <form id="login" action="../controlador/redireccion.php?destino=objetivos.php"  method="POST">
                <?php echo $_GET['textoaviso'] ?><br />
                <input name="aceptar" value="OK!" id="Aceptar" type="submit" />
            </form>
        </div>
    </div>
    <div id="backgroundPopup_cierre"></div>


<?php endif; ?>


<?php include("./plantilla/body_inferior.php"); ?>
<?php include("./plantilla/header.php"); ?>

<!-- VARIABLE -->
<?php
include("../controlador/sobreaditic.php");
$objetoSobreaditic = new sobreaditic;
?>
<!--##########-->


<?php include("./plantilla/body_superior.php"); ?>       


<!-- VARIABLE -->
<?php
//print_r($resultadoVista);
$fila = $objetoSobreaditic->traersobreaditic();
echo "<h3>" . $fila->nombreinformacion . "</h3>";
echo $fila->contenidoinformacion;
//var_dump($resultadoVista);
// echo($resultadoVista);
?>
<!--##########-->



<!-- VARIABLE -->
<?php if (isset($_SESSION['tipousuario']) && ($_SESSION['tipousuario'] == 1)): ?>

    <a   href="#">
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
                    <form id="editsobreaditic" action="../controlador/sobreaditic.php" name="editsobreaditic" method="POST">
                        <center>
                            <textarea rows="9" cols="50" name="txta_editsobreaditic" id="txta_editsobreaditic"><?php echo $fila->contenidoinformacion; ?></textarea>
                            <br />
                            <input name="btn_editsobreaditic" value="Actualizar" id="btn_editsobreaditic" type="submit"/>
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
            <form id="login" action="../controlador/redireccion.php?destino=index.php"  method="POST">
                <?php echo $_GET['textoaviso'] ?><br />
                <input name="aceptar" value="OK!" id="Aceptar" type="submit"/>
            </form>
        </div>
    </div>
    <div id="backgroundPopup_cierre"></div>
        
        
<?php endif; ?>
            



<?php include("./plantilla/body_inferior.php"); ?>
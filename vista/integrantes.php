<?php include("./plantilla/header.php"); ?>

    
    
<?php
include("../controlador/integrantes_controlador.php");
$objetoIntegrantes_controlador = new integrantes_controlador;
?>
<!--##########-->
<link rel="stylesheet" type="text/css" href="css/estilo_tabla_integrantes.css" />
    
<script type="text/javascript">
    
    $(document).ready(function() {
        
        $("#formelimina").submit(function() {
                        
            if(!confirm('¿Esta seguro de eliminar a este integrante?')) {
               return false; 
            }
            
        });
        
        
    });
    
</script>


<?php include("./plantilla/body_superior.php"); ?>       


<!-- VARIABLE -->
<div style="text-align: right ">
<form action="../controlador/integrantes_controlador.php" method="POST">
    <input type="hidden" name="nuevo" value="true" />
    <button style="background: #BFE9F3;" type="submit">
        <a title="Crear Un Nuevo Integrante">
            <img src="./imagenes/nuevo.png" />
        </a>
    </button>
</form> 
</div>    

<?php
//print_r($resultadoVista);





echo "<div id=\"itsthetable\"><table>";
echo "<thead>";
echo "<tr><th>";
echo "Nombres";
echo "</th><th>";
echo "Apellidos";
echo "</th><th>";
echo "Código";
echo "</th><th>";
echo "Carrera";
echo "</th><th>";
echo "Fecha de Nacimiento";
echo "</th><th>";
echo "Fecha de Ingreso al Semillero";
echo "</th><th>";
echo "Ingresado Por";
echo "</th><th>";
echo "Rol";
echo "</th><th>";
echo "Acciones";
echo "</th></tr></thead><tbody>";


$arrayIntegrantes = $objetoIntegrantes_controlador->traerintegrantessemillero();


foreach ($arrayIntegrantes as $integrante) {

    echo "<tr><th scope=\"row\">";
    echo $integrante['nombres'];
    echo "</th><td>";
    echo $integrante["apellidos"];
    echo "</td><td>";
    echo $integrante["codigo"];
    echo "</td><td>";
    echo $integrante["nombre"];
    echo "</td><td>";
    echo $integrante["fechanacimiento"];
    echo "</td><td>";
    echo $integrante["fechaingresosemillero"];
    echo "</td><td>";
    echo $integrante["ingresadopor"];
    echo "</td><td>";
    echo $integrante["nombrerol"];
    echo "</td><td>";
    echo "<form action=\"../controlador/integrantes_controlador.php\" method=\"POST\">";
    echo "<input type=\"hidden\" name=\"id\" value=\"".$integrante["idintegrantessemillero"]."\" />";
    echo "<input type=\"hidden\" name=\"actualiza\" value=\"true\" />";
    echo "<button style=\"background: blue;\" type=\"submit\"><a title=\"Actualizar este integrante\">";
    echo "<img src=\"./imagenes/modifica.png\" /></a></button></form>";
    
    echo "<form id=\"formelimina\" action=\"../controlador/integrantes_controlador.php\" method=\"POST\">";
    echo "<input type=\"hidden\" name=\"id\" value=\"".$integrante["idintegrantessemillero"]."\" />";
    echo "<input type=\"hidden\" name=\"elimina\" value=\"true\" />";
    echo "<button id=\"enveliminar\" type=\"submit\" style=\"background: red;\" ><a  title=\"Eliminar este integrante\">";
    echo "<img src=\"./imagenes/elimina.png\" /></a></button></form>";
}

echo "</tbody></table></div>";
?>

<div style="text-align: right ">
<form action="../controlador/integrantes_controlador.php" method="POST">
    <input type="hidden" name="nuevo" value="true" />
    <button style="background: #BFE9F3;" type="submit">
        <a title="Crear Un Nuevo Integrante">
            <img src="./imagenes/nuevo.png" />
        </a>
    </button>
</form> 
</div>


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
                    <form id="editintegrantes" action="../controlador/integrantes_controlador.php" name="editintegrantes" method="POST">
                        <center>
                            <textarea rows="9" cols="50" name="txta_editintegrantes" id="txta_editintegrantes"><?php echo $fila->contenidoinformacion; ?></textarea>
                            <br />
                            <input name="btn_editintegrantes" value="Actualizar" id="btn_editintegrantes" type="submit"/>
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
            <form id="login" action="../controlador/redireccion.php?destino=integrantes.php"  method="POST">
    <?php echo $_GET['textoaviso'] ?><br />
                <input name="aceptar" value="OK!" id="Aceptar" type="submit" />
            </form>
        </div>
    </div>
    <div id="backgroundPopup_cierre"></div>


<?php endif; ?>


<?php include("./plantilla/body_inferior.php"); ?>
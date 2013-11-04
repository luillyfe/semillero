<?php

include("conexion.php");
$db = new MySQL();

$textproyecto = htmlspecialchars( $_POST['textproyecto'] );
$index        = htmlspecialchars( $_POST['index'] );
//echo $index;
$index    = $index + 1;

$db->consulta(" UPDATE proyecto 
                SET descripcion_proyecto='".$textproyecto."' 
                WHERE idProyecto=".$index." ");
echo $textproyecto;
?>
<input type="button" class="edit" value="Editar" onclick="edit('<?php echo $index; ?>')" />


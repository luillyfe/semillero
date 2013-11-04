<?php

include("conexion.php");

$db = new MySQL();
$consulta = $db->consulta(" SELECT descripcion_informacion 
                            FROM informacion 
                            WHERE titulo_informacion = 'Nosotros' 
                            OR titulo_informacion = 'Objetivo general'
                            OR titulo_informacion = 'Objetivos especificos'");
?>

<textarea id="edit" > <?php $resultados = $db->fetch_array($consulta);
            echo $resultados['descripcion_informacion']."<br />";
?></textarea>  

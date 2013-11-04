<?php

include("conexion.php");

$db = new MySQL();
$consulta = $db->consulta("SELECT * FROM informacion");
if($db->num_rows($consulta)>0){
  while($resultados = $db->fetch_array($consulta)){ 
   echo "ID: ".$resultados['idInformacion']."<br />";
   echo "titulo: ".$resultados['titulo']."<br />";
   echo "descripcion: ".$resultados['descripcion']."<br />"; 
 }
}
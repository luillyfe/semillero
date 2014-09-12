<?php

session_start();
if( empty($_SESSION["id"]) ):
  header("HTTP/1.1 401 Not autorizado");
  exit ("No autorizado");
endif;

if( !empty($_POST["title"]) ):
  include("../db/conexion.php");
  $db = new MySQL();
  $db->consulta(" INSERT INTO Proyecto (nombre_proyecto, estado_proyecto, 
                              descripcion_proyecto, inicio_proyecto, fin_proyecto, 
                              Integrante_idIntegrante)
                  VALUES('".$_POST["title"]."','".$_POST["state"]."',
                        '".$_POST["description"]."','".$_POST["beginProject"]."',
                        '".$_POST["endProject"]."',".$_SESSION["id"].") ");

  header("Location: /semillero/proyectos.php");
endif;

?>

<form id="writeProject" action="forms/formProyectos.php" method="POST" >
  <fieldset>
    <legend>Escribe!</legend>
      <input type="text" placeholder="titulo del proyecto" name="title" required/>
      <input type="date" placeholder="fecha de entrega" name="endProject" required/>
      <textarea class="textEdit" placeholder="descripcion" name="description" 
        required></textarea>
      <input type="text" placeholder="fecha de inicio" name="beginProject" required/>
      <input type="text" placeholder="estado del proyecto" name="state" required/>
    <input type="submit" value="Escribir" >
  </fieldset>
</form>
<?php

session_start();
if( empty($_SESSION["id"]) ):
  header("HTTP/1.1 401 Not autorizado");
  exit ("No autorizado");
endif;

if( !empty($_POST["title"]) ):
  include("../db/conexion.php");
  $db = new MySQL();
  $db->consulta(" INSERT INTO Informacion (titulo_informacion, 
                              descripcion_informacion, Integrante_idIntegrante) 
                  VALUES('".$_POST["title"]."','".$_POST["description"]."',
                         ".$_SESSION["id"].") ");

  header("Location: /semillero/informacion.php");
endif;

?>

<form id="writeInformation" action="forms/formInformation.php" method="POST" >
  <fieldset>
    <legend>Escribe!</legend>
      <input type="text" name="title" id="title" placeholder="titulo" required/><br>
      <textarea class="textEdit" id="newInformation" name="description" 
        placeholder="descripcion" required></textarea><br>
    <input type="submit" value="Escribir" >
  </fieldset>
</form>
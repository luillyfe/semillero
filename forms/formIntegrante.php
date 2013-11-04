<?php

session_start();
if( empty($_SESSION["id"]) ):
  header("HTTP/1.1 401 Not autorizado");
  exit ("No autorizado");
endif;

if( !empty($_POST["nameU"]) ):
  include("../db/conexion.php");
  $db = new MySQL();
  $db->consulta(" INSERT INTO integrante (nombre_integrante, 
                              apellido_integrante, usuario, password)
                  VALUES('".$_POST["nameU"]."','".$_POST["lastname"]."',
                        '".$_POST["user"]."','".$_POST["password"]."') ");

  header("Location: /semillero/semillero/integrantes.php");
endif;

?>

<form id="writeUser" action="forms/formIntegrante.php" method="POST" >
  <fieldset>
    <legend>Escribe!</legend>
      <input type="text" placeholder="Nombre" name="nameU" required/><br>
      <input type="date" placeholder="Apellido" name="lastname" required/><br>
      <input type="text" placeholder="Usuario" name="user" required/><br>
      <input type="password" placeholder="Contrasena" name="password" required/><br>  
    <input type="submit" value="Escribir" >
  </fieldset>
</form>
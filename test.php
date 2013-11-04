<?php

include("conexion.php");

$db = new MySQL();
$consulta = $db->consulta(" SELECT descripcion_informacion 
                            FROM informacion 
                            WHERE titulo_informacion = 'Nosotros' 
                            OR titulo_informacion = 'Objetivo general'
                            OR titulo_informacion = 'Objetivos especificos'");
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
	<script type="text/javascript">
		function cargarContenido() { 
			// cargamos la pagina pagina.html en el div contenido 
			$("#welcome").load('index2.php'); 
		}
	</script>
</head>
<body>

  <div id='reloj'>

        <h1>Bienvenidos al semillero</h1>
        <p id="welcome" ><?php $resultados = $db->fetch_array($consulta);
            echo $resultados['descripcion_informacion']."<br />";
          ?>

         <input type="button" value="Hora..." onclick='cargarContenido()' />
        </p> 
  </div> 

</body>
</html>
<?php

include("conexion.php");

$db = new MySQL();
$consulta = $db->consulta("	SELECT descripcion_informacion 
							FROM informacion 
							WHERE titulo_informacion = 'Mision' 
							OR titulo_informacion = 'Vision'");
?>

<!DOCTYPE HTML>
<html>

<head>
  <title>Unisimon</title>
  <meta name="description" content="Semillero de tecnologias de la informacion
    y comunicacion de la Universidad Simon Bolivar" />

  <meta name="keywords" content="semillero unisimon, tecnologia" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo"><h1>Semillero de tecnologías de la informacion y comunicación</h1></div>
      <nav>
        <ul class="lavaLampWithImage" id="lava_menu">
          <li><a href="index.php">AdiTIC</a></li>
          <li class="current"><a href="nosotros.php">Nosotros</a></li>
          <li><a href="integrantes.php">Integrantes</a></li>
          <li><a href="proyectos.php">Proyectos</a></li>
          <li><a href="#">Unisimon</a></li>
        </ul>
      </nav>
    </header>
    <div id="site_content">
      <div id="sidebar_container">
        <div class="gallery">
          <ul class="images">
            <li class="show"><img width="450" height="450" src="images/1.jpg" alt="photo_one" /></li>
            <li><img width="450" height="450" src="images/2.jpg" alt="photo_two" /></li>
          </ul>
        </div>
      </div>
      <div id="content">
        <h1>Mision</h1>
        <p class="welcome" id="mision"><?php $resultados = $db->fetch_array($consulta);
        		echo $resultados['descripcion_informacion']."<br />";
        	?>
          <input type="button" class="edit" value="Editar" onclick='edit(4)' />
        </p>
        <h1>Vision</h1>
        <p class="welcome" id="vision" ><?php $resultados = $db->fetch_array($consulta);
        		echo $resultados['descripcion_informacion']."<br />";
        	?>
          <input type="button" class="edit" value="Editar" onclick='edit(5)' />
        </p>
      </div>
    </div>
    <footer>
      <p><a href="index.php">AdiTIC</a> | <a href="nosotros.php">Nosotros</a> | <a href="integrantes.php">Integrantes</a> 
      | <a href="proyectos.php">Proyectos</a> | <a href="#">Unisimon</a></p>
    </footer>
  </div>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="js/jquery.lavalamp.min.js"></script>
  <script type="text/javascript" src="js/image_fade.js"></script>
  <script type="text/javascript">
    $(function() {
      $("#lava_menu").lavaLamp({
        fx: "backout",
        speed: 700
      });
    });
  </script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
  <script type="text/javascript">
    function edit(edit) { 
      //alert($(".welcome:last").text());
      switch(edit){
        case 4:
          var mision = $(".welcome:first").text(); 
          $("#mision").load('welcomEdit.php #editMision', {  mision:mision });
          break;
        case 5:
          var vision = $(".welcome:last").text();
          $("#vision").load('welcomEdit.php #editVision', { vision:vision });
          break;

        default: break;
      } 
    }
    function send(send) { 
      //alert($('#textObjetiveE').val());
      switch(send){
        case 4: 
          var textMision = $('#textMision').val();
          $("#mision").load('welcomSend.php', { textMision:textMision});
          break;
        case 5:
          var textVision = $('#textVision').val();
          $("#vision").load('welcomSend.php', { textVision:textVision });
          break;

        default: break;
      } 

    }

  </script>
</body>
</html>

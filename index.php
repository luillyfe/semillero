<?php

include("conexion.php");

$db = new MySQL();
$consulta = $db->consulta(" SELECT descripcion_informacion,
                                   Integrante_idIntegrante 
                            FROM informacion 
                            WHERE titulo_informacion = 'Home' 
                            OR titulo_informacion = 'Objetivo general'
                            OR titulo_informacion = 'Objetivos especificos'");
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
          <li class="current"><a href="index.php">AdiTIC</a></li>
          <li><a href="nosotros.php">Nosotros</a></li>
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
            <li><img width="450" height="450" src="images/3.jpg" alt="photo_two" /></li>
            <li><img width="450" height="450" src="images/4.jpg" alt="photo_two" /></li>
            <li><img width="450" height="450" src="images/5.jpg" alt="photo_two" /></li>
          </ul>
        </div>
      </div>
      <div id="content">
        
        <h1>Bienvenidos al semillero</h1>
        <p class="welcome" id="home" >
          <?php $resultados = $db->fetch_array($consulta);
            echo $resultados['descripcion_informacion'];
          ?>  
          <input type="button" class="edit" value="Editar" onclick='edit(1)' />
        </p>

        <h2>Objetivo general</h2>
        <p class="welcome" id="objetiveG" >
          <?php $resultados = $db->fetch_array($consulta);
            echo $resultados['descripcion_informacion'];
          ?>
          <input type="button" class="edit" value="Editar" onclick='edit(2)' />
        </p>
        
        <h2>Objetivos especificos:</h2>
        <ul class="welcome" id="objetiveE">
          <?php $resultados = $db->fetch_array($consulta);
            echo $resultados['descripcion_informacion'];
          ?>
          <input type="button" class="edit" value="Editar" onclick='edit(3)' />
        </ul>
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
      switch(edit){
        case 1:
          var welcome = $(".welcome:first").text(); 
          $("#home").load('welcomEdit.php #editHome', {  welcome:welcome });
          break;
        case 2:
          var objetiveG = $("p.welcome:last").text();
          $("#objetiveG").load('welcomEdit.php #editObjetiveG', { objetiveG:objetiveG });
          break;
        case 3:
          var objetiveE = $(".welcome:last").text();
          $("#objetiveE").load('welcomEdit.php #editObjetiveE', { objetiveE:objetiveE });
          break;

        default: break;
      } 
    }

    function send(send) { 
      switch(send){
        case 1: 
          var textHome = $('#textHome').val();
          $("#home").load('welcomSend.php', { textHome:textHome});
          break;
        case 2:
          var textObjetiveG = $('#textObjetiveG').val();
          $("#objetiveG").load('welcomSend.php', { textObjetiveG:textObjetiveG });
          break;
        case 3:
          var textObjetiveE = $('#textObjetiveE').val();
          $("#objetiveE").load('welcomSend.php', { textObjetiveE:textObjetiveE });
          break;

        default: break;
      } 

    }
  </script>
</body>
</html>

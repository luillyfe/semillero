<?php

session_start();
include("db/conexion.php");

$db = new MySQL();
$consulta = $db->consulta(" SELECT  idIntegrante, nombre_integrante, 
                                    apellido_integrante, usuario, password 
                            FROM    Integrante");
?>

<!DOCTYPE HTML>
<html>

<head>
  <title>Unisimon</title>
  <meta name="description" content="Integranes del semillero Aditic de la
                                    Universidad Simon Bolivar" />

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
          <li><a href="nosotros.php">Nosotros</a></li>
          <li class="current"><a href="integrantes.php">Integrantes</a></li>
          <li><a href="proyectos.php">Proyectos</a></li>
          <li><a href="informacion.php">Mas+</a></li>
          <?php if( empty($_SESSION["id"]) ):
                  echo "<li><a href='signin.php'>Sign in</a></li>";

                else: echo "<li><a href='signout.php'>Sign out</a></li>";   
                endif; 
          ?>
        </ul>
      </nav>
    </header>
    <div id="site_content">
      <div id="sidebar_container">
        <div id="gallery">
          <ul class="images">
            <li class="show"><img width="450" height="450" src="images/1.jpg" alt="photo_one" /></li>
            <li><img width="450" height="450" src="images/2.jpg" alt="photo_two" /></li>
          </ul>
        </div>
      </div>
      <div id="content">
        <h1>Quienes somos</h1>
        <ul>

        <?php while($resultados = $db->fetch_array($consulta)){ ?>          
          <li class="welcome" id="integrante<?= $resultados['idIntegrante']; ?>" >
            <h2><p class="name" ><?php echo $resultados['nombre_integrante']   ?></p> 
            <input type="button"  class="edit" value="Editar" 
              onclick="edit('<?= $resultados['idIntegrante']; ?>')" />
          <span class="lastname" ><?= $resultados['apellido_integrante'] ?></span></h2></li>        
        <?php } ?>
        
        </ul>
        <p></p>
        <?php if( !empty($_SESSION["id"]) ) { echo "<input type='button' id='new' value='Nuevo'
            onclick='nuevo()' />"; } ?> 
      </div>
    </div>
    <footer>
      <p><a href="index.php">AdiTIC</a> | <a href="nosotros.php">Nosotros</a> | <a href="integrantes.php">Integrantes</a> 
      | <a href="proyectos.php">Proyectos</a> | <a href="informacion.php">Mas+</a> |
      <p>Copyright &copy; CSS3_grass | <a href="http://www.css3templates.co.uk">design from css3templates.co.uk</a></p>
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
    <?php if( empty($_SESSION["id"]) ){ echo "edit = .()(/0;"; } ?>

    function edit(idIntegrante) {
      var nombre    = $("li#integrante"+idIntegrante+" p").text();
      var apellido  = $("li#integrante"+idIntegrante+" span").text();

      $("li#integrante"+idIntegrante).load("welcomEdit.php .editIntegrante", {idIntegrante:idIntegrante,
                                                                    nombre:nombre, apellido:apellido });      
    }
    
    function send(idIntegrante) {
      var textnombre    = $("div#editIntegrante"+idIntegrante+" input:text:first").val();
      var textapellido  = $("div#editIntegrante"+idIntegrante+" input:text:last").val();
 
      $("li#integrante"+idIntegrante).load("welcomSend.php", {idIntegrante:idIntegrante,
                                                                textnombre:textnombre, textapellido:textapellido });     
    }

    function nuevo(){
      $( "#content" ).load("forms/formIntegrante.php");
    }
  </script>
</body>
</html>

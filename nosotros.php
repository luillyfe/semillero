<?php

session_start();
if ( !isset($_SESSION['autor']) ){ $_SESSION['autor'] = array_fill(1, 100, "Inicia session"); }

include("db/conexion.php");
$db = new MySQL();
$information = $db->consulta("SELECT idInformacion, titulo_informacion,
                                  descripcion_informacion, Integrante_idIntegrante
							               FROM Informacion 
							               WHERE titulo_informacion = 'Mision' 
							               OR titulo_informacion = 'Vision'");
?>

<!DOCTYPE HTML>
<html>

<head>
  <title>Unisimon</title>
  <meta name="description" content="Quienes somos y para donde vamos, Mision y Vision del
                                    semillero." />

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
        <div class="gallery">
          <ul class="images">
            <li class="show"><img width="450" height="450" src="images/1.jpg" alt="photo_one" /></li>
            <li><img width="450" height="450" src="images/2.jpg" alt="photo_two" /></li>
          </ul>
        </div>
      </div>
      <div id="content">

        <?php for($i=0;$i<2;$i++): $rowInformation = $db->fetch_array($information) ?>
        <div class="welcome" id="information<?= $rowInformation['idInformacion']; ?>">
          <h1><?= $rowInformation['titulo_informacion'] ?></h1>
          <p><?= $rowInformation['descripcion_informacion'] ?>
             <input type="button" class="edit" value="Editar" 
                onclick="edit('<?= $rowInformation['idInformacion'] ?>')" />
             <input type="button" class="edit" 
                value="<?= $_SESSION['autor'][$rowInformation['Integrante_idIntegrante']] ?>" /></p>

        </div><?php endfor; ?>       

      </div>
    </div>
    <footer>
      <p><a href="index.php">AdiTIC</a> | <a href="nosotros.php">Nosotros</a> | <a href="integrantes.php">Integrantes</a> 
      | <a href="proyectos.php">Proyectos</a> | <a href="informacion.php">Mas+</a> |
      <p>Copyright &copy; CSS3_grass | <a href="http://www.css3templates.co.uk">design from css3templates.co.uk</a></p>
    </footer>
  </div>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
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
  <script type="text/javascript">
    <?php if( empty($_SESSION["id"]) ) { echo "!·$%&)/)=?¿"; } ?>

    function edit(edit) {
      var information = $("div#information"+edit+" p").text();
      $("div#information"+edit+" p").load("welcomEdit.php .editInformation", { information:information, edit:edit });
    }
            
    function send(send) { 
      var textInformation = $('div#editInformation'+send+" textarea").val();
      $('div#information'+send+" p").load( 'welcomSend.php', { textInformation:textInformation, send:send });
    }
  </script>
</body>
</html>

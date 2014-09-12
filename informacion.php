<?php

session_start();
if ( !isset($_SESSION['autor']) ){ $_SESSION['autor'] = array_fill(1, 100, "Inicia session"); }

include("db/conexion.php");
$db = new MySQL();
$information = $db->consulta("SELECT  idInformacion, titulo_informacion, 
                                      descripcion_informacion, Integrante_idIntegrante 
                              FROM    Informacion");
$lenght = mysql_num_rows($information);
mysql_data_seek($information, 5);
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
          <li><a href="nosotros.php">Nosotros</a></li>
          <li><a href="integrantes.php">Integrantes</a></li>
          <li><a href="proyectos.php">Proyectos</a></li>
          <li class="current"><a href="informacion.php">Mas+</a></li>
          <?php if( empty($_SESSION["id"]) ):
                  echo "<li><a href='signin.php'>Sign in</a></li>";
                else: echo "<li><a href='signout.php'>Sign out</a></li>";   
          endif; ?>
        </ul>
      </nav>
    </header>
    <div id="site_content">
      <div id="content">

      <?php for($i=5;$i<$lenght;$i++): $rowInformation = $db->fetch_array( $information ); ?>

      <div class="welcome" id="information<?= $rowInformation['idInformacion']; ?>" >        
        <h1><?= $rowInformation['titulo_informacion'];?></h1>
        <p><?= $rowInformation['descripcion_informacion']; ?>
        <input type="button" class="edit" value="Editar" 
          onclick="edit('<?= $rowInformation['idInformacion']; ?>')" />
        <input type="button" class="edit" 
            value="<?= $_SESSION['autor'][$rowInformation['Integrante_idIntegrante']] ?>" /></p>
      
      </div><?php endfor; ?>
      <?php if( !empty($_SESSION["id"]) ) { echo "<input type='button' id='new' value='Nuevo'
            onclick='nuevo()' />"; } ?>  
      
      </div>     
    </div>
    <footer>
      <p><a href="index.php">AdiTIC</a> | <a href="nosotros.php">Nosotros</a> 
      | <a href="integrantes.php">Integrantes</a> | <a href="proyectos.php">Proyectos</a> 
      | <a href="informacion.php">Mas+</a> | <p>Copyright &copy; CSS3_grass 
      | <a href="http://www.css3templates.co.uk">design from css3templates.co.uk</a></p>
    </footer>
  </div>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.validate.js"></script>
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
      var titulo      = $("div#information"+edit+" h1").text();

      $("div#information"+edit).load('welcomEdit.php .editNotice', {  information:information, edit:edit,
                                                                          titulo:titulo });    
    }

    function send(send) {
      var textTitulo = $("div#editNotice"+send+" input:text").val();
      var textNotice = $("div#editNotice"+send+" textarea").val();
      
      $("div#information"+send).load('welcomSend.php', {  textNotice:textNotice, send:send,
                                                          textTitulo:textTitulo });
    }

    function nuevo() {
      $( "div#content" ).load( "forms/formInformation.php" );
    } 
  </script>
</body>
</html>

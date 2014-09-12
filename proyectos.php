<?php

session_start();
if ( !isset($_SESSION['autor']) ){ $_SESSION['autor'] = array_fill(1, 100, "Inicia session"); }

include("db/conexion.php");
$db = new MySQL();
$consulta = $db->consulta(" SELECT  idProyecto, nombre_proyecto, estado_proyecto, Integrante_idIntegrante,
                                    descripcion_proyecto, inicio_proyecto, fin_proyecto 
                            FROM    Proyecto");
?>

<!DOCTYPE HTML>
<html>

<head>
  <title>Unisimon</title>
  <meta name="description" content="Proyectos del semillero Aditic" />

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
          <li class="current"><a href="proyectos.php">Proyectos</a></li>
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
        <h1>Líneas de investigación:</h1>
        <div id="blog_container">

        <?php while($resultados = $db->fetch_array($consulta)){ ?>          
          <div class="blog"><h2>Fin</h2><h3><?php echo substr($resultados['fin_proyecto'], 0, 10 ); ?></h3></div>
          <h4 class="select"><a href="#"><?php echo $resultados['nombre_proyecto']; ?></a></h4>
          <p class="welcome"><?php echo $resultados['descripcion_proyecto']; ?>
              <input type="button"  class="edit" value="Editar" 
          onclick="edit('<?php echo $resultados['idProyecto']; ?>')" />
          <input type="button" class="edit" value="<?= $_SESSION['autor'][$resultados['Integrante_idIntegrante']] ?>"
           /></p>
          <h3 class="begin"><?php echo substr($resultados['inicio_proyecto'], 0, 10 ); ?></h3>
          <h3 class="state"><?php echo $resultados['estado_proyecto']; ?></h3>        
        <?php } ?>
        <?php if( !empty($_SESSION["id"]) ) { echo "<input type='button' id='new' value='Nuevo'
            onclick='nuevo()' />"; } ?>  
        
        </div>

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
  <?php if( empty($_SESSION["id"]) ){ echo "edit = .()(/0;";  }; ?>

    function edit(index) {
      index = index-1;
      var finProyecto     = ( $("div.blog h3").eq(index) ).text();
      var inicioProyecto  = ( $("h3.begin").eq(index) ).text();
      var tituloProyecto  = ( $("h4.select").eq(index) ).text();
      var proyecto        = ( $("p.welcome").eq(index) ).text();
      var estado          = ( $("h3.state").eq(index) ).text();

      ( $("p.welcome").eq(index) ).load('welcomEdit.php .editProyecto', {  proyecto:proyecto, index:index,
            inicioProyecto:inicioProyecto, estado:estado, tituloProyecto:tituloProyecto, finProyecto:finProyecto });
      ( $("h3.begin").eq(index) ).text("");
      ( $("h3.state").eq(index) ).text("");
      ( $("h4.select").eq(index) ).text("");
      ( $("div.blog h3").eq(index) ).text("");
    }
    function send(index) {
      var textinicio    = ( $("#inicio"+index) ).val();
      var texttitulo    = ( $("#titulo"+index) ).val();
      var textfin       = ( $("#fin"+index) ).val();
      var textproyecto  = ( $("#"+index) ).val();
      var textestado    = ( $("#estado"+index ) ).val();

      ( $("p.welcome").eq(index) ).load('welcomSend.php', {  textproyecto:textproyecto, index:index,
                            textinicio:textinicio, textestado:textestado, texttitulo:texttitulo, textfin:textfin });
      ( $("h3.begin").eq(index) ).text(textinicio);
      ( $("h3.state").eq(index) ).text(textestado);
      ( $("h4.select").eq(index) ).text(texttitulo);
      ( $("div.blog h3").eq(index) ).text(textfin);
    }

    function nuevo() {
      $( "#blog_container" ).load("forms/formProyectos.php");      
    }
  </script>
</body>
</html>

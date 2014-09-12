<?php

session_start();
if( empty($_POST["user"]) ):
  if( !isset($_SESSION["id"]) ):
    echo "No se ha iniciado session";
  else: header("Location: /semillero/");
  endif;

else:
  include("db/conexion.php");
  $db = new MySQL();

  $consulta = $db->consulta(" SELECT  idIntegrante, nombre_integrante, 
                                      apellido_integrante, usuario, password 
                              FROM    Integrante
                              WHERE   usuario='".$_POST["user"]."'
                              AND     password='".$_POST["password"]."' ");

  if( $db->num_rows($consulta) == 1):
    $user = $db->fetch_array($consulta);

    $_SESSION["id"]       = $user['idIntegrante'];;
    $_SESSION["user"]     = $user['usuario'];
    $_SESSION["password"] = $user['password'];

    $autor = $db->consulta("SELECT  idIntegrante, nombre_integrante, 
                                apellido_integrante, usuario, password 
                        FROM    Integrante");

    $lenght = mysql_num_rows($autor);
    for ( $i=0; $i < $lenght; $i++ ){
      $idautor = mysql_fetch_row($autor);
      $data[$idautor[0]] = $idautor[1]; 
    }
    $_SESSION['autor'] = $data;
    header("Location: /semillero/");

    else: echo "La combinacion usuario/contrasena es invalida";

  endif;

endif;

?>

<!DOCTYPE html>
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
          <li><a href="signin.php">Sign in</a></li>
        </ul>
      </nav>
    </header>
    
    <div id="site_content">
      <div id="content">
        <form action="signin.php" method="POST" >
	  		<fieldset>
	    		<legend>Quien eres ?</legend>
	    		Usuario:     <input type="text" name="user" required/><br>
	    		Contrasena:  <input type="password" name="password" required/><br>
                <input type="submit" value="entrar" >
	  		</fieldset>
		    </form>
	  </div>
    </div>

    <footer>
      <p><a href="index.php">AdiTIC</a> | <a href="nosotros.php">Nosotros</a> 
      | <a href="integrantes.php">Integrantes</a> 
      | <a href="proyectos.php">Proyectos</a> 
    </footer>
 </div>




	
</body>
</html>
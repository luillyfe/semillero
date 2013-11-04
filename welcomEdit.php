<?php

session_start();
if( empty($_SESSION["id"]) ):
	header("HTTP/1.1 401 Not autorizado");
	exit ("No autorizado");
endif;

$information	= trim(htmlspecialchars($_POST['information']));
$edit 			= trim(htmlspecialchars( $_POST['edit'] ));

$index 			= trim(htmlspecialchars( $_POST['index'] ));
$idIntegrante 	= trim(htmlspecialchars( $_POST['idIntegrante'] ));
?>
<div class="editInformation" >
	<textarea class="textEdit" id="textInformation<?= $edit ?>" required>
	<?= $information ?></textarea>
	<input type="button" class="edit" value="Enviar" 
		onclick="send('<?= $edit ?>')" />
</div>

<div class="editNotice" >
	<input type="text" placeholder="titulo" id="titulo<?= $edit; ?>"
		value="<?= trim( htmlspecialchars($_POST['titulo']) ) ?>" required/>
	<textarea class="textEdit" id="textInformation<?= $edit ?>" required>
	<?= $information ?></textarea>
	<input type="button" class="edit" value="Enviar" 
		onclick="send('<?= $edit ?>')" />
</div>

<div class="editProyecto">
	<input type="text" placeholder="titulo del proyecto" id="titulo<?= $index; ?>"
		value="<?= trim( htmlspecialchars($_POST['tituloProyecto']) ) ?>" required/>
	<input type="date" placeholder="fecha de entrega" id="fin<?= $index; ?>"
		value="<?= htmlspecialchars( $_POST['finProyecto'] ) ?>" required/>
	<textarea class="textEdit" placeholder="descripcion" id="<?= $index; ?>" 
		required><?= trim(htmlspecialchars( $_POST['proyecto'] )) ?></textarea>
	<input type="text" placeholder="fecha de inicio" id="inicio<?= $index; ?>"
		value="<?= htmlspecialchars( $_POST['inicioProyecto'] ) ?>" required/>
	<input type="text" placeholder="estado del proyecto" id="estado<?= $index; ?>"
		value="<?= htmlspecialchars( $_POST['estado'] ) ?>" required/>
	<input type="button" class="edit" value="Enviar" onclick="send('<?= $index; ?>')" />
</div>

<div class="editIntegrante" >
	<input type="text" placeholder="nombre" id="nombre<?= $idIntegrante; ?>" 
		value="<?= trim(htmlspecialchars( $_POST['nombre'] )) ?>" required/>
	<input type="text" placeholder="apellido" id="apellido<?= $idIntegrante; ?>" 
		value="<?= trim(htmlspecialchars( $_POST['apellido'] )) ?>" required/>
	<input type="button" class="edit" value="Enviar" onclick="send('<?= $idIntegrante; ?>')" />
</div>
<?php
$welcome 	= trim(htmlspecialchars($_POST['welcome']));
$objetiveG 	= trim(htmlspecialchars($_POST['objetiveG']));
$objetiveE 	= trim(htmlspecialchars($_POST['objetiveE']));
$mision 	= trim(htmlspecialchars($_POST['mision']));
$vision 	= trim(htmlspecialchars($_POST['vision']));

$index 		= trim(htmlspecialchars( $_POST['index'] ));
$idIntegrante = trim(htmlspecialchars( $_POST['idIntegrante'] ));
?>
<div id="editHome" >
	<textarea id="textHome" ><?php echo $welcome ?></textarea>
	<input type="button" class="edit" value="Enviar" onclick='send(1)' />
</div>

<div id="editObjetiveG">
	<textarea id="textObjetiveG" ><?php echo $objetiveG ?></textarea>
	<input type="button" class="edit" value="Enviar" onclick='send(2)' />
</div>

<div id="editObjetiveE">
	<textarea id="textObjetiveE" ><?php echo $objetiveE ?></textarea>
	<input type="button" class="edit" value="Enviar" onclick='send(3)' />
</div>

<div id="editMision">
	<textarea id="textMision" ><?php echo $mision ?></textarea>
	<input type="button" class="edit" value="Enviar" onclick='send(4)' />
</div>

<div id="editVision">
	<textarea id="textVision" ><?php echo $vision ?></textarea>
	<input type="button" class="edit" value="Enviar" onclick='send(5)' />
</div>

<div id="editProyecto">
	<input type="text" placeholder="titulo del proyecto" id="titulo<?php echo $index; ?>"
		value="<?php echo htmlspecialchars( $_POST['tituloProyecto'] ) ?>" />
	<input type="date" placeholder="fecha de entrega" id="fin<?php echo $index; ?>"
		value="<?php echo htmlspecialchars( $_POST['finProyecto'] ) ?>" />
	<textarea class="textEdit" placeholder="descripcion" id="<?php echo $index; ?>" 
		><?php echo trim(htmlspecialchars( $_POST['proyecto'] )) ?></textarea>
	<input type="text" placeholder="fecha de inicio" id="inicio<?php echo $index; ?>"
		value="<?php echo htmlspecialchars( $_POST['inicioProyecto'] ) ?>" />
	<input type="text" placeholder="estado del proyecto" id="estado<?php echo $index; ?>"
		value="<?php echo htmlspecialchars( $_POST['estado'] ) ?>" />
	<input type="button" class="edit" value="Enviar" onclick="send('<?php echo $index; ?>')" />
</div>

<div id="editIntegrante" >
	<input type="text" placeholder="nombre" id="nombre<?php echo $idIntegrante; ?>" 
		value="<?php echo trim(htmlspecialchars( $_POST['nombre'] )) ?>" />
	<input type="text" placeholder="apellido" id="apellido<?php echo $idIntegrante; ?>" 
		value="<?php echo trim(htmlspecialchars( $_POST['apellido'] )) ?>" />
	<input type="button" class="edit" value="Enviar" onclick="send('<?php echo $idIntegrante; ?>')" />
</div>
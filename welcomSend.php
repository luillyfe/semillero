<?php

/**/

include("conexion.php");
$db = new MySQL();

$textHome 		= empty($_POST['textHome'])?		'' :trim(htmlspecialchars($_POST['textHome']));
$textObjetiveG 	= empty($_POST['textObjetiveG'])?	'' :trim(htmlspecialchars($_POST['textObjetiveG']));
$textObjetiveE 	= empty($_POST['textObjetiveE'])?	'' :trim(htmlspecialchars($_POST['textObjetiveE']));
$textMision 	= empty($_POST['textMision'])?		'' :trim(htmlspecialchars($_POST['textMision']));
$textVision 	= empty($_POST['textVision'])?		'' :trim(htmlspecialchars($_POST['textVision']));

$textproyecto = empty($_POST['textproyecto'])? 	''	:trim(htmlspecialchars( $_POST['textproyecto'] ));
$index        = empty($_POST['index'])? 		''	:trim(htmlspecialchars( $_POST['index'] ));
$textfin	  = empty($_POST['textfin'])? 		''	:trim(htmlspecialchars( $_POST['textfin'] ));
$textinicio	  = empty($_POST['textinicio'])? 	''	:trim(htmlspecialchars( $_POST['textinicio'] ));
$texttitulo	  = empty($_POST['texttitulo'])? 	''	:trim(htmlspecialchars( $_POST['texttitulo'] ));
$textestado	  = empty($_POST['textestado'])? 	''	:trim(htmlspecialchars( $_POST['textestado'] ));
$index    	  = $index + 1;

$idIntegrante = empty($_POST['idIntegrante'])? 	''	:trim(htmlspecialchars( $_POST['idIntegrante'] ));
$textnombre	  = empty($_POST['textnombre'])? 	''	:trim(htmlspecialchars( $_POST['textnombre'] ));
$textapellido = empty($_POST['textapellido'])? 	''	:trim(htmlspecialchars( $_POST['textapellido'] ));
$idIntegrante = $idIntegrante + 1; 

if (	$textHome <> '' ): 
	$db->consulta(" UPDATE informacion 
					SET descripcion_informacion='".$textHome."' 
					WHERE idInformacion=3 ");
	echo $textHome;
?>
<input type="button" class="edit" value="editar" onclick='edit(1)' />

<?php
elseif ( $textObjetiveG <> '' ): 
	$db->consulta(" UPDATE informacion 
					SET descripcion_informacion='".$textObjetiveG."' 
					WHERE idInformacion=4 ");
	echo $textObjetiveG;
?>
<input type="button" class="edit" value="editar" onclick='edit(2)' />

<?php
elseif ( $textObjetiveE <> '' ): 
	$db->consulta(" UPDATE informacion 
					SET descripcion_informacion='".$textObjetiveE."' 
					WHERE idInformacion=5 ");
	echo $textObjetiveE;
?>
<input type="button" class="edit" value="editar" onclick='edit(3)' />

<?php
elseif ( $textMision <> '' ): 
	$db->consulta(" UPDATE informacion 
					SET descripcion_informacion='".$textMision."' 
					WHERE idInformacion=1 ");
	echo $textMision;
?>
<input type="button" class="edit" value="editar" onclick='edit(4)' />

<?php
elseif ( $textVision <> '' ): 
	$db->consulta(" UPDATE informacion 
					SET descripcion_informacion='".$textVision."' 
					WHERE idInformacion=2 ");
	echo $textVision;
?>
<input type="button" class="edit" value="editar" onclick='edit(5)' />

<?php
elseif ( $textVision <> '' ): 
	$db->consulta(" UPDATE informacion 
					SET descripcion_informacion='".$textVision."' 
					WHERE idInformacion=2 ");
	echo $textVision;
?>
<input type="button" class="edit" value="editar" onclick='edit(5)' />

<?php
elseif ( $textproyecto <> '' ): 
	$db->consulta(" UPDATE proyecto 
                	SET descripcion_proyecto='".$textproyecto."',
                		nombre_proyecto='".$texttitulo."',
                		fin_proyecto='".$textfin."',
                		inicio_proyecto='".$textinicio."',
                		estado_proyecto='".$textestado."'
                	WHERE idProyecto=".$index." ");
	echo $textproyecto;
?>
<input type="button" class="edit" value="Editar" onclick="edit('<?php echo $index; ?>')" />

<?php
elseif ( $textnombre <> '' ): 
	$db->consulta(" UPDATE integrante 
                	SET nombre_integrante='".$textnombre."',
                		apellido_integrante='".$textapellido."'
                	WHERE idIntegrante=".$idIntegrante." ");
	echo $textnombre;
?>
<input type="button" class="edit" value="Editar" onclick="edit('<?php echo $idIntegrante; ?>')" />

<?php else: echo exit("ERROR"); ?>
<?php endif; ?>

<?php

session_start();
if( empty($_SESSION["id"]) ):
	header("HTTP/1.1 401 Not autorizado");
	exit ("No autorizado");
endif;

include("/db/conexion.php");
$db = new MySQL();

$textInformation = empty($_POST['textInformation'])?	'' :trim(htmlspecialchars($_POST['textInformation']));
$textNotice 	 = empty($_POST['textNotice'])?	'' :trim(htmlspecialchars($_POST['textNotice']));
$textTitulo 	 = empty($_POST['textTitulo'])?	'' :trim(htmlspecialchars($_POST['textTitulo']));
$send 			 = empty($_POST['send'])?				'' :trim(htmlspecialchars($_POST['send']));

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

if ( $textInformation <> '' ): 
	$db->consulta(" UPDATE informacion 
					SET descripcion_informacion='".$textInformation."',
						Integrante_idIntegrante=".$_SESSION["id"]." 
					WHERE idInformacion=".$send." ");
	echo $textInformation;
?>
<input type="button" class="edit" value="editar" onclick='edit(<?= $send ?>)' />

<?php
elseif ( $textNotice <> '' ): 
	$db->consulta(" UPDATE informacion 
					SET descripcion_informacion='".$textNotice."',
						titulo_informacion='".$textTitulo."',
						Integrante_idIntegrante=".$_SESSION["id"]." 
					WHERE idInformacion=".$send." ");
	echo $textNotice;
?>
<input type="button" class="edit" value="editar" onclick='edit(<?= $send ?>)' />

<?php
elseif ( $textproyecto <> '' ): 
	$db->consulta(" UPDATE proyecto 
                	SET descripcion_proyecto='".$textproyecto."',
                		nombre_proyecto='".$texttitulo."',
                		fin_proyecto='".$textfin."',
                		inicio_proyecto='".$textinicio."',
                		estado_proyecto='".$textestado."',
                		Integrante_idIntegrante=".$_SESSION["id"]."
                	WHERE idProyecto=".$index." ");
	echo $textproyecto;
?>
<input type="button" class="edit" value="Editar" onclick="edit('<?= $index; ?>')" />

<?php
elseif ( $textnombre <> '' ): 
	$db->consulta(" UPDATE integrante 
                	SET nombre_integrante='".$textnombre."',
                		apellido_integrante='".$textapellido."'
                	WHERE idIntegrante=".$idIntegrante." ");
	echo $textnombre;
?>
<input type="button" class="edit" value="Editar" onclick="edit('<?= $idIntegrante; ?>')" />

<?php else: echo exit("ERROR"); ?>
<?php endif; ?>

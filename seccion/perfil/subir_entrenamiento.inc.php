<?php
if(isset($_POST['guardar_entrenamiento']) && !empty($_FILES['entrenamiento_subido']['tmp_name'])) {
	$directorio = DIRECTORIO_RAIZ."/usuarios/entrenamientos/";
	$carpeta_objetivo = $directorio.basename($_FILES['entrenamiento_subido']['name']);
	$subida_correcta = 1;


	
	if ($subida_correcta == 0) {
		?>
		<div id="notificacion" align="center">
			<p id="texto">
				<?php
				echo "Tu archivo no puede subirse";
				?>
			</p>
		</div>
		<?php		
	} else {
		if (move_uploaded_file($_FILES['entrenamiento_subido']['tmp_name'],
		DIRECTORIO_RAIZ."/usuarios/entrenamientos/".$usuario->obtener_cedula().".pdf")) {
			?>
			<div id="notificacion" align="center">
				<p id="texto">
					Entrenamiento actualizado
				</p>
			</div>
			<?php			
		} else {
			?>
			<div id="notificacion" align="center">
				<p id="texto">
					Ha ocurrido un error.
				</p>
			</div>
			<?php			
		}
	}
}
?>


<?php
if(isset($_POST['guardar_dieta']) && !empty($_FILES['dieta_subida']['tmp_name'])) {
	$directorio = DIRECTORIO_RAIZ."/usuarios/dietas/";
	$carpeta_objetivo = $directorio.basename($_FILES['dieta_subida']['name']);
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
		if (move_uploaded_file($_FILES['dieta_subida']['tmp_name'],
		DIRECTORIO_RAIZ."/usuarios/dietas/".$usuario->obtener_cedula().".pdf")) {
			?>
			<div id="notificacion" align="center">
				<p id="texto">
					Dieta actualizada
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


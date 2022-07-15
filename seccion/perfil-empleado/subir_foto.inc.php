<?php
if(isset($_POST['guardar_imagen']) && !empty($_FILES['archivo_subido']['tmp_name'])) {
	$directorio = DIRECTORIO_RAIZ."/empleados/fotos-perfil/";
	$carpeta_objetivo = $directorio.basename($_FILES['archivo_subido']['name']);
	$subida_correcta = 1;
	$tipo_imagen = pathinfo($carpeta_objetivo, PATHINFO_EXTENSION);
	
	$comprobacion = getimagesize($_FILES['archivo_subido']['tmp_name']);
	if($comprobacion !== false) {
		$subida_correcta = 1;
	} else {
		$subida_correcta = 0;
	}
	
	if ($_FILES['archivo_subido']['size'] > 500000) {
		?>
		<p class="desaparecer-automaticamente h-5 text-white textoBold new red fixed-top text-center">
			El archivo no puede ocupar más de 500kb
		</p>
		<?php
		$subida_correcta = 0;
	}
	
	if ($tipo_imagen != "jpg" && $tipo_imagen != "png" && $tipo_imagen != "jpeg" && $tipo_imagen != "gif") {
		?>
		<p class="desaparecer-automaticamente h-5 text-white textoBold new red fixed-top text-center">
			Sólo se admiten los formatos JPG, JPEG, PNG y GIF
		</p>
		<?php		
		$subida_correcta = 0;
	}
	
	else {
		if (move_uploaded_file($_FILES['archivo_subido']['tmp_name'],
		DIRECTORIO_RAIZ."/empleados/fotos-perfil/".$empleado->obtener_cedula())) {
			?>
			<p class="desaparecer-automaticamente h-5 text-white textoBold new blue fixed-top text-center">
				El archivo fue subido con exito. Recarga la página si no ves cambios.
			</p>
			<?php						
		} 
		else {
			?>
			<p class="desaparecer-automaticamente h-5 text-white textoBold new red fixed-top text-center">
				Ha ocurrido un error.
			</p>
			<?php			
		}
	}
}
?>



<?php
/////////////////////////////// BORRAR ARCHIVO ////////////////////////////////////            
if (isset($_POST['borrar']))
{
@unlink(DIRECTORIO_RAIZ."/empleados/fotos-perfil/".$empleado->obtener_cedula());
header("Location: #");
}
?>
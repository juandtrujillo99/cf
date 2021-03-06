<?php
header("Content-type: text/html; charset=utf8");
include '../../app/config.inc.php';
?>
<script type="text/javascript" src="<?php echo RUTA_JS; ?>desaparecer-automaticamente.js"></script>
<?php

if (empty($_FILES["file1"])) {
	?>
	<input id="imagen" type="text" name="imagen" value="" class="validate step__input" onkeyup="validar3()">
	<p class="desaparecer-automaticamente h-5 text-white textoBold new red fixed-top text-center">
		Olvidaste seleccionar un archivo.
	</p>
	<?php
}
else{
	$fileName = $_FILES["file1"]["name"]; // The file name
	$fileTmpLoc = $_FILES["file1"]["tmp_name"]; // File in the PHP tmp folder
	$fileType = $_FILES["file1"]["type"]; // The type of file it is
	$fileSize = $_FILES["file1"]["size"]; // File size in bytes
	$fileErrorMsg = $_FILES["file1"]["error"]; // 0 for false... and 1 for true
	$carpeta = "../../img/rutinas";//carpeta donde se suben los archivos
	if (!$fileTmpLoc) { // if file not chosen
		?>
		<p class="desaparecer-automaticamente h-5 text-white textoBold new red fixed-top text-center">
			Selecciona un archivo antes de presionar el boton 'subir'.
		</p>
		<?php
	    exit();
	}

	if($fileType == "image/png" || $fileType == "image/jpg" || $fileType == "image/jpeg"){
		$caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $numero_caracteres = strlen($caracteres);
	    $string_aleatorio = '';
	    
	    for ($i = 0; $i < 3; $i++) {
	        $string_aleatorio .= $caracteres[rand(0, $numero_caracteres - 1)];
	    }	    

		if(move_uploaded_file($fileTmpLoc, $carpeta."/".date("d-m-Y").$string_aleatorio.utf8_decode($fileName))){		
			?>
			<h4><font color="grey">Nueva Portada</font></h4>
			<input id="imagen" type="text" name="imagen" value="<?php echo date("d-m-Y").$string_aleatorio.$fileName;?>" class="d-none validate step__input" onkeyup="validarImagen()">
			<img src="<?php echo RUTA_IMG."rutinas/".date("d-m-Y").$string_aleatorio."$fileName";?>" class="imagen-3">
			<br>
			<p class="desaparecer-automaticamente h-5 text-white textoBold new blue fixed-top text-center">
				La imagen se subi?? correctamente.
			</p>
			<?php
		} else {
			?>
			<p class="desaparecer-automaticamente h-5 text-white textoBold new red fixed-top text-center">
				Fall?? la subida, error al guardar la imagen.
			</p>
			<?php
		}
	}else{
		?>
		<p class="desaparecer-automaticamente h-5 text-white textoBold new red fixed-top text-center">
			Debes escoger una imagen en formato jpg o png.
		</p>
		<?php
	}	
}
?>
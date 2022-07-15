<input type="hidden" id="id-rutina" name="id-rutina" value="<?php echo $id_rutina; ?>">

<div class="form-group">
	<label for="titulo">Título</label>
	<input type="text" class="form-rutina" id="titulo" name="titulo" placeholder="Ponle un título a esta rutina" value="<?php echo $validador -> obtener_titulo(); ?>">
	<input type="hidden" id="titulo-original" name="titulo-original" value="<?php echo $rutina_recuperada -> obtener_titulo(); ?>">
	<?php
		$validador -> mostrar_error_titulo();
	?>
</div>
<div class="form-group">
	<label for="intensidad">Intensidad</label>
	<?php $validador -> mostrar_error_intensidad(); ?>
	<input type="text" name="intensidad" value="<?php echo $rutina_recuperada -> obtener_intensidad(); ?>" class="d-none">
	<input type="hidden" id="intensidad-original" name="intensidad-original" value="<?php echo $rutina_recuperada -> obtener_intensidad(); ?>">

	<input type="radio" id="intensidad1" name="intensidad" value="Baja" <?php if($rutina_recuperada -> obtener_intensidad() == "Baja"){echo "checked";}; ?>>
    <label for="intensidad1">Baja</label>

    <input type="radio" id="intensidad2" name="intensidad" value="Normal" <?php if($rutina_recuperada -> obtener_intensidad() == "Normal"){echo "checked";}; ?>>
    <label for="intensidad2">Normal</label>

    <input type="radio" id="intensidad3" name="intensidad" value="Alta" <?php if($rutina_recuperada -> obtener_intensidad() == "Alta"){echo "checked";}; ?>>
    <label for="intensidad3">Alta</label>
</div>

<div class="form-group">
	<ul class="collapsible">
	    <li>
			<div class="collapsible-header" title="Tómate y sube una foto para ir viendo tu progreso"><i class="material-icons">whatshot</i>Cambiar foto<?php $validador -> mostrar_error_imagen();?></div>
			<div class="collapsible-body">
				<span>
					<div class="form-group" id="upload_form">
						<?php
						$rutaFoto = RUTA_IMG."rutinas/".$rutina_recuperada -> obtener_imagen();
						$foto = $rutina_recuperada -> obtener_imagen();

						if(!isset($rutaFoto)||empty($foto)){
							?>
							<h6><font color="grey">* Selecciona una imagen y luego presiona el boton subir.</font></h6>				
							<label for="file1" id="label-archivo" class="btn btn-secundario"><span class="material-icons">add_a_photo</span></label>
							<input type="file" name="file1" id="file1" class="d-none">					
						<?php
						}else{
							?>
							<h4><font color="grey">Foto actual</font></h4>					
							<input type="text" name="imagen" value="<?php echo $rutina_recuperada -> obtener_imagen(); ?>">
							<br><br>
							<h4>Cambiar foto</h4>
							<label for="file1" id="label-archivo" class="btn btn-secundario" ><span class="material-icons">add_a_photo</span></label>
							<input type="file" name="file1" id="file1" class="d-none">
							<?php
						}
						?>													
						<input type="button" value="Subir" name="guardar_imagen" id="guardar_imagen" onclick="subirPortada()" class="btn btn-principal">
						<progress id="progressBar" class="barra-progreso" value="0" max="100" style="width:100%;height: 0.5em;"></progress>
						<h4 id="status"></h4>
			    		<input type="hidden" id="imagen-original" name="imagen-original" value="<?php echo $rutina_recuperada -> obtener_imagen(); ?>">								
					</div>
				</span>
			</div>
	    </li>
	</ul>
</div>
<div class="form-group">
	<label for="url">URL</label>
	<input type="text" class="form-rutina" id="url" name="url" placeholder="Dirección única sin espacios para la rutina" value="<?php echo $validador -> obtener_url(); ?>">
	<input type="hidden" id="url-original" name="url-original" value="<?php echo $rutina_recuperada -> obtener_url(); ?>">
	<?php
		$validador -> mostrar_error_url();
	?>
</div>
<div class="form-group">
	<label for="video">Código del video</label>
	<input type="text" class="form-rutina" id="video" name="video" placeholder="Código del video para la rutina" value="<?php echo $rutina_recuperada -> obtener_video(); ?>">
	<input type="hidden" id="video-original" name="video-original" value="<?php echo $rutina_recuperada -> obtener_video(); ?>">
	<?php
		$validador -> mostrar_error_video();
	?>
</div>
<div class="form-group">
	<label for="contenido">Contenido</label>
	<textarea class="form-rutina" rows="5" id="texto" name="texto" placeholder="Escribe aquí tu artículo."><?php echo $validador -> obtener_texto(); ?></textarea>
	<input type="hidden" id="texto-original" name="texto-original" value="<?php echo $rutina_recuperada -> obtener_texto(); ?>">
	<?php
		$validador -> mostrar_error_texto();
	?>
</div>
<div class="checkbox d-none">
	<label>
		<input type="checkbox" name="publicar" value="si" <?php if ($validador -> obtener_checkbox()) echo 'checked' ?>>Marca este recuadro si quieres que la rutina se publique de inmediato
		<input type="hidden" id="publicar-original" name="publicar-original" value="<?php echo $rutina_recuperada -> esta_activa(); ?>">
	</label>
</div>
<br>
<button type="submit" class="btn btn-primary" name="guardar_cambios_rutina">Guardar cambios</button>
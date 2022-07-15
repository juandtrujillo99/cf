<?php //inicio ?>
<div class="col-12 row" align="center">
	<?php //seccion portada pc ?>
	<div class="col-2"></div>
    <div class="sobreponer2 col-8 d-none d-sm-block">
        <div class="imagen-background">
            <img loading="lazy" style="border-radius: 0px 0px 30px 30px ;" src="<?php echo RUTA_IMG;?>fondos/perfil.jpg" class="imagen">
        </div>
    </div>
    <?php //seccion portada moviles ?>
    <div class="d-block d-sm-none">
		<img loading="lazy" src="<?php echo RUTA_IMG;?>fondos/perfil-m.jpg" class="imagen">
	</div>
</div>
<?php //inicio ?>



<div class="col-12 row" align="center">
	<div id="actualizar" class="modal bottom-sheet">	
		<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat" style="position: absolute;right: 5vh;">Cerrar</a>
	    <div>
			<h4 class="textoBold">Actualizar foto del perfil</h4>
			<form class="text-center" action="<?php echo RUTA_PERFIL; ?>" method="post" enctype="multipart/form-data">
	<?php
	if(file_exists(DIRECTORIO_RAIZ."/usuarios/fotos-perfil/".$usuario->obtener_cedula())) {
		?>	
				<a target="_blank" href="<?php echo RUTA_DOCS_USUARIOS.'/fotos-perfil/'.$usuario->obtener_cedula(); ?>" data-lightbox="Foto de perfil" data-title="Foto de perfil" class="btn btn-principal-animado">Ver foto</a><br>
				<label for="archivo_subido" id="label-archivo" class="btn btn-secundario" title="Selecciona una foto">Cambiar foto</label>		
				<input type="file" name="archivo_subido" id="archivo_subido" class="d-none">
				<input type="submit" value="Subir" class="btn btn-principal" name="guardar_imagen" id="guardar_imagen">	
				<input type="submit" value="Eliminar" name="borrar" class="btn btn-secundario">
			</form>			
			<?php include 'seccion/redes-sociales.inc.php';?>
	    </div>
		</div>
		<a class="modal-trigger circle" href="#actualizar">
			<div class="img7 bg-cover col-md-3 col-10" style="background-image:url(<?php echo RUTA_DOCS_USUARIOS.'/fotos-perfil/'.$usuario->obtener_cedula(); ?>);"></div>
		</a>
			<?php
	} else {		
			?>
				<label for="archivo_subido" id="label-archivo" class="btn btn-secundario" title="Selecciona una foto">Seleccionar foto</label>		
				<input type="file" name="archivo_subido" id="archivo_subido" class="d-none">
				<input type="submit" value="Subir" class="btn btn-principal" name="guardar_imagen" id="guardar_imagen">	
			</form>
			<?php include 'seccion/redes-sociales.inc.php';?>
	    </div>
	</div>	
	<a class="waves-effect waves-light btn modal-trigger" style="background-color: white;" href="#actualizar">
		<span style="font-size:6em;" class="material-icons">account_circle</span>
		<span class="material-icons">add_a_photo</span>
	</a>						
<?php
}
?>
</div>
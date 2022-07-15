<h3><b>Escribe algo...</b></h3>
<h6><font color="grey">* Datos obligatorios</font></h6>

<ul class="collapsible">
    <li>
		<div class="collapsible-header"><i class="material-icons">whatshot</i>Imagen <?php $validador -> mostrar_error_imagen(); ?></div>
		<div class="collapsible-body">
			<span>
				<div class="form-group" id="upload_form">
					<h4>Sube la foto de portada * <font color="grey"><i title="Todas las entradas deben tener una imagen." class="fas fa-question-circle"></i></font></h4>
					<h6><font color="grey">* Selecciona una imagen y luego subela o escoge una de la Galeria.</font>
					</h6>
					<br>
					<label for="file1" id="label-archivo" class="btn btn-success">Seleccionar imagen</label>
					<input type="file" name="file1" id="file1" class="boton_subir">
					<input type="button" value="Subir imagen" name="guardar_imagen" id="guardar_imagen" onclick="subirImagen()"  class="btn btn-primary">
					<input type="file" class="form-control" id="status" name="imagen" placeholder="imagen.jpg" <?php $validador -> mostrar_imagen(); ?> >

					<progress id="progressBar" class="barra-progreso" value="0" max="100" style="width:100%;height: 0.5em;"></progress>
					<h4 id="status"></h4>					

					<div class="file-field input-field">
						<div>
							<span></span>
							<input type="hidden" name="imagen2" placeholder="Deja este espacio en blanco">
							<input type="hidden" name="imagen3" placeholder="Deja este espacio en blanco">
							<input type="hidden" name="imagen4" placeholder="Deja este espacio en blanco">
						</div>
					</div>					
				</div>
			</span>
		</div>
    </li>
        <li>
		<div class="collapsible-header"><i class="material-icons">whatshot</i>Video</div>
		<div class="collapsible-body">
			<span>
				<div class="form-group">
					<label for="url_video">Inserta la url de un video de youtube donde muestres mejor el producto</label>
					<input type="text" class="form-control" id="url_video" name="url_video"
						<?php $validador -> mostrar_url_video(); ?> >
						<?php $validador -> mostrar_error_url_video(); ?>
				</div>
			</span>
		</div>
    </li>
</ul>

<ul class="collapsible">
    <li>
		<div class="collapsible-header"><i class="material-icons">whatshot</i>Nombre del producto</div>
		<div class="collapsible-body">
			<span>
				<div class="form-group">
					<label for="titulo">Usa palabras clave para que encuentren fácilmente el producto *</label>
					<input type="text" class="form-control" id="titulo" name="titulo"
						<?php $validador -> mostrar_titulo(); ?> >
						<?php $validador -> mostrar_error_titulo(); ?>
				</div>
			</span>
		</div>
    </li>
    <li>
		<div class="collapsible-header"><i class="material-icons">whatshot</i>Categoría</div>
		<div class="collapsible-body">
			<span>
				<div class="form-group">
					<label for="categoria">Agrega la categoría del producto *</label>
					<input type="text" class="form-control" id="categoria" name="categoria"
						<?php $validador -> mostrar_categoria(); ?> >
						<?php $validador -> mostrar_error_categoria(); ?>
				</div>
			</span>
		</div>
    </li>
    <li>
		<div class="collapsible-header"><i class="material-icons">whatshot</i>Precio</div>
		<div class="collapsible-body">
			<span>
				<div class="form-group">
					<label for="precio">Agrega el precio del producto *</label>
					<input type="number" class="form-control" id="precio" name="precio" placeholder="No escribas puntos ni comas"
						<?php $validador -> mostrar_precio(); ?> >
						<?php $validador -> mostrar_error_precio(); ?>
				</div>
			</span>
		</div>
    </li>
    <li>
		<div class="collapsible-header"><i class="material-icons">whatshot</i>Url personalizada</div>
		<div class="collapsible-body">
			<span>
				<div class="form-group">
					<label for="url">Personaliza la url para que sea más fácil de encontrar, la ñ, las tildes y demás caracteres especiales no están permitidos, separa las palabras con guion (-)</label>
					<input type="text" class="form-control" id="url" name="url" placeholder="<?php echo $urlEmpresa ?>/*nombre-del-producto"
						<?php $validador -> mostrar_url(); ?> >
						<?php $validador -> mostrar_error_url(); ?>
				</div>
			</span>
		</div>
    </li>
    <li>
		<div class="collapsible-header"><i class="material-icons">whatshot</i>Descripción</div>
		<div class="collapsible-body">
			<span>
				<div class="form-group">
					<label for="contenido">Agrega la descripción de tu producto * <font color="grey"><i title="Obligatorio." class="fas fa-question-circle"></i></font></label>
					<textarea class="form-control" rows="10" name="texto" placeholder="Escribe detalladamente todas las caracteristicas del producto que creas necesarias">
						<?php $validador -> mostrar_texto(); ?>
					</textarea>
					<?php $validador -> mostrar_error_texto(); ?>
				</div>
			</span>
		</div>
    </li>
</ul>


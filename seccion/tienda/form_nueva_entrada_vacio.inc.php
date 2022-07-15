<h3><b>Escribe...</b></h3>
<h6><font color="grey">* Datos obligatorios</font></h6>

<ul class="collapsible">
    <li>
		<div class="collapsible-header"><i class="material-icons">whatshot</i>Imagen</div>
		<div class="collapsible-body">
			<span>
				<div class="form-group" id="upload_form">
					<h4>Sube la foto de portada * <font color="grey"><i title="Todas las entradas deben tener una imagen." class="fas fa-question-circle"></i></font></h4>
					<h6><font color="grey">* Selecciona una imagen y luego súbela.</font>
					</h6>
					<br>
					<label for="file1" id="label-archivo" class="btn btn-principal-animado">Seleccionar imagen</label>
					<input type="file" name="file1" id="file1" class="boton_subir" style="display: none;">
					<input type="button" value="Subir imagen" name="guardar_imagen" id="guardar_imagen" onclick="subirImagen()"  class="btn btn-principal">

					<progress id="progressBar" class="barra-progreso" value="0" max="100" style="width:100%;height: 0.5em;"></progress>
					<h4 id="status"></h4>					

					<div class="file-field input-field">
						<div>
							<span></span>
							<input type="hidden" name="imagen2" placeholder="Deja este espacio en blanco">
							<span></span>
							<input type="hidden" name="imagen3" placeholder="Deja este espacio en blanco">
							<span></span>
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
					<input type="text" class="form-control" id="url_video" name="url_video">
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
					<input type="text" class="form-control" id="titulo" name="titulo">
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
					<input type="text" class="form-control" id="categoria" name="categoria">
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
					<input type="number" class="form-control" id="precio" name="precio" placeholder="No escribas puntos ni comas">
				</div>
			</span>
		</div>
    </li>
    <li>
		<div class="collapsible-header"><i class="material-icons">whatshot</i>Url personalizada</div>
		<div class="collapsible-body">
			<span>
				<div class="form-group">
					<label for="url">Personaliza la url para que sea más fácil de encontrar, la ñ, las tildes y demás caracteres especiales no están permitidos</label>
					<input type="text" class="form-control" id="url" name="url" placeholder="Ej: <?php echo $urlEmpresa ?>/*nombre-del-producto">
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
					<textarea class="form-control" rows="10" name="texto" placeholder="Escribe detalladamente todas las caracteristicas del producto que creas necesarias"></textarea>
				</div>
			</span>
		</div>
    </li>
</ul>

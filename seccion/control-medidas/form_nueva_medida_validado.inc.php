<div class="row">
	<div class="col-md-5 col-xs-12">
		<ul class="collapsible">
		    <li>
				<div class="collapsible-header" title="Tómate y sube una foto para ir viendo tu progreso"><i class="material-icons">whatshot</i>Sube tu foto <?php $validador -> mostrar_error_imagen(); ?></div>
				<div class="collapsible-body">
					<span>
						<div class="form-group" id="upload_form">
							<?php
							$rutaFoto = RUTA_IMG."control-medidas/".$validador -> obtener_imagen();
							$foto = $validador -> obtener_imagen();

							if(!isset($rutaFoto)||empty($foto)){
								?>
								<h6><font color="grey">* Selecciona una imagen y luego presiona el boton subir.</font></h6>				
								<label for="file1" id="label-archivo" class="btn btn-secundario"><span class="material-icons">add_a_photo</span></label>
								<input type="file" name="file1" id="file1" class="d-none">		
								<input name="imagen" class="d-none">							
							<?php
							}else{
								?>
								<h4><font color="grey">Ya seleccionaste una imagen</font></h4>					
								<input type="text" name="imagen" <?php $validador -> mostrar_imagen(); ?>>
								<br><br>
								<h4>Cambiar foto</h4>
								<label for="file1" id="label-archivo" class="btn btn-secundario" ><span class="material-icons">add_a_photo</span></label>
								<input type="file" name="file1" id="file1" class="d-none">
								<?php
							}
							?>							
							<input type="button" value="Subir" name="guardar_imagen" id="guardar_imagen" onclick="subirImagen()" class="btn btn-principal">
							<progress id="progressBar" class="barra-progreso" value="0" max="100" style="width:100%;height: 0.5em;"></progress>
							<h4 id="status"></h4>										
						</div>
					</span>
				</div>
		    </li>
		</ul>
	</div>
	<div class="col-1 d-none d-sm-block"></div>
	<div class="col-md-6 col-xs-12">
		<ul class="collapsible">
		    <li>
				<div class="collapsible-header"><i class="material-icons">whatshot</i>Peso <?php $validador -> mostrar_error_peso(); ?></div>
				<div class="collapsible-body">
					<span>
						<div class="form-group">
							<input type="number" id="peso" name="peso" placeholder="Peso" <?php $validador -> mostrar_peso(); ?> >
						</div>
					</span>
				</div>
		    </li>
		</ul>
	</div>
</div>
<br><br>
<div class="row">
	<div class="col-md-5 col-xs-12">
		<h3 class="textoBold center">Superior<br><br></h3>
		<ul class="collapsible" data-collapsible="expandable">
		    <li>
				<div class="collapsible-header"><i class="material-icons">whatshot</i>Hombro <?php $validador -> mostrar_error_hombro(); ?></div>
				<div class="collapsible-body">
					<span>
						<div class="form-group">
							<input type="number" id="hombro" name="hombro" placeholder="Hombro" <?php $validador -> mostrar_hombro(); ?> >
						</div>
					</span>
				</div>
		    </li>
		    <li>
				<div class="collapsible-header"><i class="material-icons">whatshot</i>Pecho o busto <?php $validador -> mostrar_error_pecho(); ?></div>
				<div class="collapsible-body">
					<span>
						<div class="form-group">
							<input type="number" id="pecho" name="pecho" placeholder="Pecho" <?php $validador -> mostrar_pecho(); ?> >
						</div>
					</span>
				</div>
		    </li>
		    <li>
				<div class="collapsible-header"><i class="material-icons">whatshot</i>Espalda <?php $validador -> mostrar_error_espalda(); ?></div>
				<div class="collapsible-body">
					<span>
						<div class="form-group">
							<input type="number" id="espalda" name="espalda" placeholder="Espalda" <?php $validador -> mostrar_espalda(); ?> >
						</div>
					</span>
				</div>
		    </li>    
		    <li>
				<div class="collapsible-header"><i class="material-icons">whatshot</i>Antebrazo <?php $validador -> mostrar_error_brazo(); ?></div>
				<div class="collapsible-body">
					<span>
						<div class="form-group">
							<input type="number" id="brazo" name="brazo" placeholder="Antebrazo" <?php $validador -> mostrar_brazo(); ?> >
						</div>
					</span>
				</div>
		    </li>
		    <li>
				<div class="collapsible-header"><i class="material-icons">whatshot</i>Abdomen <?php $validador -> mostrar_error_abdomen(); ?></div>
				<div class="collapsible-body">
					<span>
						<div class="form-group">
							<input type="number" id="abdomen" name="abdomen" placeholder="Abdomen" <?php $validador -> mostrar_abdomen(); ?> >
						</div>
					</span>
				</div>
		    </li>
		</ul>
	</div>
	<div class="col-1 d-none d-sm-block"></div>
	<div class="col-md-6 col-xs-12">
		<div class="col-12 d-block d-sm-none"><br><br></div>
		<h3 class="textoBold center">Inferior<br><br></h3>
		<ul class="collapsible" data-collapsible="expandable">
		    <li>
				<div class="collapsible-header"><i class="material-icons">whatshot</i>Cintura <?php $validador -> mostrar_error_cintura(); ?></div>
				<div class="collapsible-body">
					<span>
						<div class="form-group">
							<input type="number" id="cintura" name="cintura" placeholder="Cintura" <?php $validador -> mostrar_cintura(); ?> >
						</div>
					</span>
				</div>
		    </li>
		    <li>
				<div class="collapsible-header"><i class="material-icons">whatshot</i>Cadera <?php $validador -> mostrar_error_cadera(); ?></div>
				<div class="collapsible-body">
					<span>
						<div class="form-group">
							<input type="number" id="cadera" name="cadera" placeholder="Cadera" <?php $validador -> mostrar_cadera(); ?> >
						</div>
					</span>
				</div>
		    </li>
		    <li>
				<div class="collapsible-header"><i class="material-icons">whatshot</i>Pantorrilla <?php $validador -> mostrar_error_pantorrilla(); ?></div>
				<div class="collapsible-body">
					<span>
						<div class="form-group">
							<input type="number" id="pantorrilla" name="pantorrilla" placeholder="Pantorrilla" <?php $validador -> mostrar_pantorrilla(); ?> >
						</div>
					</span>
				</div>
		    </li>    
		    <li>
				<div class="collapsible-header"><i class="material-icons">whatshot</i>Pierna superior <?php $validador -> mostrar_error_pierna_sup(); ?></div>
				<div class="collapsible-body">
					<span>
						<div class="form-group">
							<input type="number" id="pierna_sup" name="pierna_sup" placeholder="Pierna superior"<?php $validador -> mostrar_pierna_sup(); ?> >
						</div>
					</span>
				</div>
		    </li>
		    <li>
				<div class="collapsible-header"><i class="material-icons">whatshot</i>Pierna inferior <?php $validador -> mostrar_error_pierna_inf(); ?></div>
				<div class="collapsible-body">
					<span>
						<div class="form-group">
							<input type="number" id="pierna_inf" name="pierna_inf" placeholder="Pierna inferior" <?php $validador -> mostrar_pierna_inf(); ?> >
						</div>
					</span>
				</div>
		    </li>
		</ul>
	</div>
</div>

<input type="text" class="d-none" name="url" <?php $validador -> mostrar_error_url(); ?>>








<h3 class="textoBold"><?php echo convertirFecha($control_recuperado -> obtener_fecha()); ?></h3>
<br>
<div class="row">
	<div class="col-md-5 col-xs-12">
		<ul class="collapsible">
		    <li>
				<div class="collapsible-header" title="Tómate y sube una foto para ir viendo tu progreso"><i class="material-icons">whatshot</i>Cambiar foto<?php $control_recuperado -> mostrar_error_imagen();?></div>
				<div class="collapsible-body">
					<span>
						<div class="form-group" id="upload_form">
							<?php
							$rutaFoto = RUTA_IMG."control-medidas/".$control_recuperado -> obtener_imagen();
							$foto = $control_recuperado -> obtener_imagen();

							if(!isset($rutaFoto)||empty($foto)){
								?>
								<h6><font color="grey">* Selecciona una imagen y luego presiona el boton subir.</font></h6>				
								<label for="file1" id="label-archivo" class="btn btn-secundario"><span class="material-icons">add_a_photo</span></label>
								<input type="file" name="file1" id="file1" class="d-none">					
							<?php
							}else{
								?>
								<h4><font color="grey">Foto actual</font></h4>					
								<input type="text" name="imagen" value="<?php echo $control_recuperado -> obtener_imagen(); ?>">
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
				    		<input type="hidden" id="imagen-original" name="imagen-original" value="<?php echo $control_recuperado -> obtener_imagen(); ?>">								
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
				<div class="collapsible-header"><i class="material-icons">whatshot</i>Peso <?php $control_recuperado -> mostrar_error_peso();?></div>
				<div class="collapsible-body">
					<span>
						<div class="form-group">
							<input type="number" id="peso" name="peso" placeholder="Peso" min="25" max="150" value="<?php echo $control_recuperado -> obtener_peso(); ?>">
							<input type="hidden" id="peso-original" name="peso-original" value="<?php echo $control_recuperado -> obtener_peso(); ?>">
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
				<div class="collapsible-header"><i class="material-icons">whatshot</i>Hombro <?php $control_recuperado -> mostrar_error_hombro();?></div>
				<div class="collapsible-body">
					<span>
						<div class="form-group">
							<input type="number" id="hombro" name="hombro" placeholder="Hombro" min="5" max="120" value="<?php echo $control_recuperado -> obtener_hombro(); ?>">
							<input type="hidden" id="hombro-original" name="hombro-original" value="<?php echo $control_recuperado -> obtener_hombro(); ?>">
						</div>
					</span>
				</div>
		    </li>
		    <li>
				<div class="collapsible-header"><i class="material-icons">whatshot</i>Pecho o busto <?php $control_recuperado -> mostrar_error_pecho();?></div>
				<div class="collapsible-body">
					<span>
						<div class="form-group">
							<input type="number" id="pecho" name="pecho" placeholder="Pecho" min="5" max="180" value="<?php echo $control_recuperado -> obtener_pecho(); ?>">
							<input type="hidden" id="pecho-original" name="pecho-original" value="<?php echo $control_recuperado -> obtener_pecho(); ?>">
						</div>
					</span>
				</div>
		    </li>
		    <li>
				<div class="collapsible-header"><i class="material-icons">whatshot</i>Espalda <?php $control_recuperado -> mostrar_error_espalda();?></div>
				<div class="collapsible-body">
					<span>
						<div class="form-group">
							<input type="number" id="espalda" name="espalda" placeholder="Espalda" min="5" max="180" value="<?php echo $control_recuperado -> obtener_espalda(); ?>">
							<input type="hidden" id="espalda-original" name="espalda-original" value="<?php echo $control_recuperado -> obtener_espalda(); ?>">
						</div>
					</span>
				</div>
		    </li>    
		    <li>
				<div class="collapsible-header"><i class="material-icons">whatshot</i>Antebrazo <?php $control_recuperado -> mostrar_error_brazo();?></div>
				<div class="collapsible-body">
					<span>
						<div class="form-group">
							<input type="number" id="brazo" name="brazo" placeholder="Antebrazo" min="5" max="120" value="<?php echo $control_recuperado -> obtener_brazo(); ?>">
							<input type="hidden" id="brazo-original" name="brazo-original" value="<?php echo $control_recuperado -> obtener_brazo(); ?>">
						</div>
					</span>
				</div>
		    </li>
		    <li>
				<div class="collapsible-header"><i class="material-icons">whatshot</i>Abdomen <?php $control_recuperado -> mostrar_error_abdomen();?></div>
				<div class="collapsible-body">
					<span>
						<div class="form-group">
							<input type="number" id="abdomen" name="abdomen" placeholder="Abdomen" min="5" max="180" value="<?php echo $control_recuperado -> obtener_abdomen(); ?>">
							<input type="hidden" id="abdomen-original" name="abdomen-original" value="<?php echo $control_recuperado -> obtener_abdomen(); ?>">
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
				<div class="collapsible-header"><i class="material-icons">whatshot</i>Cintura <?php $control_recuperado -> mostrar_error_cintura();?></div>
				<div class="collapsible-body">
					<span>
						<div class="form-group">
							<input type="number" id="cintura" name="cintura" placeholder="Cintura" min="5" max="180" value="<?php echo $control_recuperado -> obtener_cintura(); ?>">
							<input type="hidden" id="cintura-original" name="cintura-original" value="<?php echo $control_recuperado -> obtener_cintura(); ?>">
						</div>
					</span>
				</div>
		    </li>
		    <li>
				<div class="collapsible-header"><i class="material-icons">whatshot</i>Cadera <?php $control_recuperado -> mostrar_error_cadera();?></div>
				<div class="collapsible-body">
					<span>
						<div class="form-group">
							<input type="number" id="cadera" name="cadera" placeholder="Cadera" min="5" max="180" value="<?php echo $control_recuperado -> obtener_cadera(); ?>">
							<input type="hidden" id="cadera-original" name="cadera-original" value="<?php echo $control_recuperado -> obtener_cadera(); ?>">
						</div>
					</span>
				</div>
		    </li>
		    <li>
				<div class="collapsible-header"><i class="material-icons">whatshot</i>Pantorrilla <?php $control_recuperado -> mostrar_error_pantorrilla();?></div>
				<div class="collapsible-body">
					<span>
						<div class="form-group">
							<input type="number" id="pantorrilla" name="pantorrilla" placeholder="Pantorrilla" min="5" max="120" value="<?php echo $control_recuperado -> obtener_pantorrilla(); ?>">
							<input type="hidden" id="pantorrilla-original" name="pantorrilla-original" value="<?php echo $control_recuperado -> obtener_pantorrilla(); ?>">
						</div>
					</span>
				</div>
		    </li>    
		    <li>
				<div class="collapsible-header"><i class="material-icons">whatshot</i>Pierna superior <?php $control_recuperado -> mostrar_error_pierna_sup();?></div>
				<div class="collapsible-body">
					<span>
						<div class="form-group">
							<input type="number" id="pierna_sup" name="pierna_sup" placeholder="Pierna superior" min="5" max="120" value="<?php echo $control_recuperado -> obtener_pierna_sup(); ?>">
							<input type="hidden" id="pierna_sup-original" name="pierna_sup-original" value="<?php echo $control_recuperado -> obtener_pierna_sup(); ?>">
						</div>
					</span>
				</div>
		    </li>
		    <li>
				<div class="collapsible-header"><i class="material-icons">whatshot</i>Pierna inferior <?php $control_recuperado -> mostrar_error_pierna_inf();?></div>
				<div class="collapsible-body">
					<span>
						<div class="form-group">
							<input type="number" id="pierna_inf" name="pierna_inf" placeholder="Pierna inferior" min="5" max="120" value="<?php echo $control_recuperado -> obtener_pierna_inf(); ?>">
							<input type="hidden" id="pierna_inf-original" name="pierna_inf-original" value="<?php echo $control_recuperado -> obtener_pierna_inf(); ?>">
						</div>
					</span>
				</div>
		    </li>
		</ul>
	</div>
</div>
<div class="row d-none">
	<div class="form-group">
		<label for="url">URL <?php $control_recuperado -> mostrar_error_url(); ?></label>
		<input type="hidden" id="url" name="url" value="<?php echo $control_recuperado -> obtener_url(); ?>">
		<input type="hidden" id="url-original" name="url-original" value="<?php echo $control_recuperado -> obtener_url(); ?>">
	</div>
	<div class="checkbox">
		<label>
			<input type="checkbox" name="publicar" value="si" <?php if ($control_recuperado -> esta_activa()) echo 'checked' ?>>
			<input type="hidden" id="publicar-original" name="publicar-original" value="<?php echo $control_recuperado -> esta_activa(); ?>">
		</label>
	</div>
</div>



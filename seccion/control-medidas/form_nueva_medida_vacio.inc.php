<div class="row">
	<div class="col-md-5 col-xs-12">
		<ul class="collapsible">
		    <li>
				<div class="collapsible-header" title="Tómate y sube una foto para ir viendo tu progreso"><i class="material-icons">whatshot</i>Sube tu foto </div>
				<div class="collapsible-body">
					<span>
						<div class="form-group" id="upload_form">
							<h6><font color="grey">* Selecciona una imagen y luego presiona el boton subir.</font>
							</h6>
							<br>
							<label for="file1" id="label-archivo" class="btn btn-secundario"><span class="material-icons">add_a_photo</span></label>
							<input type="file" name="file1" id="file1" class="d-none">		
							<input name="imagen" class="d-none">					
							<input type="button" value="Subir" name="guardar_imagen" id="guardar_imagen" onclick="subirImagen()"  class="btn btn-principal">
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
				<div class="collapsible-header"><label for="peso"><i class="material-icons">whatshot</i>Peso</label></div>
				<div class="collapsible-body">
					<span>
						<div class="form-group">
							<input type="number" id="peso" name="peso" placeholder="Peso" min="25" max="150">
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
				<div class="collapsible-header"><label for="hombro"><i class="material-icons">whatshot</i>Hombro</label></div>
				<div class="collapsible-body">
					<span>
						<div class="form-group">
							<input type="number" id="hombro" name="hombro" placeholder="Hombro" min="5" max="120">
						</div>
					</span>
				</div>
		    </li>
		    <li>
				<div class="collapsible-header"><label for="pecho"><i class="material-icons">whatshot</i>Pecho o busto</label></div>
				<div class="collapsible-body">
					<span>
						<div class="form-group">
							<input type="number" id="pecho" name="pecho" placeholder="Pecho" min="5" max="120">
						</div>
					</span>
				</div>
		    </li>
		    <li>
				<div class="collapsible-header"><label for="espalda"><i class="material-icons">whatshot</i>Espalda</label></div>
				<div class="collapsible-body">
					<span>
						<div class="form-group">
							<input type="number" id="espalda" name="espalda" placeholder="Espalda" min="5" max="120">
						</div>
					</span>
				</div>
		    </li>    
		    <li>
				<div class="collapsible-header"><label for="brazo"><i class="material-icons">whatshot</i>Antebrazo</label></div>
				<div class="collapsible-body">
					<span>
						<div class="form-group">
							<input type="number" id="brazo" name="brazo" placeholder="Antebrazo" min="5" max="120">
						</div>
					</span>
				</div>
		    </li>
		    <li>
				<div class="collapsible-header"><label for="abdomen"><i class="material-icons">whatshot</i>Abdomen</label></div>
				<div class="collapsible-body">
					<span>
						<div class="form-group">
							<input type="number" id="abdomen" name="abdomen" placeholder="Abdomen" min="5" max="120">
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
				<div class="collapsible-header"><label for="cintura"><i class="material-icons">whatshot</i>Cintura</label></div>
				<div class="collapsible-body">
					<span>
						<div class="form-group">
							<input type="number" id="cintura" name="cintura" placeholder="Cintura" min="5" max="180">
						</div>
					</span>
				</div>
		    </li>
		    <li>
				<div class="collapsible-header"><label for="cadera"><i class="material-icons">whatshot</i>Cadera</label></div>
				<div class="collapsible-body">
					<span>
						<div class="form-group">
							<input type="number" id="cadera" name="cadera" placeholder="Cadera">
						</div>
					</span>
				</div>
		    </li>  
		    <li>
				<div class="collapsible-header"><label for="pierna_sup"><i class="material-icons">whatshot</i>Pierna superior</label></div>
				<div class="collapsible-body">
					<span>
						<div class="form-group">
							<input type="number" id="pierna_sup" name="pierna_sup" placeholder="Pierna superior" min="5" max="120">
						</div>
					</span>
				</div>
		    </li>
		    <li>
				<div class="collapsible-header"><label for="pierna_inf"><i class="material-icons">whatshot</i>Pierna inferior</label></div>
				<div class="collapsible-body">
					<span>
						<div class="form-group">
							<input type="number" id="pierna_inf" name="pierna_inf" placeholder="Pierna inferior" min="5" max="120">
						</div>
					</span>
				</div>
		    </li>
		    <li>
				<div class="collapsible-header"><label for="pantorrilla"><i class="material-icons">whatshot</i>Pantorrilla</label></div>
				<div class="collapsible-body">
					<span>
						<div class="form-group">
							<input type="number" id="pantorrilla" name="pantorrilla" placeholder="Pantorrilla" min="5" max="100">
						</div>
					</span>
				</div>
		    </li>  
		</ul>
	</div>
</div>


<input type="text" class="d-none" name="url">
<div class="container-fluid row" style="background-color: #f1f1f1;">	
	<div class="col-1"></div>
	<div class="row col-10">
		<div class="col-12"><br><br></div>
		<div class="col-12">
			<h2 class="textoBlack center">Control de medidas</h2>
			<br>
		</div>
		<?php 
		if (count($array_controles) > 0) {
		?>
		<div class="col-12">				
			<a href="<?php echo RUTA_NUEVA_MEDIDA; ?>" class="btn btn-principal">Tomar nueva medida</a>
			<hr>				
		</div>
		<div class="col-12 row">
			<?php
			for ($i = 0; $i < count($array_controles); $i++) {
				$control_actual = $array_controles[$i][0];				
				?>
			<div class="col-4">
				<a class="waves-effect waves-light modal-trigger" href="#<?php echo $control_actual -> obtener_url(); ?>">
					<div class="col-12 row center" style="background-color: white;padding: 1em;border: 1px grey solid;">
						<div class="col-12"><img src="<?php echo RUTA_IMG_MEDIDAS.$control_actual -> obtener_imagen(); ?>" class="imagen-4"></div>
						<div class="col-12"><br></div>
						<div class="col-12" align="left">
							<?php echo convertirFecha($control_actual -> obtener_fecha()); ?>
							<a class="dropdown-button right" href='#' data-activates='dropdown<?php echo $control_actual -> obtener_url(); ?>'><span class="material-icons">more_vert</span></a>
						</div>
					</div>
				</a>
				<?php //modal ?>
				<div id="<?php echo $control_actual -> obtener_url(); ?>" class="modal container modal-fixed-footer">
					<div class="modal-content">
						<div class="col-12 row">
							<div class="col-12 center">
								<br>
								<h3 class="textoBlack"><?php echo convertirFecha($control_actual -> obtener_fecha()); ?></h3>
								<br><hr><br>
							</div>	
							<div class="col-3 center">
								<img src="<?php echo RUTA_IMG_MEDIDAS.$control_actual -> obtener_imagen(); ?>" class="imagen-3">
								<br><br>
								<div class="textoBold">Peso:</div> <?php echo $control_actual -> obtener_peso(); ?> kg
							</div>
							<div class="col-2"></div>
							<div class="col-7 row">
								<div class="col-6">
									<div class="textoBold">Hombro: </div><?php echo $control_actual -> obtener_hombro(); ?> cm
									<br><br>
									<div class="textoBold">Pecho o busto: </div><?php echo $control_actual -> obtener_pecho(); ?> cm
									<br><br>
									<div class="textoBold">Espalda: </div><?php echo $control_actual -> obtener_espalda(); ?> cm
									<br><br>
									<div class="textoBold">Antebrazo: </div><?php echo $control_actual -> obtener_brazo(); ?> cm
									<br><br>
									<div class="textoBold">Abdomen: </div><?php echo $control_actual -> obtener_abdomen(); ?> cm					
								</div>
								<div class="col-6">
									<div class="textoBold">Cintura:</div> <?php echo $control_actual -> obtener_cintura(); ?> cm
									<br><br>
									<div class="textoBold">Cadera:</div> <?php echo $control_actual -> obtener_cadera(); ?> cm
									<br><br>
									<div class="textoBold">Pierna Superior:</div> <?php echo $control_actual -> obtener_pierna_sup(); ?> cm
									<br><br>
									<div class="textoBold">Pierna Inferior:</div> <?php echo $control_actual -> obtener_pierna_inf(); ?> cm
									<br><br>
									<div class="textoBold">Pantorrilla:</div> <?php echo $control_actual -> obtener_pantorrilla(); ?> cm
								</div>
							</div>		
						</div>						
					</div>
					<div class="modal-footer">
						<a href="#!" class="modal-close waves-effect">Cerrar</a>
					</div>
				</div>

				<ul id='dropdown<?php echo $control_actual -> obtener_url(); ?>' class='dropdown-content'>
				    <li>
				    	<a>
				    		<form method="post" action="<?php echo RUTA_EDITAR_MEDIDA; ?>">
								<input type="hidden" name="id_editar" value="<?php echo $control_actual -> obtener_id(); ?>">
								<input type="submit" value="Editar" name="editar_medida" class="btn btn-principal">
							</form>
					    </a>
					</li>
				    <li>
				    	<a>
				    		<form method="post" action="<?php echo RUTA_BORRAR_MEDIDA; ?>">
								<input type="hidden" name="id_borrar" value="<?php echo $control_actual -> obtener_id(); ?>">
								<input type="submit" value="Eliminar" name="borrar_medida" class="btn btn-principal">
							</form>
					    </a>
					</li>					    
				</ul>					
			</div>
			<?php
				}
			} else {
				?>
				<div class="col-12 center">				
					<br><hr>
					<h3>Aún no hay ningun control de progreso</h3>
					<br>
					<a href="<?php echo RUTA_NUEVA_MEDIDA; ?>" class="btn btn-principal">Tomar nueva medida</a>					
				</div>							
				<?php
			}
			?>		
		</div>
	</div>
</div>






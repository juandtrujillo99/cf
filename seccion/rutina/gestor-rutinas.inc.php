<div class="col-md-12 col-12 row">
	<br><br><br>
	<div class="col-md-1 col-1"></div>
	<div class="col-md-10 col-10">
		<div class="col-md-12">
			<h2 class="col-md-9"><br>Panel de rutinas</h2>
			<a href="<?php echo RUTA_NUEVA_RUTINA; ?>" class="btn btn-principal-animado col-md-3">Crear nueva rutina</a>
			<div class="col-md-12"><hr></div>
		</div>
	</div>
</div>
<div class="col-md-12 col-12 row" align="center">
	<div class="col-md-1 col-1"></div>
	<div class="col-md-10 col-10">
		<?php 
			if (count($array_rutinas) > 0) {
				?>
				<div class="col-md-12 col-12 row">
					<div class="col-md-12 col-12 row">
						<div class="col-md-2 d-none d-sm-block">Fecha</div>
						<div class="col-md-3 col-2">Imagen</div>
						<div class="col-md-3 col-5">Nombre</div>
						<div class="col-md-2 col-1"></div>
						<div class="d-block d-sm-none col-1"></div>
						<div class="col-md-2 col-1"></div>
					</div>
					<div class="col-md-12 col-12 row ">
						<?php
							for ($i = 0; $i < count($array_rutinas); $i++) {
								$rutina_actual = $array_rutinas[$i][0];
								$comentarios_rutina_actual = $array_rutinas[$i][1];
								?>
								<div class="col-md-12 col-12 row">
									<div class="col-md-2 d-none d-sm-block media"><?php echo convertirFecha($rutina_actual -> obtener_fecha()); ?></div>
									<div class="col-md-3 col-2">
										<a href="<?php echo RUTA_RUTINA . '/' . $rutina_actual -> obtener_url(); ?>" target="_blank">
											<img src="<?php echo RUTA_IMG_RUTINAS.$rutina_actual -> obtener_imagen(); ?>" class="imagen d-block d-sm-none">
											<img src="<?php echo RUTA_IMG_RUTINAS.$rutina_actual -> obtener_imagen(); ?>" class="imagen-2 d-none d-sm-block">
										</a>
									</div>
									<div class="col-md-3 col-5">
										<a href="<?php echo RUTA_RUTINA . '/' . $rutina_actual -> obtener_url(); ?>" target="_blank"><?php echo $rutina_actual -> obtener_titulo(); ?></a>
									</div>
									<div class="col-md-2 col-1">
										<form method="post" action="<?php echo RUTA_EDITAR_RUTINA; ?>">
											<input type="hidden" name="id_editar"
											 value="<?php echo $rutina_actual -> obtener_id(); ?>">
											<button type="submit" class="btn btn-principal"
											 name="editar_rutina"><i class="far fa-edit"></i></button>
										</form>
									</div>
									<div class="d-block d-sm-none col-1"></div>
									<div class="col-md-2 col-1">
										<form method="post" action="<?php echo RUTA_BORRAR_RUTINA; ?>">
											<input type="hidden" name="id_borrar" value="<?php echo $rutina_actual -> obtener_id(); ?>">
											<button type="submit" class="btn btn-secundario" name="borrar_rutina"><i class="fas fa-trash-alt"></i></button>
										</form>
									</div>
								</div>
								<div class="col-md-12 col-12"><hr></div>
								<?php
							}
						?>
					</div>
				</div>
				<?php
			} else {
				?>
				<h3 class="text-center">Todavía no has escrito ninguna rutina</h3>
				<br>
				<br>
				<?php
			}
		?>
	</div>
</div>


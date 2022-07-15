<div class="container_fluid">
	<div class="row">
		<div class="col-4"></div>
		<div class="col-4 row">
			<div class="col-12 row center">
				<div class="col-12"><br><br></div>
				<h1 class="col-12 textoBlack">Puntos de control</h1>
				<div class="col-12"><br><hr><br></div>
				<h5 class="col-8 textoBold">Controles publicados:</h5>
				<h4 class="col-4"><?php echo $cantidad_controles_activos; ?></h4>				
				<div class="col-12"><br></div>
				<h5 class="col-8 textoBold">Controles no publicados:</h5>
				<h4 class="col-4"><?php echo $cantidad_controles_inactivos; ?></h4>
				<div class="col-12">
					<br><br>
					<a href="<?php echo RUTA_GESTOR_MEDIDAS; ?>" class="btn btn-principal-animado">Ver mi progreso</a>
				</div>			
			</div>
		</div>
	</div>
</div>

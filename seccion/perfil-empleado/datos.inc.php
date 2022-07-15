<div class="row">
	<div class="col-1 col-md-1"></div>
	<div class="col-10 col-md-3">
		<div class="d-none d-sm-block">
			<h2 class="textoBold">Datos Básicos</h2>
			<hr><br>
		</div>
		<p class="textoBold">Nombre completo:</p>
		<?php 
		if (!empty($empleado -> obtener_nombre())) {
			?>
			<h6><?php echo $empleado -> obtener_nombre(); ?></h6>
			<?php
			}
		?>		
		<br>
		<p class="textoBold">Documento de identificación:</p>
		<?php 
		if (!empty($empleado -> obtener_cedula())) {
			?>
			<h6><?php echo $empleado -> obtener_cedula(); ?></h6>
			<?php
			}
		?>	
		<br>
		<p class="textoBold">Edad: </p>
		<?php 
		if (!empty($empleado -> obtener_bio())) {
			?>
			<h6><?php echo $empleado -> obtener_bio(); ?></h6>
			<?php
			}
		?>		
		<br><br><br>
	</div>
	<div class="col-1 col-md-1"></div>
	<div class="col-1 col-md-1"></div>
	<div class="col-10 col-md-4">		
		<h2 class="textoBold">Inicio de sesión y contacto</h2>	
		<hr><br>
		<p class="textoBold">Correo electrónico:</p>
		<?php 
		if (!empty($empleado -> obtener_email())) {
			?>			
			<h6><?php echo $empleado -> obtener_email(); ?></h6>
			<?php
			}
		?>	
		<br>
		<p class="textoBold">Teléfono:</p>
		<?php 
		if (!empty($empleado -> obtener_telefono())) {
			?>			
			<h6><?php echo $empleado -> obtener_telefono(); ?></h6>
			<?php
			}
		?>
		<br>
		<p class="textoBold">Miembro desde:</p>
		<?php 
		if (!empty($empleado -> obtener_fecha_registro())) {
			?>			
			<h6><?php echo convertirFecha($empleado -> obtener_fecha_registro()); ?></h6>
			<?php
			}
		?>
		<br><hr><br>	
		<a href="<?php echo RUTA_EDITAR_DATOS_EMPLEADOS; ?>" class="btn btn-principal-animado">Editar mis datos</a>
		<br><br>	
	</div>
</div>
<div class="col-12 row">
	<div class="col-1"></div>
	<div class="col-10">
		<p class="textoBold">Nombre completo:</p>
		<?php 
		if (!empty($empleado -> obtener_nombre())) {
			?>
			<h6><?php echo $empleado -> obtener_nombre(); ?></h6>
			<?php
			}
		?>
		<br>
		<p class="textoBold">Cédula:</p>
		<?php 
		if (!empty($empleado -> obtener_cedula())) {
			?>
			<h6><?php echo $empleado -> obtener_cedula(); ?></h6>
			<?php
			}
		?>
		<br>
		<p class="textoBold">Biografía:</p>
		<?php 
		if (!empty($empleado -> obtener_bio())) {
			?>
			<h6><?php echo $empleado -> obtener_bio(); ?></h6>
			<?php
			}
		?>
		<br>
		<h2 align="center" class="textoBold">Inicio de sesión</h2>
		<br>
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
		<p class="textoBold">Contraseña:</p>
		<p>*******</p>
		<br>	
		<p class="textoBold">Miembro desde:</p>
		<h6><?php echo convertirFecha($empleado -> obtener_fecha_registro()); ?></h6>
		<br>
		<a href="<?php echo RUTA_EDITAR_DATOS_EMPLEADOS; ?>" class="btn btn-principal-animado">Editar mis datos</a>
		<br><br>	
	</div>
</div>
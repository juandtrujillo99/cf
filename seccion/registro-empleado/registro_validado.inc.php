<ul class="collapsible" data-collapsible="expandable">
	<li>
		<div class="collapsible-header active">
			<span class="material-icons">fingerprint</span> Documento de identidad
			<?php
			$validador -> mostrar_error_cedula();
			?>
		</div>
		<div class="collapsible-body">
			<input type="number" name="cedula" placeholder="Documento de identidad" required <?php $validador -> mostrar_cedula()?>>
			
		</div>
	</li>
	<li>
		<div class="collapsible-header active">
			<span class="material-icons">perm_identity</span> Nombre completo
			<?php
			$validador -> mostrar_error_nombre();
			?>
		</div>
		<div class="collapsible-body">
			<input type="text" name="nombre" placeholder="Nombres y apellidos" required <?php $validador -> mostrar_nombre()?>>			
		</div>
	</li>
	<li>
		<div class="collapsible-header active">
			<span class="material-icons">description</span> Biografía
			<?php
			$validador -> mostrar_error_bio();
			?>
		</div>
		<div class="collapsible-body">
			<input type="text" name="bio" required <?php $validador -> mostrar_bio()?>>			
		</div>
	</li>
	<li>
		<div class="collapsible-header active">
			<span class="material-icons">phone</span> Teléfono
			<?php
			$validador -> mostrar_error_telefono();
			?>
		</div>
		<div class="collapsible-body">
			<input type="text" name="telefono" placeholder="Teléfono" required <?php $validador -> mostrar_telefono()?>>			
		</div>
	</li>
	<li>
		<div class="collapsible-header active">
			<span class="material-icons">how_to_reg</span> Datos para iniciar sesión
			<?php
			$validador -> mostrar_error_email();
			?>
			<?php
			$validador -> mostrar_error_clave1();
			?>
			<?php
			$validador -> mostrar_error_clave2();
			?>
		</div>
		<div class="collapsible-body">
			<input type="email" name="email" placeholder="Correo" required <?php $validador -> mostrar_email()?>>
			<br>
			<input type="password" name="clave1" placeholder="Contraseña" required <?php $validador -> mostrar_clave1()?>>
			<br>
			<input type="password" name="clave2" placeholder="Contraseña otra vez" required <?php $validador -> mostrar_clave2()?>>
			
		</div>
	</li>
</ul>
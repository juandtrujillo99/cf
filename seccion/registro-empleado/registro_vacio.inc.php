<ul class="collapsible" data-collapsible="expandable">
	<li>
		<div class="collapsible-header">
			<span class="material-icons">fingerprint</span> Documento de identidad
		</div>
		<div class="collapsible-body">
			<input type="number" name="cedula" placeholder="Documento de identidad" required>
		</div>
	</li>
	<li>
		<div class="collapsible-header">
			<span class="material-icons">perm_identity</span> Nombre completo
		</div>
		<div class="collapsible-body">
			<input type="text" name="nombre" placeholder="Nombres y apellidos" required>
		</div>
	</li>
	<li>
		<div class="collapsible-header">
			<span class="material-icons">description</span> Biografía
		</div>
		<div class="collapsible-body">
			<input type="text" name="bio">
		</div>
	</li>
	<li>
		<div class="collapsible-header">
			<span class="material-icons">phone</span> Teléfono
		</div>
		<div class="collapsible-body">
			<input type="text" name="telefono" placeholder="Teléfono" required>
		</div>
	</li>
	<li>
		<div class="collapsible-header active">
			<span class="material-icons">how_to_reg</span> Datos para iniciar sesión
		</div>
		<div class="collapsible-body">
			<input type="email" name="email" placeholder="Correo" required><br>
			<input type="password" name="clave1" placeholder="Contraseña" required><br>
			<input type="password" name="clave2" placeholder="Contraseña otra vez" required>
		</div>
	</li>
</ul>
<button type="reset" class="btn btn-secundario" title="Se eliminarán los datos escritos">Eliminar formulario</button>
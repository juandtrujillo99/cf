<?php
include_once 'app/empleado/ControlSesion.inc.php';
include_once 'app/empleado/Empleado.inc.php';
include_once 'app/empleado/RepositorioEmpleado.inc.php';
include_once 'app/empleado/editar-datos/RepositorioEdicionDatos.inc.php';
include_once 'app/Redireccion.inc.php';

if(!ControlSesionEmpleado :: sesion_iniciada()) {
	Redireccion :: redirigir(SERVIDOR);
	}else {
			Conexion :: abrir_conexion();
			$id = $_SESSION['id_empleado'];
			$empleado = RepositorioEmpleado :: obtener_empleado_por_id(Conexion::obtener_conexion(), $id);
	}

include_once 'app/empleado/editar-datos/ActualizarDatos.inc.php';

$titulo = "Edición de datos $nombreEmpresa";

include_once 'seccion/cabecera-inicio.inc.php';
include_once 'scripts/mostrarPass.php';
?>
<script type="text/javascript" src="<?php echo RUTA_JS; ?>desaparecer-automaticamente.js"></script>
<?php
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-12 row">
			<div class="col-1 d-block d-sm-none"></div>
			<div class="col-10 col-md-12">
				<br><br>
				<h1 class="textoBlack" align="center">Actualiza tus datos</h1>
			</div>
			<div class="col-2 col-md-4"></div>
			<a href="<?php echo RUTA_PERFIL_EMPLEADO; ?>" class="btn btn-principal-animado col-8 col-md-4">Volver al perfíl</a>	
		</div>
		<div class="d-block d-sm-none col-1"></div>
		<div class="col-10 row">
			<div class="col-md-2 d-none d-sm-block"></div>
			<div class="col-md-10 row">
				<div class="col-12 col-md-5">
					<br><br>
					<h3 class="textoBold">Datos personales</h3>
					<br>
					<ul class="collapsible" data-collapsible="accordion">
						<li>
							<div class="collapsible-header">
								<span class="material-icons">perm_identity</span> Nombre
							</div>
							<div class="collapsible-body">
								<form role="form" class="row" method="post"  action="<?php echo RUTA_EDITAR_DATOS_EMPLEADO; ?>">
									<input type="text" name="nombre" placeholder="Nombres" class="col-12" style="margin-right: 1em;">
									<div class="col-12"><br></div>
									<button type="submit" name="guardar-nombre" class="btn btn-principal col-12 col-md-6">
										<span><i class="fas fa-save"></i> Guardar</span>
									</button>
								</form>
							</div>
						</li>
						<li>
							<div class="collapsible-header">
								<span class="material-icons">fingerprint</span> Agregar documento de identificación
							</div>
							<div class="collapsible-body">
								<form role="form" class="row" method="post"  action="<?php echo RUTA_EDITAR_DATOS_EMPLEADO; ?>">
									<input type="number" name="cedula" placeholder="Documento de identificación" class="col-8 col-md-7">
									<div class="col-1"><br></div>
									<button type="submit" name="guardar-cedula" class="btn btn-principal col-3 col-md-4">
										<span class="d-block d-sm-none"><i class="fas fa-save"></i></span>
										<span class="d-none d-sm-block">Guardar</span>
									</button>
								</form>
							</div>
						</li>
						<li>
							<div class="collapsible-header">
								<span class="material-icons">cake</span> Enlace 
							</div>
							<div class="collapsible-body">
								<form role="form" class="row" method="post"  action="<?php echo RUTA_EDITAR_DATOS_EMPLEADO; ?>">
									<input type="text" name="bio" placeholder="Enlaces" class="col-12" style="margin-right: 1em;">
									<div class="col-12"><br></div>
									<button type="submit" name="guardar-bio" class="btn btn-principal col-12 col-md-6">
										<span><i class="fas fa-save"></i> Guardar</span>
									</button>
								</form>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-1 d-none d-sm-block"></div>
				<div class="col-12 col-md-6">
					<br><br>
					<h3 class="textoBold">Inicio de sesión y seguridad</h3>
					<br>
					<ul class="collapsible" data-collapsible="accordion">
						<li>
							<div class="collapsible-header">
								<span class="material-icons">mark_email_read</span> Correo electrónico
							</div>
							<div class="collapsible-body">
								<form role="form" class="row" method="post"  action="<?php echo RUTA_EDITAR_DATOS_EMPLEADO; ?>">
									<input type="email" name="email" placeholder="Correo electronico" class="col-8">
									<button type="submit" name="guardar-email" class="btn btn-principal col-4">
										<span class="d-block d-sm-none"><i class="fas fa-save"></i></span>
										<span class="d-none d-sm-block">Guardar</span>
									</button>
								</form>
							</div>
						</li>
						<li>
							<div class="collapsible-header">
								<span class="material-icons">lock</span> Contraseña
							</div>
							<div class="collapsible-body">
								<form role="form" class="row" method="post"  action="<?php echo RUTA_EDITAR_DATOS_EMPLEADO; ?>">
									<div class="col-12 row">
										<input class="col-8" id="txtPassword" type="Password" name="clave" placeholder="Contraseña" autocomplete="off">
										<button id="show_password" class="btn btn-principal-animado col-4" type="button" onclick="mostrarPassword()"><span class="fa fa-eye-slash icon"></span></button>
									</div>
									<div class="col-12"><br></div>
									<button type="submit" name="guardar-clave" class="btn btn-principal col-12">
										<span><i class="fas fa-save"></i> Guardar</span>
									</button>
								</form>
							</div>
						</li>					
						<li>
							<div class="collapsible-header">
								<span class="material-icons">phone</span> Teléfono
							</div>
							<div class="collapsible-body">
								<form role="form" class="row" method="post"  action="<?php echo RUTA_EDITAR_DATOS_EMPLEADO; ?>">
									<input type="number" name="telefono" placeholder="Teléfono" class="col-7">
									<div class="col-1"></div>
									<button type="submit" name="guardar-telefono" class="btn btn-principal col-4">
										<span class="d-block d-sm-none"><i class="fas fa-save"></i></span>
										<span class="d-none d-sm-block">Guardar</span>
									</button>
								</form>
							</div>
						</li>
					</ul>	
				</div>			
			</div>
		</div>
	</div>
	<br><br>
</div>

<?php
include_once 'seccion/doc-terminacion.inc.php';
?>
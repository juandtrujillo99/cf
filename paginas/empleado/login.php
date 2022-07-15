<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/empleado/RepositorioEmpleado.inc.php';
include_once 'app/empleado/ValidadorLogin.inc.php';
include_once 'app/empleado/ControlSesion.inc.php';
include_once 'app/Redireccion.inc.php';

if (ControlSesionEmpleado::sesion_iniciada()) {
	Redireccion::redirigir(RUTA_PERFIL_EMPLEADO);
}


if (isset($_POST['login'])) {
	Conexion::abrir_conexion();
	$validador = new ValidadorLogin($_POST['email'], $_POST['clave'], Conexion::obtener_conexion());

	if ($validador -> obtener_error() === '' &&
		!is_null($validador -> obtener_empleado())) {
		//iniciar sesion
		//redirigir a dashboard
		ControlSesionEmpleado::iniciar_sesion(
			$validador -> obtener_empleado() -> obtener_id(),
			$validador -> obtener_empleado() -> obtener_nombre());
		Redireccion::redirigir(RUTA_PERFIL_EMPLEADO);
		}

		Conexion::cerrar_conexion();
}


$titulo = 'Colaborador '.$nombreEmpresa;

include_once 'seccion/cabecera-inicio.inc.php';
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
?>
<?php //body ?>
<div class="container-fluid">
<?php 
	include_once 'seccion/login-empleado/pc.inc.php';
	include_once 'seccion/login-empleado/movil.inc.php';
?>  
<br><br>  
</div>
<?php //body ?>
<?php
include_once 'seccion/doc-terminacion.inc.php';
?>

<?php

include_once 'app/empleado/RepositorioRecuperacionClave.inc.php';
include_once 'app/Redireccion.inc.php';

Conexion::abrir_conexion();

if (RepositorioRecuperacionClaveEmpleado::url_secreta_existe(Conexion::obtener_conexion(), $url_personal)) {
	$id_empleado = RepositorioRecuperacionClaveEmpleado::obtener_id_empleado_mediante_url_secreta(Conexion::obtener_conexion(), $url_personal);
}
else{
	echo '404';
}

if (isset($_POST['guardar-clave'])) {
	//validar clave 1
	//validar clave 2 a ver si coincide

	$clave_cifrada = password_hash($_POST['clave'], PASSWORD_DEFAULT);
	$clave_actualizada = RepositorioEmpleado::actualizar_password(Conexion::obtener_conexion(), $id_empleado, $clave_cifrada);

	//redirigir a notificacion de actualizacion correcta y ofrecer link a login

	if ($clave_actualizada) {
		Redireccion:: redirigir(RUTA_LOGIN_EMPLEADO);
	}
	else{
		//informar error
		echo 'ERROR';
	}
}

Conexion::cerrar_conexion();

$titulo = "Recuperacion de contraseña $nombreEmpresa";

include_once 'seccion/cabecera-inicio.inc.php';
include_once 'scripts/mostrarPass.php';
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
?>

<div class="container-fluid">
<div class="row">
	<div class="d-block d-sm-none col-1"></div>
	<div class="col-10 row">
		<div class="col-md-4"></div>
		<div class="col-md-8">
			<br><br>
			<h1 align="center" class="textoBlack">Crea una nueva contraseña</h1>
			<br>
			<h3>Escribe tu nueva contraseña.</h3>
			<br>
			<form role="form" method="post"  action="<?php echo RUTA_RECUPERACION_CLAVE_EMPLEADO."/".$url_personal; ?>">				
				<input id="txtPassword" type="Password" name="clave" placeholder="Contraseña" required autofocus autocomplete="off">
				<button id="show_password" class="btn btn-principal-animado" type="button" onclick="mostrarPassword()"><span class="fa fa-eye-slash icon"></span></button>
				<button type="submit" name="guardar-clave" class="btn btn-principal">Restablecer</button>
			</form>
		</div>
	</div>
</div>
<br><br>
</div>

<?php
include_once 'seccion/doc-terminacion.inc.php';
?>
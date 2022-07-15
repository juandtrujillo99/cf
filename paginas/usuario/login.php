<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/usuario/RepositorioUsuario.inc.php';
include_once 'app/usuario/ValidadorLogin.inc.php';
include_once 'app/usuario/ControlSesion.inc.php';
include_once 'app/Redireccion.inc.php';

if (ControlSesion::sesion_iniciada()) {
	Redireccion::redirigir(RUTA_ENTRENAR);
}


if (isset($_POST['login'])) {
	Conexion::abrir_conexion();
	$validador = new ValidadorLogin($_POST['telefono'], $_POST['clave'], Conexion::obtener_conexion());

	if ($validador -> obtener_error() === '' &&
		!is_null($validador -> obtener_usuario())) {
		//iniciar sesion
		//redirigir a dashboard
		ControlSesion::iniciar_sesion(
			$validador -> obtener_usuario() -> obtener_id(),
			$validador -> obtener_usuario() -> obtener_nombre());
		Redireccion::redirigir(RUTA_PERFIL);
		}

		Conexion::cerrar_conexion();
}


$titulo = 'Iniciar sesión '.$nombreEmpresa;

include_once 'seccion/cabecera-inicio.inc.php';
?>
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>sobreponer.css">
<?php
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
include_once 'seccion/login/formulario.inc.php';
include_once 'seccion/doc-terminacion.inc.php';
?>

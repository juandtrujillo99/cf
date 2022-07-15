<?php
include_once 'app/Conexion.inc.php';
include_once 'app/usuario/ControlSesion.inc.php';
include_once 'app/usuario/RepositorioUsuario.inc.php';
include_once 'app/control-medidas/RepositorioControlMedida.inc.php';
include_once 'app/Redireccion.inc.php';


if (!ControlSesion :: sesion_iniciada()) {
    Redireccion :: redirigir(RUTA_LOGIN);
}
else{
    Conexion :: abrir_conexion();
    $id = $_SESSION['id_usuario'];
    $usuario = RepositorioUsuario :: obtener_usuario_por_id(Conexion::obtener_conexion(), $id);
}


include 'scripts/formatoFecha.php';

$titulo = "Gestor de control de medidas $nombreEmpresa";

include 'seccion/cabecera-inicio.inc.php';
include 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
include_once 'seccion/panel_control_declaracion.inc.php';

switch($gestor_actual) {
	case '':
		$cantidad_controles_activos = RepositorioControlMedida :: contar_controles_activos_usuario(Conexion::obtener_conexion(), $_SESSION['id_usuario']);
		$cantidad_controles_inactivos = RepositorioControlMedida :: contar_controles_inactivos_usuario(Conexion::obtener_conexion(), $_SESSION['id_usuario']);

	
		include_once 'seccion/control-medidas/gestor-generico.inc.php';
		break;
	case 'medidas':
		$array_controles = RepositorioControlMedida :: obtener_controles_usuario_fecha_descendente(Conexion::obtener_conexion(), $_SESSION['id_usuario']);
	
		include_once 'seccion/control-medidas/gestor-medidas.inc.php';
		break;

}

include_once 'seccion/panel_control_cierre.inc.php';
include_once 'seccion/doc-terminacion.inc.php';

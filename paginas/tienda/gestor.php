<?php
include_once 'app/Conexion.inc.php';
include_once 'app/empleado/ControlSesion.inc.php';
include_once 'app/empleado/RepositorioEmpleado.inc.php';
include_once 'app/Redireccion.inc.php';


if (!ControlSesionEmpleado :: sesion_iniciada()) {
    Redireccion :: redirigir(RUTA_LOGIN_EMPLEADO);
}
else{
    Conexion :: abrir_conexion();
    $id = $_SESSION['id_empleado'];
    $empleado = RepositorioEmpleado :: obtener_empleado_por_id(Conexion::obtener_conexion(), $id);
}



include_once 'seccion/formato-fecha.php';

$titulo = "Gestor | $nombreEmpresa";

include 'seccion/cabecera-inicio.inc.php';
include 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar2.inc.php';
include_once 'seccion/panel_control_declaracion.inc.php';



switch($gestor_actual) {
	case '':
		$cantidad_entradas_activas = RepositorioEntrada :: contar_entradas_activas_usuario(Conexion::obtener_conexion(), $_SESSION['id_usuario']);
		$cantidad_entradas_inactivas = RepositorioEntrada :: contar_entradas_inactivas_usuario(Conexion::obtener_conexion(), $_SESSION['id_usuario']);

	
		include_once 'seccion/tienda/gestor-generico.inc.php';
		break;
	case 'productos':
		$array_entradas = RepositorioEntrada :: obtener_entradas_usuario_titulo_ascendente(Conexion::obtener_conexion(), $_SESSION['id_usuario']);	
		include_once 'seccion/tienda/gestor-entradas.inc.php';
		break;
	case 'comentarios':
		include_once 'seccion/tienda/gestor-comentarios.inc.php';
		break;
	case 'favoritos':
		include_once 'seccion/tienda/gestor-favoritos.inc.php';
		break;
}

include_once 'seccion/panel_control_cierre.inc.php';
include_once 'seccion/doc-terminacion.inc.php';
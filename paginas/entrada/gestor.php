<?php
include_once 'app/Conexion.inc.php';
include_once 'app/empleado/ControlSesion.inc.php';
include_once 'app/empleado/RepositorioEmpleado.inc.php';
include_once 'app/entrada/EscritorEntradas.inc.php';
include_once 'app/Redireccion.inc.php';


if(!ControlSesionEmpleado :: sesion_iniciada()) {
	Redireccion :: redirigir(SERVIDOR);
} 
else{
	Conexion :: abrir_conexion();
	$id = $_SESSION['id_empleado'];
	$empleado = RepositorioEmpleado :: obtener_empleado_por_id(Conexion::obtener_conexion(), $id);
}

$titulo = "Gestor | $nombreEmpresa";

include_once 'seccion/cabecera-inicio.inc.php';
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
include_once 'seccion/panel_control_declaracion.inc.php';

switch($gestor_actual) {
	case '':
		$cantidad_entradas_activas = RepositorioEntrada :: contar_entradas_activas_empleado(Conexion::obtener_conexion(), $_SESSION['id_empleado']);
		$cantidad_entradas_inactivas = RepositorioEntrada :: contar_entradas_inactivas_empleado(Conexion::obtener_conexion(), $_SESSION['id_empleado']);
	
		$cantidad_comentarios = RepositorioComentario :: contar_comentarios_usuario(Conexion::obtener_conexion(), $_SESSION['id_usuario']);
	
		include_once 'seccion/entrada/gestor-generico.inc.php';
		break;
	case 'entradas':
		$array_entradas = RepositorioEntrada :: obtener_entradas_empleado_fecha_descendente(Conexion::obtener_conexion(), $_SESSION['id_empleado']);
	
		include_once 'seccion/entrada/gestor-entradas.inc.php';
		break;
	case 'comentarios':
		include_once 'seccion/entrada/gestor-comentarios.inc.php';
		break;
	case 'favoritos':
		include_once 'seccion/entrada/gestor-favoritos.inc.php';
		break;
}

include_once 'seccion/panel_control_cierre.inc.php';
include_once 'seccion/doc-terminacion.inc.php';
?>

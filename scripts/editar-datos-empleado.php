<?php

include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/empleado/ControlSesion.inc.php';
include_once 'app/empleado/Empleado.inc.php';
include_once 'app/empleado/editar-datos/EdicionDatos.inc.php';
include_once 'app/empleado/RepositorioEmpleado.inc.php';
include_once 'app/empleado/editar-datos/RepositorioEdicionDatos.inc.php';

include_once 'app/Redireccion.inc.php';

function sa($longitud){
	$caracteres = '0123456789abcdefghijklmnopqrstcvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$numero_caracteres = strlen($caracteres);
	$string_aleatorio = '';

	for ($i = 0; $i < $longitud; $i++) { 
		$string_aleatorio .= $caracteres[rand(0, $numero_caracteres - 1)];
	}
	return $string_aleatorio;
}

/*Empleado recuperacion*/
if(!ControlSesionEmpleado :: sesion_iniciada()) {
	Redireccion :: redirigir(SERVIDOR);
} 
else {
	Conexion::abrir_conexion();
	$id = $_SESSION['id_empleado'];
	$empleado = RepositorioEmpleado :: obtener_empleado_por_id(Conexion::obtener_conexion(), $id);


	$nombre_empleado = $empleado -> obtener_nombre();
	$string_aleatorio = sa(10);

	$url_secreta = hash('sha256', $string_aleatorio . $nombre_empleado);

	$peticion_generada = RepositorioEdicionDatos :: generar_peticion(Conexion :: obtener_conexion(), $empleado -> obtener_id(), $url_secreta);

	Conexion :: cerrar_conexion();

	if ($peticion_generada) {
		Redireccion :: redirigir(RUTA_EDITAR_DATOS_EMPLEADO."/".$url_secreta);
	}
}
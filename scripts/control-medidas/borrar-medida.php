<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/control-medidas/RepositorioControlMedida.inc.php';
include_once 'app/Redireccion.inc.php';

if (isset($_POST['borrar_medida'])) {
	$id_medida = $_POST['id_borrar'];

	Conexion :: abrir_conexion();

	RepositorioControlMedida :: eliminar_control(Conexion :: obtener_conexion(), $id_control);

	Conexion :: cerrar_conexion();

	Redireccion :: redirigir(RUTA_GESTOR_MEDIDAS);
}
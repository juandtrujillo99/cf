<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/rutina/RepositorioRutina.inc.php';
include_once 'app/Redireccion.inc.php';

if (isset($_POST['borrar_rutina'])) {
	$id_rutina = $_POST['id_borrar'];

	Conexion :: abrir_conexion();

	RepositorioRutina :: eliminar_comentarios_y_rutina(Conexion :: obtener_conexion(), $id_rutina);

	Conexion :: cerrar_conexion();

	Redireccion :: redirigir(RUTA_GESTOR_RUTINAS);
}
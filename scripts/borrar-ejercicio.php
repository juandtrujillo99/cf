<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioEjercicio.inc.php';
include_once 'app/Redireccion.inc.php';

if (isset($_POST['borrar_ejercicio'])) {
	$id_ejercicio = $_POST['id_borrar'];

	Conexion :: abrir_conexion();

	RepositorioEjercicio :: eliminar_comentarios_y_ejercicio(Conexion :: obtener_conexion(), $id_ejercicio);

	Conexion :: cerrar_conexion();

	Redireccion :: redirigir(RUTA_PANEL_EJERCICIOS);
}
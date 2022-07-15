<?php

class ControlSesionEmpleado{
	public static function iniciar_sesion($id_empleado, $nombre_empleado){
		if(session_id() == ''){
			session_start();
		}

		$_SESSION['id_empleado'] = $id_empleado;
		$_SESSION['nombre_empleado'] = $nombre_empleado;
	}
	public static function cerrar_sesion(){
		if(session_id() == ''){
			session_start();
		}
		if(isset($_SESSION['id_empleado'])){
			unset($_SESSION['id_empleado']);
		}
		if(isset($_SESSION['nombre_empleado'])){
			unset($_SESSION['nombre_empleado']);
		}
		session_destroy();
	}
	public static function sesion_iniciada(){
		if(session_id() == ''){
			session_start();
		}
		if(isset($_SESSION['id_empleado']) && isset($_SESSION['nombre_empleado'])){
			return true;
		}
		else{
			return false;
		}
	}
}

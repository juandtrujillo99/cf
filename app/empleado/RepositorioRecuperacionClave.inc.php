<?php

class RepositorioRecuperacionClaveEmpleado{

	public static function generar_peticion($conexion, $id_empleado, $url_secreta){
		$peticion_generada = false;

		if (isset($conexion)) {
			try{
				$sql = "INSERT INTO recuperacion_clave_empleado(empleado_id, url_secreta, fecha) VALUES (:empleado_id, :url_secreta, NOW())";

				$sentencia = $conexion -> prepare($sql);

				$sentencia -> bindParam(':empleado_id', $id_empleado, PDO :: PARAM_STR);
				$sentencia -> bindParam(':url_secreta', $url_secreta, PDO :: PARAM_STR);

				$peticion_generada = $sentencia -> execute();
			}
			catch(PDOException $ex){
				print 'ERROR' . $ex -> getMessage();

			}
		}
		return $peticion_generada;
	}

	public static function url_secreta_existe($conexion, $url_secreta){
		$url_existe = false;

		if (isset($conexion)) {
			try{
				$sql = "SELECT * FROM recuperacion_clave_empleado WHERE url_secreta = :url_secreta";

				$sentencia = $conexion -> prepare($sql);

				$sentencia -> bindParam(':url_secreta', $url_secreta, PDO::PARAM_STR);

				$sentencia -> execute();

				$resultado = $sentencia -> fetchAll();

				if(count($resultado)){
					$url_existe = true;					
				}
				else{
					$url_existe = false;
				}
			}
			catch(PDOException $ex){
				print 'ERROR' . $ex -> getMessage();
			}
		}
		return $url_existe;
	}

	public static function obtener_id_empleado_mediante_url_secreta($conexion, $url_secreta){
		$id_empleado = null;

		if (isset($conexion)) {
			try{
				include_once 'RecuperacionClave.inc.php';

				$sql = "SELECT * FROM recuperacion_clave_empleado WHERE url_secreta = :url_secreta";

				$sentencia = $conexion -> prepare($sql);

				$sentencia -> bindParam(':url_secreta', $url_secreta, PDO::PARAM_STR);

				$sentencia -> execute();

				$resultado = $sentencia -> fetch();

				if(!empty($resultado)){
					$id_empleado = $resultado['empleado_id'];					
				}
			}
			catch(PDOException $ex){
				print 'ERROR' . $ex -> getMessage();
			}
		}
		return $id_empleado;
	}
}

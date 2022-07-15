<?php
include_once 'RepositorioEmpleado.inc.php';

class ValidadorLogin{
	private $empleado;
	private $error;

	public function __construct($email, $clave, $conexion){

		$this -> error = "";

		if (!$this -> variable_iniciada($email) || !$this -> variable_iniciada($clave)) {
			$this -> empleado = null;
			$this -> error = "Debes introducir tu email y tu contraseña";
		}
		else{
			$this -> empleado = RepositorioEmpleado::obtener_empleado_por_email($conexion, $email);
			if (is_null($this -> empleado) || !password_verify($clave, $this -> empleado -> obtener_password())) {
				$this -> error = "Datos incorrectos";
			}
		}
	}

	private function variable_iniciada($variable){
		if (isset($variable) && !empty($variable)) {
			return true;			
		}
		else{
			return false;
		}
	}
	public function obtener_empleado(){
		return $this -> empleado;
	}
	public function obtener_error(){
		return $this -> error;
	}
	public function mostrar_error(){
		if ($this -> error !== '') {
			echo "<div class='alert alert-danger' role='alert'>";
			echo $this -> error;
			echo "</div><br>";
		}
	}
}
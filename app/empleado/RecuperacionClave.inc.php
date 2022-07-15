<?php

class RecuperacionClaveEmpleado{

	private $id;
	private $empleado_id;
	private $url_secreta;
	private $fecha;

	public function __construct($id, $empleado_id, $url_secreta, $fecha){

		$this -> id = $id;
		$this -> empleado_id = $empleado_id;
		$this -> url_secreta = $url_secreta;
		$this -> fecha = $fecha;
	}
}
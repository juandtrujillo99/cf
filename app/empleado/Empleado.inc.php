<?php

/**
 * 
 */
class Empleado{

	private $id;
	private $cedula;
	private $nombre;
	private $bio;
	private $telefono;
	private $email;
	private $password;
	private $fecha_registro;
	private $activo;

	public function __construct($id, $cedula, $nombre, $bio, $telefono, $email, $password, $fecha_registro, $activo){
		$this -> id = $id;
		$this -> cedula = $cedula;
		$this -> nombre = $nombre;
		$this -> bio = $bio;
		$this -> telefono = $telefono;
		$this -> email = $email;
		$this -> password = $password;
		$this -> fecha_registro = $fecha_registro;
		$this -> activo = $activo;
	}

	public function obtener_id(){
		return $this -> id;
	}
	public function obtener_cedula(){
		return $this -> cedula;
	}
	public function obtener_nombre(){
		return $this -> nombre;
	}
	public function obtener_bio(){
		return $this -> bio;
	}
	public function obtener_telefono(){
		return $this -> telefono;
	}
	public function obtener_email(){
		return $this -> email;
	}
	public function obtener_password(){
		return $this -> password;
	}
	public function obtener_fecha_registro(){
		return $this -> fecha_registro;
	}
	public function esta_activo(){
		return $this -> activo;
	}

	public function cambiar_nombre($nombre){
		$this -> nombre = $nombre;
	}
	public function cambiar_bio($bio){
		$this -> bio = $bio;
	}
	public function cambiar_telefono($telefono){
		$this -> telefono = $telefono;
	}
	public function cambiar_email($email){
		$this -> email = $email;
	}
	public function cambiar_password($password){
		$this -> password = $password;
	}
	public function cambiar_activo($activo){
		$this -> activo = $activo;
	}

}
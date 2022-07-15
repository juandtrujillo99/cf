<?php

include_once 'RepositorioEmpleado.inc.php';

class ValidadorRegistroEmpleado{

	private $aviso_inicio;
	private $aviso_cierre;

	private $cedula;
	private $nombre;
	private $bio;
	private $telefono;
	private $email;
	private $clave;

	private $error_cedula;
	private $error_nombre;
	private $error_bio;
	private $error_telefono;
	private $error_email;
	private $error_clave1;
	private $error_clave2;

	public function __construct($cedula, $nombre, $bio, $telefono, $email, $clave1, $clave2, $conexion){
		$this -> aviso_inicio = "<span class='alert alert-danger'>";
		$this -> aviso_cierre = "<a href='javascript:history.back(1)'> Clic aquí para corregir</a></span>";


		$this -> cedula = "";
		$this -> nombre = "";
		$this -> bio = "";
		$this -> telefono = "";
		$this -> email = "";
		$this -> clave = "";

		$this -> error_cedula = $this -> validar_cedula($conexion, $cedula);
		$this -> error_nombre = $this -> validar_nombre($conexion, $nombre);
		$this -> error_bio = $this -> validar_bio($conexion, $bio);
		$this -> error_telefono = $this -> validar_telefono($conexion, $telefono);
		$this -> error_email = $this -> validar_email($conexion, $email);
		$this -> error_clave1 = $this -> validar_clave1($clave1);
		$this -> error_clave2 = $this -> validar_clave2($clave1, $clave2);

		if ($this -> error_clave1 === "" && $this -> error_clave2 === "") {
			$this -> clave = $clave1;
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

	private function validar_cedula($conexion, $cedula){
		if (!$this -> variable_iniciada($cedula)) {
			return "Escribe la cédula.";
		}
		else{
			$this -> cedula = str_replace(" ", "", $cedula);//aqui es donde se almacena el codigo del empleado
		}
		if (strlen($cedula) < 7) {
			return "La cedula debe tener 8 dígitos como mínimo.";
		}
		if (strlen($cedula) > 24) {
			return "La cedula no puede superar 15 caracteres.";
		}

		if (RepositorioEmpleado :: cedula_existe($conexion, $cedula)) {
			return "La cedula ya fue ingresada.";
		}
		return "";
	}


	private function validar_nombre($conexion, $nombre){
		if (!$this -> variable_iniciada($nombre)) {
			$this -> nombre = $nombre;
		}
		else{
			$this -> nombre = str_replace(" ", " ", $nombre);//aqui es donde se almacena el nombre de empleado
		}
		if (strlen($nombre) < 2) {
			return "El nombre debe ser más largo.";
		}
		if (strlen($nombre) > 24) {
			return "El nombre no puede ser tan largo.";
		}
		return "";
	}

	private function validar_bio($conexion, $bio){
		if (!$this -> variable_iniciada($bio)) {
			$this -> bio = $bio;
		}
		else{
			$this -> bio = $bio;
		}
		return "";
	}



	private function validar_telefono($conexion, $telefono){
		if (!$this -> variable_iniciada($telefono)) {
			$this -> telefono = $telefono; 
		}
		else{
			$this -> telefono = str_replace(" ", " ", $telefono);//aqui es donde se almacena el nombre de empleado
		}
		if (!empty($telefono) && strlen($telefono) < 7) {
			return "Por favor ingresa tu teléfono.";
		}
		if (!empty($telefono) && strlen($telefono) > 11) {
			return "Por favor ingresa tu teléfono.";
		}
		return "";
	}

	private function validar_email($conexion, $email){
		if(!$this -> variable_iniciada($email)){
			return "Agrega un email.";
		}
		else {
			$this -> email = $email;
		}

		if (RepositorioEmpleado :: email_existe($conexion, $email)) {
			return "El email ya está en uso, prueba con otro";
		}

		return "";
	}

	private function validar_clave1($clave1){
		if(!$this -> variable_iniciada($clave1)){
			return "Agrega una contraseña valida.";
		}
		return "";
	}

	private function validar_clave2($clave1, $clave2){
		if (!$this -> variable_iniciada($clave1)) {
			return "Primero debes rellenar la contraseña.";
		}


		if(!$this -> variable_iniciada($clave2)){
			return "Las contraseñas no coinciden.";
		}

		if($clave1 !== $clave2){
			return "Las contraseñas deben coincidir.";
		}
		return "";
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
	public function obtener_clave(){
		return $this -> clave;
	}




	public function obtener_error_cedula(){
		return $this -> error_cedula;
	}
	public function obtener_error_nombre(){
		return $this -> error_nombre;
	}
	public function obtener_error_bio(){
		return $this -> error_bio;
	}
	public function obtener_error_email(){
		return $this -> error_email;
	}
	public function obtener_error_telefono(){
		return $this -> error_telefono;
	}
	public function obtener_error_clave1(){
		return $this -> error_clave1;
	}
	public function obtener_error_clave2(){
		return $this -> error_clave2;
	}
	

	
	public function mostrar_cedula(){
		if ($this -> cedula !== "") {
			echo 'value="'. $this -> cedula . '"';
		}
	}
	public function mostrar_error_cedula(){
		if ($this -> error_cedula !== "") {
			echo $this -> aviso_inicio . $this -> error_cedula . $this -> aviso_cierre;
		}
	}
	public function mostrar_nombre(){
		if ($this -> nombre !== "") {
			echo 'value="'. $this -> nombre . '"';
		}
	}
	public function mostrar_error_nombre(){
		if ($this -> error_nombre !== "") {
			echo $this -> aviso_inicio . $this -> error_nombre . $this -> aviso_cierre;
		}
	}
	public function mostrar_bio(){
		if ($this -> bio !== "") {
			echo 'value="'. $this -> bio . '"';
		}
	}
	public function mostrar_error_bio(){
		if ($this -> error_bio !== "") {
			echo $this -> aviso_inicio . $this -> error_bio . $this -> aviso_cierre;
		}
	}
	public function mostrar_telefono(){
		if ($this -> telefono !== "") {
			echo 'value="'. $this -> telefono . '"';
		}
	}
	public function mostrar_error_telefono(){
		if ($this -> error_telefono !== "") {
			echo $this -> aviso_inicio . $this -> error_telefono . $this -> aviso_cierre;
		}
	}
	public function mostrar_email(){
		if ($this -> email !== "") {
			echo 'value="'. $this -> email . '"';
		}
	}
	public function mostrar_error_email(){
		if ($this -> error_email !== "") {
			echo $this -> aviso_inicio . $this -> error_email . $this -> aviso_cierre;
		}
	}
	public function mostrar_error_clave1(){
		if ($this -> error_clave1 !== "") {
			echo $this -> aviso_inicio . $this -> error_clave1 . $this -> aviso_cierre;
		}
	}
	public function mostrar_error_clave2(){
		if ($this -> error_clave2 !== "") {
			echo $this -> aviso_inicio . $this -> error_clave2 . $this -> aviso_cierre;
		}
	}
	public function registro_valido(){
		if ($this -> error_cedula === "" &&
			$this -> error_nombre === "" &&
			$this -> error_bio === "" &&
			$this -> error_telefono === "" &&
			$this -> error_email === "" &&
			$this -> error_clave1 === "" &&
			$this -> error_clave2 === "") {
			return true;			
		}
		else{
			return false;
		}
	}
}
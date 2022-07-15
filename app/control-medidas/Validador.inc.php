<?php

abstract class Validador {

	protected $aviso_inicio;
	protected $aviso_cierre;

	protected $url;
	protected $imagen;
    protected $peso;
    protected $hombro;
    protected $pecho;
    protected $espalda;
    protected $brazo;
    protected $abdomen;
    protected $cintura;
    protected $cadera;
    protected $pantorrilla;
    protected $pierna_inf;
    protected $pierna_sup;


	protected $error_url;
	protected $error_imagen;
    protected $error_peso;
    protected $error_hombro;
    protected $error_pecho;
    protected $error_espalda;
    protected $error_brazo;
    protected $error_abdomen;
    protected $error_cintura;
    protected $error_cadera;
    protected $error_pantorrilla;
    protected $error_pierna_inf;
    protected $error_pierna_sup;


	function __construct(){
	}


	protected function variable_iniciada($variable){
		if (isset($variable) && !empty($variable)) {
			return true;
		}
		else{
			return false;
		}
	}


	protected function validar_url($conexion, $url){
		if (!$this -> variable_iniciada($url)) {
			$fechaActual = date("d-m-Y").time();
		    $nuevoNombre = $fechaActual ."$url";
		    rename("$url", "$nuevoNombre");		   	
			$this -> url = $url;		
		}else{
			$fechaActual = date("d-m-Y").time();
		    $nuevoNombre = $fechaActual ."$url";
		    rename("$url", "$nuevoNombre");		   	
			$this -> url = $url;
		}
	}

	protected function validar_imagen($conexion, $imagen){
		if (!$this -> variable_iniciada($imagen)) {
			return "Este espacio no puede estar vacio.";
		}
		else{
			$this -> imagen = $imagen;
		}
		if (RepositorioControlMedida :: imagen_existe($conexion, $imagen)) {
			$fechaActual = date("d-m-Y").time();
		    $nuevoNombre = $nombreEmpresa.$fechaActual ."$imagen";
		    rename("$imagen", "$nuevoNombre");
		   	$this -> imagen = $imagen;
		}
	}
	protected function validar_peso($conexion, $peso){
		if (!$this -> variable_iniciada($peso)) {
			return "Este espacio no puede estar vacio.";
		}
		else{
			if ($peso < 20) {
				return "Tu peso no puede ser menor que 25 kg.";
			}
			if ($peso > 150) {
				return "Tu peso no puede ser mayor que 150 kg.";
			}else{
			$this -> peso = $peso;
			}
		}
	}
	protected function validar_hombro($conexion, $hombro){
		if (!$this -> variable_iniciada($hombro)) {
			return "Este espacio no puede estar vacio.";
		}
		else{
			if ($hombro < 1) {
				return "La medida no puede ser menor que 5 cm.";
			}
			if ($hombro > 120) {
				return "La medida no puede ser mayor que 120 cm.";
			}else{
			$this -> hombro = $hombro;
			}
		}
	}
	protected function validar_pecho($conexion, $pecho){
		if (!$this -> variable_iniciada($pecho)) {
			return "Este espacio no puede estar vacio.";
		}
		else{
			if ($pecho < 1) {
				return "La medida no puede ser menor que 5 cm.";
			}
			if ($pecho > 120) {
				return "La medida no puede ser mayor que 120 cm.";
			}else{
			$this -> pecho = $pecho;
			}
		}
	}
	protected function validar_espalda($conexion, $espalda){
		if (!$this -> variable_iniciada($espalda)) {
			return "Este espacio no puede estar vacio.";
		}
		else{
			if ($espalda < 1) {
				return "La medida no puede ser menor que 5 cm.";
			}
			if ($espalda > 120) {
				return "La medida no puede ser mayor que 120 cm.";
			}else{
			$this -> espalda = $espalda;
			}
		}
	}
	protected function validar_brazo($conexion, $brazo){
		if (!$this -> variable_iniciada($brazo)) {
			return "Este espacio no puede estar vacio.";
		}
		else{
			if ($brazo < 1) {
				return "La medida no puede ser menor que 5 cm.";
			}
			if ($brazo > 70) {
				return "La medida no puede ser mayor que 60 cm.";
			}else{
			$this -> brazo = $brazo;
			}
		}
	}
	protected function validar_abdomen($conexion, $abdomen){
		if (!$this -> variable_iniciada($abdomen)) {
			return "Este espacio no puede estar vacio.";
		}
		else{
			if ($abdomen < 1) {
				return "La medida no puede ser menor que 5 cm.";
			}
			if ($abdomen > 120) {
				return "La medida no puede ser mayor que 120 cm.";
			}else{
			$this -> abdomen = $abdomen;
			}
		}
	}
	protected function validar_cintura($conexion, $cintura){
		if (!$this -> variable_iniciada($cintura)) {
			return "Este espacio no puede estar vacio.";
		}
		else{
			if ($cintura < 1) {
				return "La medida no puede ser menor que 5 cm.";
			}
			if ($cintura > 120) {
				return "La medida no puede ser mayor que 120 cm.";
			}else{
			$this -> cintura = $cintura;
			}
		}
	}
	protected function validar_cadera($conexion, $cadera){
		if (!$this -> variable_iniciada($cadera)) {
			return "Este espacio no puede estar vacio.";
		}
		else{
			if ($cadera < 1) {
				return "La medida no puede ser menor que 5 cm.";
			}
			if ($cadera > 120) {
				return "La medida no puede ser mayor que 120 cm.";
			}else{
			$this -> cadera = $cadera;
			}
		}
	}
	protected function validar_pantorrilla($conexion, $pantorrilla){
		if (!$this -> variable_iniciada($pantorrilla)) {
			return "Este espacio no puede estar vacio.";
		}
		else{
			if ($pantorrilla < 1) {
				return "La medida no puede ser menor que 5 cm.";
			}
			if ($pantorrilla > 70) {
				return "La medida no puede ser mayor que 60 cm.";
			}else{
			$this -> pantorrilla = $pantorrilla;
			}
		}
	}
	protected function validar_pierna_inf($conexion, $pierna_inf){
		if (!$this -> variable_iniciada($pierna_inf)) {
			return "Este espacio no puede estar vacio.";
		}
		else{
			if ($pierna_inf < 1) {
				return "La medida no puede ser menor que 5 cm.";
			}
			if ($pierna_inf > 100) {
				return "La medida no puede ser mayor que 100 cm.";
			}else{
			$this -> pierna_inf = $pierna_inf;
			}
		}
	}
	protected function validar_pierna_sup($conexion, $pierna_sup){
		if (!$this -> variable_iniciada($pierna_sup)) {
			return "Este espacio no puede estar vacio.";
		}
		else{
			if ($pierna_sup < 1) {
				return "La medida no puede ser menor que 5 cm.";
			}
			if ($pierna_sup > 120) {
				return "La medida no puede ser mayor que 120 cm.";
			}else{
			$this -> pierna_sup = $pierna_sup;
			}
		}
	}




	public function obtener_url(){
		return $this -> url;
	}
	public function obtener_imagen(){
		return $this -> imagen;
	}
	public function obtener_peso(){
		return $this -> peso;
	}
	public function obtener_hombro(){
		return $this -> hombro;
	}
	public function obtener_pecho(){
		return $this -> pecho;
	}
	public function obtener_espalda(){
		return $this -> espalda;
	}
	public function obtener_brazo(){
		return $this -> brazo;
	}
	public function obtener_abdomen(){
		return $this -> abdomen;
	}
	public function obtener_cintura(){
		return $this -> cintura;
	}
	public function obtener_cadera(){
		return $this -> cadera;
	}
	public function obtener_pantorrilla(){
		return $this -> pantorrilla;
	}
	public function obtener_pierna_inf(){
		return $this -> pierna_inf;
	}
	public function obtener_pierna_sup(){
		return $this -> pierna_sup;
	}




	public function mostrar_url(){
		if ($this -> url != "") {
			echo 'value = "' . $this -> url . '"';
		}
	}
	public function mostrar_imagen(){
		if ($this -> imagen != "") {
			echo 'value = "' . $this -> imagen . '"';
		}
	}
	public function mostrar_peso(){
		if ($this -> peso != "") {
			echo 'value = "' . $this -> peso . '"';
		}
	}
	public function mostrar_hombro(){
		if ($this -> hombro != "") {
			echo 'value = "' . $this -> hombro . '"';
		}
	}
	public function mostrar_pecho(){
		if ($this -> pecho != "") {
			echo 'value = "' . $this -> pecho . '"';
		}
	}
	public function mostrar_espalda(){
		if ($this -> espalda != "") {
			echo 'value = "' . $this -> espalda . '"';
		}
	}
	public function mostrar_brazo(){
		if ($this -> brazo != "") {
			echo 'value = "' . $this -> brazo . '"';
		}
	}
	public function mostrar_abdomen(){
		if ($this -> abdomen != "") {
			echo 'value = "' . $this -> abdomen . '"';
		}
	}
	public function mostrar_cintura(){
		if ($this -> cintura != "") {
			echo 'value = "' . $this -> cintura . '"';
		}
	}
	public function mostrar_cadera(){
		if ($this -> cadera != "") {
			echo 'value = "' . $this -> cadera . '"';
		}
	}
	public function mostrar_pantorrilla(){
		if ($this -> pantorrilla != "") {
			echo 'value = "' . $this -> pantorrilla . '"';
		}
	}
	public function mostrar_pierna_inf(){
		if ($this -> pierna_inf != "") {
			echo 'value = "' . $this -> pierna_inf . '"';
		}
	}
	public function mostrar_pierna_sup(){
		if ($this -> pierna_sup != "") {
			echo 'value = "' . $this -> pierna_sup . '"';
		}
	}




	

	public function mostrar_error_url(){
		if ($this -> error_url != "") {
			echo 'value = "' . $this -> error_url .'"';
		}
	}
	public function mostrar_error_imagen(){
		if ($this -> error_imagen != "") {
			echo $this -> aviso_inicio . $this -> error_imagen . $this -> aviso_cierre;
		}
	}
	public function mostrar_error_peso(){
		if ($this -> error_peso != "") {
			echo $this -> aviso_inicio . $this -> error_peso . $this -> aviso_cierre;
		}
	}
	public function mostrar_error_hombro(){
		if ($this -> error_hombro != "") {
			echo $this -> aviso_inicio . $this -> error_hombro . $this -> aviso_cierre;
		}
	}
	public function mostrar_error_pecho(){
		if ($this -> error_pecho != "") {
			echo $this -> aviso_inicio . $this -> error_pecho . $this -> aviso_cierre;
		}
	}
	public function mostrar_error_espalda(){
		if ($this -> error_espalda != "") {
			echo $this -> aviso_inicio . $this -> error_espalda . $this -> aviso_cierre;
		}
	}
	public function mostrar_error_brazo(){
		if ($this -> error_brazo != "") {
			echo $this -> aviso_inicio . $this -> error_brazo . $this -> aviso_cierre;
		}
	}
	public function mostrar_error_abdomen(){
		if ($this -> error_abdomen != "") {
			echo $this -> aviso_inicio . $this -> error_abdomen . $this -> aviso_cierre;
		}
	}
	public function mostrar_error_cintura(){
		if ($this -> error_cintura != "") {
			echo $this -> aviso_inicio . $this -> error_cintura . $this -> aviso_cierre;
		}
	}
	public function mostrar_error_cadera(){
		if ($this -> error_cadera != "") {
			echo $this -> aviso_inicio . $this -> error_cadera . $this -> aviso_cierre;
		}
	}
	public function mostrar_error_pantorrilla(){
		if ($this -> error_pantorrilla != "") {
			echo $this -> aviso_inicio . $this -> error_pantorrilla . $this -> aviso_cierre;
		}
	}
	public function mostrar_error_pierna_inf(){
		if ($this -> error_pierna_inf != "") {
			echo $this -> aviso_inicio . $this -> error_pierna_inf . $this -> aviso_cierre;
		}
	}
	public function mostrar_error_pierna_sup(){
		if ($this -> error_pierna_sup != "") {
			echo $this -> aviso_inicio . $this -> error_pierna_sup . $this -> aviso_cierre;
		}
	}





	public function control_medida_valido(){
		if ($this -> error_url == "" && $this -> error_imagen == "" && 
			$this -> error_peso == "" && $this -> error_hombro == "" && 
			$this -> error_pecho == "" && $this -> error_espalda == "" && 
			$this -> error_brazo == "" && $this -> error_abdomen == "" && 
			$this -> error_cintura == "" && $this -> error_cadera == "" && 
			$this -> error_pantorrila == "" && $this -> error_pierna_inf == "" && 
			$this -> error_pierna_sup == "") {
			return true;
		}
		else {
			return false;
		}
	}

}
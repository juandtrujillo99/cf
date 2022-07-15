<?php
include_once 'RepositorioControlMedida.inc.php';
include_once 'Validador.inc.php';

class ValidadorControlMedida extends Validador {
	
	public function __construct($url, $imagen, $peso, $hombro, $pecho, $espalda, $brazo, $abdomen, $cintura, $cadera, $pantorrilla, $pierna_inf, $pierna_sup, $conexion) {
		$this -> aviso_inicio = "<span class='new badge red'>";
		$this -> aviso_cierre = "</span>";
		
		$this -> url = "";
        $this -> imagen = "";
        $this -> peso = "";
        $this -> hombro = "";
        $this -> pecho = "";
        $this -> espalda = "";
        $this -> brazo = "";
        $this -> abdomen = "";
        $this -> cintura = "";
        $this -> cadera = "";
        $this -> pantorrilla = "";
        $this -> pierna_inf = "";
        $this -> pierna_sup = "";
		

		$this -> error_url = $this -> validar_url($conexion, $url);
		$this -> error_imagen = $this -> validar_imagen($conexion, $imagen);
		$this -> error_peso = $this -> validar_peso($conexion, $peso);
		$this -> error_hombro = $this -> validar_hombro($conexion, $hombro);
		$this -> error_pecho = $this -> validar_pecho($conexion, $pecho);
		$this -> error_espalda = $this -> validar_espalda($conexion, $espalda);
		$this -> error_brazo = $this -> validar_brazo($conexion, $brazo);
		$this -> error_abdomen = $this -> validar_abdomen($conexion, $abdomen);
		$this -> error_cintura = $this -> validar_cintura($conexion, $cintura);
		$this -> error_cadera = $this -> validar_cadera($conexion, $cadera);
		$this -> error_pantorrilla = $this -> validar_pantorrilla($conexion, $pantorrilla);
		$this -> error_pierna_inf = $this -> validar_pierna_inf($conexion, $pierna_inf);
		$this -> error_pierna_sup = $this -> validar_pierna_sup($conexion, $pierna_sup);
	}
}
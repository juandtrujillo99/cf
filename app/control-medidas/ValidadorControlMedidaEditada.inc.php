<?php
include_once 'RepositorioControlMedida.inc.php';
include_once 'Validador.inc.php';

class ValidadorControlMedidaEditada extends Validador {
	private $cambios_realizados;

	private $checkbox;


    private $url_original;
    private $imagen_original;
    private $peso_original;
    private $hombro_original;
    private $pecho_original;
    private $espalda_original;
    private $brazo_original;
    private $abdomen_original;
    private $cintura_original;
    private $cadera_original;
    private $pantorrilla_original;
    private $pierna_inf_original;
    private $pierna_sup_original;
	private $checkbox_original;


	public function __construct($url, $url_original, $imagen, $imagen_original, $peso, $peso_original, $hombro, $hombro_original, $pecho, $pecho_original, $espalda, $espalda_original, $brazo, $brazo_original,
						 $abdomen, $abdomen_original, $cintura, $cintura_original, $cadera, $cadera_original,
						 $pantorrilla, $pantorrilla_original, $pierna_inf, $pierna_inf_original, $pierna_sup, $pierna_sup_original, $checkbox, $checkbox_original, $conexion) {


		$this -> url = $this -> devolver_variable_si_iniciada($url);
		$this -> imagen = $this -> devolver_variable_si_iniciada($imagen);
		$this -> peso = $this -> devolver_variable_si_iniciada($peso);
		$this -> hombro = $this -> devolver_variable_si_iniciada($hombro);
		$this -> pecho = $this -> devolver_variable_si_iniciada($pecho);
		$this -> espalda = $this -> devolver_variable_si_iniciada($espalda);
		$this -> brazo = $this -> devolver_variable_si_iniciada($brazo);
		$this -> abdomen = $this -> devolver_variable_si_iniciada($abdomen);
		$this -> cintura = $this -> devolver_variable_si_iniciada($cintura);
		$this -> cadera = $this -> devolver_variable_si_iniciada($cadera);
		$this -> pantorrilla = $this -> devolver_variable_si_iniciada($pantorrilla);
		$this -> pierna_inf = $this -> devolver_variable_si_iniciada($pierna_inf);
		$this -> pierna_sub = $this -> devolver_variable_si_iniciada($pierna_sub);
		$this -> checkbox = $this -> devolver_variable_si_iniciada($checkbox);



		$this -> url_original = $this -> devolver_variable_si_iniciada($url_original);
		$this -> imagen_original = $this -> devolver_variable_si_iniciada($imagen_original);
		$this -> peso_original = $this -> devolver_variable_si_iniciada($peso_original);
		$this -> hombro_original = $this -> devolver_variable_si_iniciada($hombro_original);
		$this -> pecho_original = $this -> devolver_variable_si_iniciada($pecho_original);
		$this -> espalda_original = $this -> devolver_variable_si_iniciada($espalda_original);
		$this -> brazo_original = $this -> devolver_variable_si_iniciada($brazo_original);
		$this -> abdomen_original = $this -> devolver_variable_si_iniciada($abdomen_original);
		$this -> cintura_original = $this -> devolver_variable_si_iniciada($cintura_original);
		$this -> cadera_original = $this -> devolver_variable_si_iniciada($cadera_original);
		$this -> pantorrilla_original = $this -> devolver_variable_si_iniciada($pantorrilla_original);
		$this -> pierna_inf_original = $this -> devolver_variable_si_iniciada($pierna_inf_original);
		$this -> pierna_sub_original = $this -> devolver_variable_si_iniciada($pierna_sub_original);
		$this -> checkbox_original = $this -> devolver_variable_si_iniciada($checkbox_original);



		if ($this -> url == $this -> url_original &&
			$this -> imagen == $this -> imagen_original &&
			$this -> peso == "" && $this -> peso_original == "" &&
			$this -> hombro == "" && $this -> hombro_original == "" && 
			$this -> pecho == "" &&  $this -> pecho_original == "" && 
			$this -> espalda == "" && $this -> espalda_original == "" && 
			$this -> brazo == "" && $this -> brazo_original == "" && 
			$this -> abdomen == "" && $this -> abdomen_original == "" && 
			$this -> cintura == "" && $this -> cintura_original == "" && 
			$this -> cadera == "" && $this -> cadera_original == "" && 
			$this -> pantorrila == "" && $this -> pantorrilla_original == "" && 
			$this -> pierna_inf == "" && $this -> pierna_inf_original == "" && 
			$this -> pierna_sup == "" && $this -> pierna_sup_original == "" && 
			$this -> checkbox == $this -> checkbox_original) {
			$this -> cambios_realizados = false;
		} else {
			$this -> cambios_realizados = true;
		}






		if ($this -> cambios_realizados) {
			echo '<span id="notificacion" class="red badge">Se han detectado errores</span>';

			$this -> aviso_inicio = "<span class='new badge red'>";
			$this -> aviso_cierre = "</span>";


			if ($this -> url !== $this -> url_original) {
				$this -> error_url = $this -> validar_url($conexion, $this -> url);
				} else {
					$this -> error_url = "";
			}
			if ($this -> imagen !== $this -> imagen_original) {
				$this -> error_imagen = $this -> validar_imagen($conexion, $this -> imagen);
				} else {
					$this -> error_imagen = "";
			}
			if ($this -> peso !== $this -> peso_original) {
				$this -> error_peso = $this -> validar_peso($conexion, $this -> peso);
				} else {
					$this -> error_peso = "";
			}
			if ($this -> hombro !== $this -> hombro_original) {
				$this -> error_hombro = $this -> validar_hombro($conexion, $this -> hombro);
				} else {
					$this -> error_hombro = "";
			}
			if ($this -> pecho !== $this -> pecho_original) {
				$this -> error_pecho = $this -> validar_pecho($conexion, $this -> pecho);
				} else {
					$this -> error_pecho = "";
			}
			if ($this -> espalda !== $this -> espalda_original) {
				$this -> error_espalda = $this -> validar_espalda($conexion, $this -> espalda);
				} else {
					$this -> error_espalda = "";
			}
			if ($this -> brazo !== $this -> brazo_original) {
				$this -> error_brazo = $this -> validar_brazo($conexion, $this -> brazo);
				} else {
					$this -> error_brazo = "";
			}
			if ($this -> abdomen !== $this -> abdomen_original) {
				$this -> error_abdomen = $this -> validar_abdomen($conexion, $this -> abdomen);
				} else {
					$this -> error_abdomen = "";
			}
			if ($this -> cintura !== $this -> cintura_original) {
				$this -> error_cintura = $this -> validar_cintura($conexion, $this -> cintura);
				} else {
					$this -> error_cintura = "";
			}
			if ($this -> cadera !== $this -> cadera_original) {
				$this -> error_cadera = $this -> validar_cadera($conexion, $this -> cadera);
				} else {
					$this -> error_cadera = "";
			}
			if ($this -> pantorrilla !== $this -> pantorrilla_original) {
				$this -> error_pantorrilla = $this -> validar_pantorrilla($conexion, $this -> pantorrilla);
				} else {
					$this -> error_pantorrilla = "";
			}
			if ($this -> pierna_inf !== $this -> pierna_inf_original) {
				$this -> error_pierna_inf = $this -> validar_pierna_inf($conexion, $this -> pierna_inf);
				} else {
					$this -> error_pierna_inf = "";
			}
			if ($this -> pierna_sup !== $this -> pierna_sup_original) {
				$this -> error_pierna_sup = $this -> validar_pierna_sup($conexion, $this -> pierna_sup);
				} else {
					$this -> error_pierna_sup = "";
			}

		} else {
			echo 'No hay cambios';
			//redirigir
		}
	}






	private function devolver_variable_si_iniciada($variable) {
		if ($this -> variable_iniciada($variable)) {
			return $variable;
		} else {
			return "";
		}
	}





	public function hay_cambios() {
		return $this -> cambios_realizados;
	}
	public function obtener_url_original() {
		return $this -> url_original;
	}
	public function obtener_imagen_original() {
		return $this -> imagen_original;
	}
	public function obtener_peso_original() {
		return $this -> peso_original;
	}
	public function obtener_hombro_original() {
		return $this -> hombro_original;
	}
	public function obtener_pecho_original() {
		return $this -> pecho_original;
	}
	public function obtener_espalda_original() {
		return $this -> espalda_original;
	}
	public function obtener_brazo_original() {
		return $this -> brazo_original;
	}
	public function obtener_abdomen_original() {
		return $this -> abdomen_original;
	}
	public function obtener_cintura_original() {
		return $this -> cintura_original;
	}
	public function obtener_cadera_original() {
		return $this -> cadera_original;
	}
	public function obtener_pantorrilla_original() {
		return $this -> pantorrilla_original;
	}
	public function obtener_pierna_inf_original() {
		return $this -> pierna_inf_original;
	}
	public function obtener_pierna_sup_original() {
		return $this -> pierna_sup_original;
	}
	public function obtener_checkbox_original() {
		return $this -> checkbox_original;
	}
	public function obtener_checkbox() {
		return $this -> checkbox;
	}
}
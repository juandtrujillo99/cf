<?php
include_once 'RepositorioRutina.inc.php';
include_once 'Validador.inc.php';

class ValidadorRutinaEditada extends Validador {
	private $cambios_realizados;

	private $checkbox;

	private $titulo_original;
	private $url_original;
	private $intensidad_original;
	private $video_original;
	private $imagen_original;
	private $texto_original;
	private $checkbox_original;

	public function __construct($url, $url_original, $intensidad, $intensidad_original, $video, $video_original, $imagen, $imagen_original, $titulo, $titulo_original, $texto,
		$texto_original, $checkbox, $checkbox_original, $conexion) {

		$this -> titulo = $this -> devolver_variable_si_iniciada($titulo);
		$this -> intensidad = $this -> devolver_variable_si_iniciada($intensidad);
		$this -> video = $this -> devolver_variable_si_iniciada($video);
		$this -> imagen = $this -> devolver_variable_si_iniciada($imagen);
		$this -> url = $this -> devolver_variable_si_iniciada($url);
		$this -> texto = $this -> devolver_variable_si_iniciada($texto);
		$this -> checkbox = $this -> devolver_variable_si_iniciada($checkbox);

		$this -> titulo_original = $this -> devolver_variable_si_iniciada($titulo_original);
		$this -> intensidad_original = $this -> devolver_variable_si_iniciada($intensidad_original);
		$this -> video_original = $this -> devolver_variable_si_iniciada($video_original);
		$this -> imagen_original = $this -> devolver_variable_si_iniciada($imagen_original);
		$this -> url_original = $this -> devolver_variable_si_iniciada($url_original);
		$this -> texto_original = $this -> devolver_variable_si_iniciada($texto_original);
		$this -> checkbox_original = $this -> devolver_variable_si_iniciada($checkbox_original);

		if ($this -> titulo == $this -> titulo_original &&
			$this -> intensidad == $this -> intensidad_original &&
			$this -> video == $this -> video_original &&
			$this -> imagen == $this -> imagen_original &&
			$this -> url == $this -> url_original &&
			$this -> texto == $this -> texto_original &&
			$this -> checkbox == $this -> checkbox_original) {

			$this -> cambios_realizados = false;
		} else {
			$this -> cambios_realizados = true;
		}

		if ($this -> cambios_realizados) {
			?>
			<p class="desaparecer-automaticamente h-5 text-white textoBold new red fixed-top text-center">
				Realizaste cambios pero parece que hay un error.
			</p>
			<?php

			$this -> aviso_inicio = "<br><div class='alert alert-danger' role='alert'>";
			$this -> aviso_cierre = "</div>";

			if ($this -> titulo !== $this -> titulo_original) {
				$this -> error_titulo = $this -> validar_titulo($conexion, $this -> titulo);
			} else {
				$this -> error_titulo = "";
			}

			if ($this -> intensidad !== $this -> intensidad_original) {
				$this -> error_intensidad = $this -> validar_intensidad($conexion, $this -> intensidad);
			} else {
				$this -> error_intensidad = "";
			}

			if ($this -> video !== $this -> video_original) {
				$this -> error_video = $this -> validar_video($conexion, $this -> video);
			} else {
				$this -> error_video = "";
			}

			if ($this -> imagen !== $this -> imagen_original) {
				$this -> error_imagen = $this -> validar_imagen($conexion, $this -> imagen);
			} else {
				$this -> error_imagen = "";
			}

			if ($this -> url !== $this -> url_original) {
				$this -> error_url = $this -> validar_url($conexion, $this -> url);
			} else {
				$this -> error_url = "";
			}

			if ($this -> texto !== $this -> texto_original) {
				$this -> error_texto = $this -> validar_texto($conexion, $this -> texto);
			} else {
				$this -> error_texto = "";
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

	public function obtener_titulo_original() {
		return $this -> titulo_original;
	}

	public function obtener_intensidad_original() {
		return $this -> intensidad_original;
	}

	public function obtener_video_original() {
		return $this -> video_original;
	}

	public function obtener_imagen_original() {
		return $this -> imagen_original;
	}

	public function obtener_url_original() {
		return $this -> url_original;
	}

	public function obtener_texto_original() {
		return $this -> texto_original;
	}

	public function obtener_checkbox_original() {
		return $this -> checkbox_original;
	}

	public function obtener_checkbox() {
		return $this -> checkbox;
	}
}
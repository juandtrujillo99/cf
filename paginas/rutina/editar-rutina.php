<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/rutina/Rutina.inc.php';
include_once 'app/rutina/RepositorioRutina.inc.php';
include_once 'app/rutina/ValidadorRutinaEditada.inc.php';
include_once 'app/empleado/ControlSesion.inc.php';
include_once 'app/Redireccion.inc.php';

Conexion :: abrir_conexion();

if(!ControlSesionEmpleado :: sesion_iniciada()) {
	Redireccion :: redirigir(SERVIDOR);
} 
else{
	Conexion :: abrir_conexion();
	$id = $_SESSION['id_empleado'];
	$empleado = RepositorioEmpleado :: obtener_empleado_por_id(Conexion::obtener_conexion(), $id);
}

if (isset($_POST['guardar_cambios_rutina'])) {
	$rutina_publica_nueva = 0;
	if (isset($_POST['publicar']) && $_POST['publicar'] == "si") {
		$rutina_publica_nueva = 1;
	}

	$validador = new ValidadorRutinaEditada(
		$_POST['url'], $_POST['url-original'],
		$_POST['video'], $_POST['video-original'], 
		$_POST['imagen'], $_POST['imagen-original'],
		$_POST['intensidad'], $_POST['intensidad-original'],  
		$_POST['titulo'], $_POST['titulo-original'],
		$_POST['texto'], $_POST['texto-original'],
		$rutina_publica_nueva, $_POST['publicar-original'], Conexion :: obtener_conexion());

	if (!$validador -> hay_cambios()) {
		Redireccion :: redirigir(RUTA_GESTOR_RUTINAS);
	} else {
		if ($validador -> rutina_valida()) {
			$cambio_efectuado = RepositorioRutina :: actualizar_rutina(Conexion :: obtener_conexion(),
				$_POST['id-rutina'], 
				$validador -> obtener_url(), 
				$validador -> obtener_video(),
				$validador -> obtener_imagen(),
				$validador -> obtener_intensidad(), 
				$validador -> obtener_titulo(), 
				$validador -> obtener_texto(), 
				$validador -> obtener_checkbox());

			if ($cambio_efectuado) {
				//echo 'RUTINA VÁLIDA Y GUARDADA';
				Redireccion :: redirigir(RUTA_GESTOR_RUTINAS);
			}
		}
	}
}

$titulo = "Editar rutina";

include_once 'seccion/cabecera-inicio.inc.php';

//script que sube las imagenes de las entradas
include_once 'scripts/rutina/barra-progreso.php';

include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
?>

<div class="container">
    <div class="jumbotron">
        <h1 class="text-center">Editar rutina</h1>
    </div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form class="form-nueva-rutina" method="post" action="<?php echo RUTA_EDITAR_RUTINA ?>">
			<?php
				if (isset($_POST['editar_rutina'])) {
					$id_rutina = $_POST['id_editar'];

					$rutina_recuperada = RepositorioRutina :: obtener_rutina_por_id(
						Conexion::obtener_conexion(), $id_rutina);

					include_once 'seccion/rutina/form_rutina_recuperada.inc.php';

					Conexion::cerrar_conexion();
				} else if (isset($_POST['guardar_cambios_rutina'])) {
					$id_rutina = $_POST['id-rutina'];
					$rutina_recuperada = RepositorioRutina :: obtener_rutina_por_id(
						Conexion::obtener_conexion(), $id_rutina);		

					include_once 'seccion/rutina/form_rutina_recuperada_validada.inc.php';
				}
			?>
			</form>	
		</div>
	</div>
</div>
<script type="text/javascript">
	function validar1() {
		var imagen = document.getElementById("imagen");
		var titulo = document.getElementById("titulo");
		var texto = document.getElementById("texto");
		var video = document.getElementById("video");
		var url = document.getElementById("url");
		var intensidad = document.getElementById("intensidad");

		if((imagen.value=="")||(imagen.value.length == 0)||
			(titulo.value=="")||(titulo.value.length == 0)||
	    	(texto.value=="")||(texto.value.length == 0)||
	    	(imagen.value=="")||(imagen.value.length == 0)||
	    	(url.value=="")||(url.value.length == 0)||
	    	(intensidad.value=="")||(intensidad.value.length == 0)
	    	){
	    	document.getElementById('boton-siguiente').disabled = true; 
	    }
	    else { 
	        document.getElementById('boton-siguiente').disabled = false;
	    }
	}
</script>
<?php
include_once 'seccion/doc-terminacion.inc.php';
?>
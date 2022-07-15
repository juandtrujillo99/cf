<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/rutina/Rutina.inc.php';
include_once 'app/rutina/RepositorioRutina.inc.php';
include_once 'app/rutina/ValidadorRutina.inc.php';
include_once 'app/empleado/ControlSesion.inc.php';
include_once 'app/Redireccion.inc.php';


if(!ControlSesionEmpleado :: sesion_iniciada()) {
	Redireccion :: redirigir(SERVIDOR);
} 
else{
	Conexion :: abrir_conexion();
	$id = $_SESSION['id_empleado'];
	$empleado = RepositorioEmpleado :: obtener_empleado_por_id(Conexion::obtener_conexion(), $id);
}

$rutina_publica = 0;
if (isset($_POST['enviar'])) {
	Conexion :: abrir_conexion();

	$caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numero_caracteres = strlen($caracteres);
    $string_aleatorio = '';
    
    for ($i = 0; $i < 6; $i++) {
        $string_aleatorio .= $caracteres[rand(0, $numero_caracteres - 1)];
    }

	$url = $string_aleatorio;

	$_POST['url'] = $url;
	
	$validador = new ValidadorRutina($_POST['url'],
		$_POST['video'],
		$_POST['imagen'],
		$_POST['intensidad'],  
		$_POST['titulo'], 
		$_POST['texto'], 
		Conexion :: obtener_conexion());

	var_dump($validador -> obtener_texto());
	
	if (isset($_POST['publicar']) && $_POST['publicar'] == 'si') {
		$rutina_publica = 1;
	}
	
	if ($validador -> rutina_valida()) {
		if (ControlSesionEmpleado :: sesion_iniciada()) {
			
			$rutina = new Rutina('', $_SESSION['id_empleado'],
				$validador -> obtener_url(), 
				$validador -> obtener_intensidad(), 
				$validador -> obtener_video(), 
				$validador -> obtener_imagen(),
				$validador -> obtener_titulo(),
				$validador -> obtener_texto(), '', $rutina_publica);
				
			$rutina_insertada = RepositorioRutina :: insertar_rutina(Conexion :: obtener_conexion(), $rutina);
			if ($rutina_insertada) {
				Redireccion::redirigir(RUTA_GESTOR_RUTINAS);
			}
		} else {
			Redireccion :: redirigir(RUTA_LOGIN);
		}
		
		Conexion :: cerrar_conexion();
	}
}

$titulo = "Nueva rutina";

include_once 'seccion/cabecera-inicio.inc.php';

//script que sube las imagenes de las entradas
include_once 'scripts/rutina/barra-progreso.php';
?>
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>nueva-entrada.css">
<?php
include_once 'seccion/cabecera-cierre.inc.php';
?>

<div class="root">
    <form role="form" method="post" action="<?php echo RUTA_NUEVA_RUTINA; ?>" class="form-register">

		<div class="form-register__header">
	        <ul class="progressbar d-none">
	            <li class="progressbar__option active">paso 1</li>
	            <li class="progressbar__option">paso 2</li>
	            <li class="progressbar__option">paso 3</li>
	        </ul>
	        <h1 class="form-register__title textoBlack">NUEVA RUTINA</h1>
	    </div>                     
		<?php
		if (isset($_POST['enviar'])) {
			include_once 'seccion/rutina/nueva-entrada/form_validado.inc.php';
		}
		else{
			include_once 'seccion/rutina/nueva-entrada/form_vacio.inc.php';
		}
		include_once 'seccion/rutina/nueva-entrada/finalizar_form.inc.php';
		?>
	</form>
</div>
<script src="<?php echo RUTA_JS?>nueva-entrada.js"></script>
<?php
include_once 'seccion/doc-terminacion.inc.php';
?>
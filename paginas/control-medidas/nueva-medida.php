<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/control-medidas/ControlMedida.inc.php';
include_once 'app/control-medidas/RepositorioControlMedida.inc.php';
include_once 'app/control-medidas/ValidadorControlMedida.inc.php';
include_once 'app/usuario/ControlSesion.inc.php';
include_once 'app/Redireccion.inc.php';

if (!ControlSesion :: sesion_iniciada()) {
    Redireccion :: redirigir(RUTA_LOGIN);
}
else{
    Conexion :: abrir_conexion();
    $id = $_SESSION['id_usuario'];
    $usuario = RepositorioUsuario :: obtener_usuario_por_id(Conexion::obtener_conexion(), $id);
}


$control_medida_publico = 0;
if (isset($_POST['guardar'])) {
	Conexion :: abrir_conexion();

	$caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numero_caracteres = strlen($caracteres);
    $string_aleatorio = '';
    
    for ($i = 0; $i < 10; $i++) {
        $string_aleatorio .= $caracteres[rand(0, $numero_caracteres - 1)];
    }

	$url = $string_aleatorio;

	$_POST['url'] = $url;
	
	$validador = new ValidadorControlMedida($_POST['url'], $_POST['imagen'], 
		$_POST['peso'], $_POST['hombro'], 
		$_POST['pecho'], $_POST['espalda'], 
		$_POST['brazo'], $_POST['abdomen'], 
		$_POST['cintura'], $_POST['cadera'],
		$_POST['pantorrilla'], $_POST['pierna_inf'], $_POST['pierna_sup'],   
		Conexion :: obtener_conexion());

	
	if (isset($_POST['publicar']) && $_POST['publicar'] == 'si') {
		$control_medida_publico = 1;
	}
	
	if ($validador ->  control_medida_valido()) {
		if (ControlSesion :: sesion_iniciada()) {
			
			$control = new ControlMedida('', $_SESSION['id_usuario'], $validador -> obtener_url(), $validador -> obtener_imagen(), 
				$validador -> obtener_peso(), $validador -> obtener_hombro(), 
				$validador -> obtener_pecho(), $validador -> obtener_espalda(), 
				$validador -> obtener_brazo(), $validador -> obtener_abdomen(), 
				$validador -> obtener_cintura(), $validador -> obtener_cadera(),
				$validador -> obtener_pantorrilla(), 
				$validador -> obtener_pierna_inf(), $validador -> obtener_pierna_sup(), '', $control_medida_publico);
				
			$control_medida_insertado = RepositorioControlMedida :: insertar_control_medida(Conexion :: obtener_conexion(), $control);
			if ($control_medida_insertado) {
				Redireccion::redirigir(RUTA_GESTOR_MEDIDAS);
			}
		} else {
			Redireccion :: redirigir(RUTA_LOGIN);
		}
		Conexion :: cerrar_conexion();
	}
}

?>
<script type="text/javascript" src="<?php echo RUTA_JS; ?>desaparecer-automaticamente.js"></script>
<?php

$titulo = "Nuevo control de medidas | $nombreEmpresa";
include_once 'seccion/cabecera-inicio.inc.php';

//script que sube las imagenes de las entradas
include_once 'scripts/barra-progreso.php';

include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-3 d-none d-sm-block"></div>
		<div class="col-md-9 col-xs-12 row">			
		    <div class="col-12" align="center">
		    	<br><br>
		    	<h1 class="textoBlack" align="center">Creando control de medidas</h1>
				<br><br>
			</div>
			<div class="col-1"><br><br></div>
			<div class="col-10">
				<form method="post" action="<?php echo RUTA_NUEVA_MEDIDA; ?>">
					<?php
						if (isset($_POST['guardar'])) {
							include_once 'seccion/control-medidas/form_nueva_medida_validado.inc.php';
						} else {						
							include_once 'seccion/control-medidas/form_nueva_medida_vacio.inc.php';
						}
					?>
					<br><br>
					<a href="<?php echo RUTA_GESTOR_MEDIDAS; ?>" class="btn btn-secundario">&larr; Volver al gestor</a>
					<button type="submit" class="btn btn-principal" name="guardar">Guardar</button>
					<br><br><br>
				</form>	
				<br><br>
			</div>			
		</div>
	</div>
</div>
<?php
include_once 'seccion/doc-terminacion.inc.php';
?>

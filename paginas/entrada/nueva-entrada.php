<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/entrada/Entrada.inc.php';
include_once 'app/entrada/RepositorioEntrada.inc.php';
include_once 'app/entrada/ValidadorEntrada.inc.php';
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

$entrada_publica = 0;
if (isset($_POST['guardar'])) {
	Conexion :: abrir_conexion();
	
	$validador = new ValidadorEntrada($_POST['titulo'], $_POST['url'], htmlspecialchars($_POST['texto']), Conexion :: obtener_conexion());

	var_dump($validador -> obtener_texto());
	
	if (isset($_POST['publicar']) && $_POST['publicar'] == 'si') {
		$entrada_publica = 1;
	}
	
	if ($validador -> entrada_valida()) {
		if (ControlSesionEmpleado :: sesion_iniciada()) {
			
			$entrada = new Entrada('', $_SESSION['id_empleado'], $validador -> obtener_url(), $validador -> obtener_titulo(),
				$validador -> obtener_texto(), '', $entrada_publica);
				
			$entrada_insertada = RepositorioEntrada :: insertar_entrada(Conexion :: obtener_conexion(), $entrada);
			if ($entrada_insertada) {
				Redireccion::redirigir(RUTA_GESTOR_ENTRADAS);
			}
		} else {
			Redireccion :: redirigir(RUTA_LOGIN);
		}
		
		Conexion :: cerrar_conexion();
	}
}

$titulo = "Nueva entrada";

include_once 'seccion/cabecera-inicio.inc.php';
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
?>

<div class="col-md-12">
    <div class="container">
        <h1 class="text-center">Nueva entrada</h1>
    </div>
</div>

<div class="col-md-12">
	<div class="container">
		<div class="col-md-12">
			<form class="form-nueva-entrada" method="post" action="<?php echo RUTA_NUEVA_ENTRADA ?>">
				<?php
					if (isset($_POST['guardar'])) {
						include_once 'seccion/entrada/form_nueva_entrada_validado.inc.php';
					} else {						
						include_once 'seccion/entrada/form_nueva_entrada_vacio.inc.php';
					}
				?>
			</form>
		</div>
	</div>
</div>

<?php
include_once 'seccion/doc-terminacion.inc.php';
?>

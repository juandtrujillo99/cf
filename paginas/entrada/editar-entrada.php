<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/entrada/Entrada.inc.php';
include_once 'app/entrada/RepositorioEntrada.inc.php';
include_once 'app/entrada/ValidadorEntradaEditada.inc.php';
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

if (isset($_POST['guardar_cambios_entrada'])) {
	$entrada_publica_nueva = 0;
	if (isset($_POST['publicar']) && $_POST['publicar'] == "si") {
		$entrada_publica_nueva = 1;
	}

	$validador = new ValidadorEntradaEditada($_POST['titulo'], $_POST['titulo-original'], $_POST['url'], $_POST['url-original'], htmlspecialchars($_POST['texto']), $_POST['texto-original'], $entrada_publica_nueva, $_POST['publicar-original'], Conexion :: obtener_conexion());

	if (!$validador -> hay_cambios()) {
		Redireccion :: redirigir(RUTA_GESTOR_ENTRADAS);
	} else {
		if ($validador -> entrada_valida()) {
			$cambio_efectuado = RepositorioEntrada :: actualizar_entrada(Conexion :: obtener_conexion(),
				$_POST['id-entrada'], $validador -> obtener_titulo(), $validador -> obtener_url(),
				$validador -> obtener_texto(), $validador -> obtener_checkbox());

			if ($cambio_efectuado) {
				//echo 'ENTRADA VÁLIDA Y GUARDADA';
				Redireccion :: redirigir(RUTA_GESTOR_ENTRADAS);
			}
		}
	}
}

$titulo = "Editar entrada";

include_once 'seccion/cabecera-inicio.inc.php';
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
?>

<div class="container">
    <div class="jumbotron">
        <h1 class="text-center">Editar entrada</h1>
    </div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form class="form-nueva-entrada" method="post" action="<?php echo RUTA_EDITAR_ENTRADA ?>">
			<?php
				if (isset($_POST['editar_entrada'])) {
					$id_entrada = $_POST['id_editar'];

					$entrada_recuperada = RepositorioEntrada :: obtener_entrada_por_id(
						Conexion::obtener_conexion(), $id_entrada);

					include_once 'seccion/entrada/form_entrada_recuperada.inc.php';

					Conexion::cerrar_conexion();
				} else if (isset($_POST['guardar_cambios_entrada'])) {
					$id_entrada = $_POST['id-entrada'];
					$entrada_recuperada = RepositorioEntrada :: obtener_entrada_por_id(
						Conexion::obtener_conexion(), $id_entrada);		

					include_once 'seccion/entrada/form_entrada_recuperada_validada.inc.php';
				}
			?>
			</form>	
		</div>
	</div>
</div>

<?php
include_once 'seccion/doc-terminacion.inc.php';
?>
<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/Redireccion.inc.php';
include_once 'app/empleado/RepositorioEmpleado.inc.php';

$titulo = "Registro satisfactorio";

include_once 'seccion/cabecera-inicio.inc.php';
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
?>

<div class="container" align="center" id="registro">
	<div class="col-12">
		<br><br>
		<h1>Registro correcto</h1>
		<br>
		<div id="enlaces">
			<a class="btn btn-principal" href="<?php echo RUTA_REGISTRO_EMPLEADO; ?>"> > Registrar a otro empleado < </a>
		</div>
	</div>
</div>

<?php
include_once 'seccion/doc-terminacion.inc.php';
?>
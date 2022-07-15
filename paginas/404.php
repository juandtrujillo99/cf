<?php
header($_SERVER['SERVER_PROTOCOL'] . "404 Not Found", true, 404);

include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';

include_once 'app/usuario/Usuario.inc.php';

include_once 'app/usuario/RepositorioUsuario.inc.php';

$titulo = "Página no encontrada";

include_once 'seccion/cabecera-inicio.inc.php';
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
?>

<div class="container" align="center">
	<div class="col-xs-12" id="pagina-no-encontrada">
		<h1>
			<i style="font-size: 4em;color: black;" class="fas fa-toolbox"></i>
			<br><br>
			Esta página no está disponible
		</h1>
		<h2>
			Es posible que el enlace que seleccionaste esté dañado o que se haya eliminado la página.<br><br>
		</h2>
		<div class="col-xs-12" align="center">
		</div>
		


	</div>
</div>



<?php
include_once 'seccion/doc-terminacion.inc.php';

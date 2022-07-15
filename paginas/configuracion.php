<?php

include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
/*include_once 'app/entrada/EscritorEntradas.inc.php';*/

$titulo = 'Configuración '.$nombreEmpresa ;

include_once 'seccion/cabecera-inicio.inc.php';
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
?>

<?php //body ?>
<div class="container-fluid" align="center">
	<div class="row">
		<div class="col-4"></div>
		<div class="col-4">cambia la configuracion a tu gusto</div>
	</div>
</div>

<?php //body ?>

<?php
include_once 'seccion/doc-terminacion.inc.php';
?>
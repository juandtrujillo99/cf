<?php

$titulo = 'Recupera tu contraseña '.$nombreEmpresa;

include_once 'seccion/cabecera-inicio.inc.php';
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
?>

<div class="container-fluid">
<?php 
	include_once 'seccion/recuperar-clave-empleado/pc.inc.php';
	include_once 'seccion/recuperar-clave-empleado/movil.inc.php';
?> 
<br><br>
</div>

<?php
include_once 'seccion/doc-terminacion.inc.php';
?>
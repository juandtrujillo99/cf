<?php

include_once 'app/config.inc.php';

include_once 'app/Conexion.inc.php';

include_once 'app/usuario/RepositorioUsuario.inc.php';



		Conexion :: abrir_conexion();



/*include_once 'app/entrada/EscritorEntradas.inc.php';*/



$titulo = $nombreEmpresa;



include_once 'seccion/cabecera-inicio.inc.php';

?>

<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>cargando.css">

<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>aparecer.css">

<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>sobreponer.css">

<?php

include_once 'seccion/cabecera-cierre.inc.php';

include_once 'seccion/cargando.inc.php';

include_once 'seccion/doc-navbar.inc.php';

?>



<?php //body ?>

<div class="container-fluid">

	<div class="row">
		<?php

		include_once 'seccion/inicio/portada.inc.php';

		include_once 'seccion/inicio/instalaciones.inc.php';

		include_once 'seccion/inicio/protocolos.inc.php';

		include_once 'seccion/inicio/informacion.inc.php';

		?>		

	</div>

</div>

<?php //body ?>



<?php

include_once 'seccion/doc-terminacion.inc.php';

?>
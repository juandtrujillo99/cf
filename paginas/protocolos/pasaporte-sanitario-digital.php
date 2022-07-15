<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';

$titulo = "Protocolos de bioseguridad";

include_once 'seccion/cabecera-inicio.inc.php';
?>
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>sobreponer.css">
<?php
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
?>

<?php //body ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-12 col-md-3">
			<img align="center" loading="lazy" src="<?php echo RUTA_IMG;?>fondos/cfprotocolos.png" class="imagen">
		</div>		
		<div class="col-1"></div>		
		<div class="col-10 col-md-7 row">
			<div class="col-12">
				<br><br>
				<h1 class="textoBlack">Descarga tu Pasaporte</h1>
				<p>(Te recomendamos que rellenes el formulario en tu computador).</p>
				<br><br>
				<h5>
					Hola Champion, aquí podrás diligenciar el formulario para acceder al Pasaporte Sanitario Digital.
					Recuerda diligenciar la información personal y realizar honestamente la evaluación del estado de salud. Se generará el Pasaporte Sanitario Digital en formato PDF, el cual contiene la información que registraste, la vigencia del pasaporte y un código QR que podrá ser verificado por las autoridades de salud, deporte, movilidad o de seguridad.
				</h5>
			</div>
		</div>
	</div>
	<div class="row">
		<iframe src="https://aplicaciones.cali.gov.co/apicovid/scripts/deporte_independiente.php" style="width: 100%; border:0; height: 200vh"></iframe>
	</div>
</div>
<?php
include_once 'seccion/redes-sociales.inc.php';
 //body ?>
<br><br><br>
<?php
include_once 'seccion/doc-terminacion.inc.php';
?>
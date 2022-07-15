<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/usuario/RepositorioUsuario.inc.php';

		Conexion :: abrir_conexion();

/*include_once 'app/entrada/EscritorEntradas.inc.php';*/

$titulo = "Términos y condiciones";

include_once 'seccion/cabecera-inicio.inc.php';
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
?>

<?php //body ?>
<div class="container-fluid">
    <div class="imagen-background d-none d-sm-block">
        <img loading="lazy" src="<?php echo RUTA_IMG;?>fondos/terminos-condiciones.jpg" class="imagen">
    </div>
	<div class="row">
		<div class="col-12 d-block d-sm-none">
			<img loading="lazy" src="<?php echo RUTA_IMG;?>fondos/terminos-condiciones-m.jpg" class="imagen">
		</div>
		<div class="col-1"></div>
		<div class="col-10 col-md-5">
			<br><br>
			<h1 align="center" class="textoBlack">Términos y condiciones</h1>
			<br><br>
			<p>
				● El uso de la toalla, tapaboca y alcohol
				personal es <b class="textoBold">OBLIGATORIO</b>.
				<br><br>
				● Antes y después del uso de cada máquina,
				aplicar el antibacterial.
				<br><br>
				● Dejar discos y mancuernas en su respectivo
				lugar.
				<br><br>
				● Por el mal uso de las máquinas, tener un
				comportamiento y vocabulario inadecuado,
				el instructor está en la obligación de parar su
				entreno.
				<br><br>
				● Por su seguridad y buen entrenamiento
				<b class="textoBold">ABSTENERSE</b> del uso del celular durante el
				uso de las máquinas.
				<br><br>
				● Champions Fit con su personal a cargo NO
				se hace responsable por lesiones o
				accidentes causados por el mal uso de las
				máquinas o el abuso de ejercicio.
				<br><br>
				● Informar al entrenador si tiene
				<b class="textoBold">RESTRICCIONES MÉDICAS</b>.
			</p>
		</div>
		<div class="col-1"></div>
		<div class="col-1 d-block d-sm-none"></div>
		<div class="col-10 col-md-4">
			<br><br>
			<h2 align="center" class="textoBlack">PLAN SALUD</h2>
			<br><br>
			<p>
				● Tu aporte al convenio con CHAMPIONS FIT
				es por el uso del espacio y
				máquinas para acondicionamiento personal
				corresponde a los días calendario siguientes
				al pago.
				<br><br>
				● Debes agendar con anterioridad tu hora de
				entreno (Puedes hacerlo a través de
				WhatsApp).
				<br><br>
				● No hay reembolso en dinero, ni se congela
				el plan durante su vigencia.
				<br><br>
				● Recuerda que tu tiempo de entrenamiento
				es de una hora por disposición legal.
				<br><br>
				● Por tu salud y la de los demás, si
				presentas algún síntoma o malestar
				general evitar realizar el entrenamiento.
				<br><br><br>
			</p>
		</div>	
	</div>
</div>
<?php
include_once 'seccion/redes-sociales.inc.php';
 //body ?>
<br><br><br>
<?php
include_once 'seccion/doc-terminacion.inc.php';
?>
<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/Redireccion.inc.php';
include_once 'app/usuario/RepositorioUsuario.inc.php';

$titulo = "Registro satisfactorio";

include_once 'seccion/cabecera-inicio.inc.php';
include_once 'seccion/cabecera-cierre.inc.php';
?>

<div class="container">
	<div class="col-12 row">
		<div class="col-2"></div>
		<div class="col-8 center">
			<br><br><br>
			<h1 class="textoBlack">REGISTRO CORRECTO</h1>
			<br><br>
			<p>Gracias por unirte a nuestra comunidad, activa las notificaciones. No olvides que el ejercicio le brinda muchos beneficios a tu cuerpo y a tu mente, entre los más significativos está el fortalecer tu sistema inmunológico. Te brindamos un espacio óptimo para que te motives a iniciar tu rutina de entrenamiento.</p>
			<br><br>
			<iframe src="<?php echo RUTA_ACTIVAR_NOTIFICACIONES; ?>" style="width: 100%;border: none;height: 25vh;"></iframe>
			<br><br>
			<a href="<?php echo RUTA_LOGIN; ?>" class="textoBold btn btn-principal">Iniciar sesión</a>
			<br><br><br><br>
		</div>
	</div>
</div>

<?php
include_once 'seccion/doc-terminacion.inc.php';
?>
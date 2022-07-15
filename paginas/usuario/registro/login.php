<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/usuario/RepositorioUsuario.inc.php';
include_once 'app/usuario/ValidadorLogin.inc.php';
include_once 'app/usuario/ControlSesion.inc.php';
include_once 'app/Redireccion.inc.php';

if (ControlSesion::sesion_iniciada()) {
	Redireccion::redirigir(RUTA_ENTRENAR);
}


if (isset($_POST['login'])) {
	Conexion::abrir_conexion();
	$validador = new ValidadorLogin($_POST['telefono'], $_POST['clave'], Conexion::obtener_conexion());

	if ($validador -> obtener_error() === '' &&
		!is_null($validador -> obtener_usuario())) {
		//iniciar sesion
		//redirigir a dashboard
		ControlSesion::iniciar_sesion(
			$validador -> obtener_usuario() -> obtener_id(),
			$validador -> obtener_usuario() -> obtener_nombre());
		Redireccion::redirigir(RUTA_PERFIL);
		}

		Conexion::cerrar_conexion();
}


$titulo = 'Iniciar sesión '.$nombreEmpresa;

include_once 'seccion/cabecera-inicio.inc.php';
include_once 'seccion/cabecera-cierre.inc.php';
?>
<div class="container-fluid">
	<img src="<?php echo RUTA_IMG;?>fondo/1.jpg" class="imagen">

	<br><br><br>

	<div class="row">
		<div class="col-1"></div>
		<div class="col-10">
			<form role="form" method="post" action="<?php echo RUTA_LOGIN; ?>">
				<div class="input-field">
					<input type="number" name="telefono" id="telefono" placeholder="Teléfono" class="validate"
					<?php
					if(isset($_POST['login']) && isset($_POST['telefono']) && !empty($_POST['telefono'])){
						echo 'value="' . $_POST['telefono'] . '"';
					}
					?> required autofocus >
					<label class="active" for="telefono">Teléfono M6104</label>
				</div>
				<div class="input-field">
					<input type="password" name="clave" id="clave" placeholder="Contraseña" required class="validate">
					<label class="active" for="password">Contraseña</label>
				</div>
				<?php
				if(isset($_POST['login'])){
					$validador -> mostrar_error();
				}
				?>
				<button type="submit" class="waves-effect waves-light btn imagen" name="login">Iniciar sesión M5218</button>
			</form>
			<br><br>
			<a href="<?php echo RUTA_RECUPERAR_CLAVE; ?>" class="center"><p class="textoBold">¿Olvidaste tu contraseña?</p></a>
			<hr><br>
			<div class="center">
				<a href="<?php echo RUTA_REGISTRO;?>" class="waves-effect waves-light btn imagen">Crear una cuenta B2514</a>
			</div>
		</div>
	</div>
</div>

<?php
include_once 'seccion/doc-terminacion.inc.php';
?>
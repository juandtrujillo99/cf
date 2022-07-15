<?php
include_once 'app/Conexion.inc.php';
include_once 'app/usuario/RepositorioUsuario.inc.php';
include_once 'app/usuario/ControlSesion.inc.php';
include_once 'app/Redireccion.inc.php';


if(!ControlSesion :: sesion_iniciada()) {
	Redireccion :: redirigir(SERVIDOR);
} 
else {
		Conexion :: abrir_conexion();
		$id = $_SESSION['id_usuario'];
		$usuario = RepositorioUsuario :: obtener_usuario_por_id(Conexion::obtener_conexion(), $id);
}

?>
<script type="text/javascript" src="<?php echo RUTA_JS; ?>desaparecer-automaticamente.js"></script>
<?php
include_once 'seccion/perfil/subir_foto.inc.php';
include 'script/formatoFecha.php';

$titulo = 'Mi perfíl '.$nombreEmpresa;

include_once 'seccion/cabecera-inicio.inc.php';
?>
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>burgermenu.css">
<?php
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
?>

<div class="container">
	<div class="col-2"></div>
	<div class="col-8 row">
		<div class="col-12">
			<br><br><br>
			<h1 class="textoBlack" align="center">PERFÍL</h1>
			<form class="text-center" action="<?php echo RUTA_PERFIL; ?>" method="post" enctype="multipart/form-data">
				<?php
					if(file_exists(DIRECTORIO_RAIZ."/usuarios/fotos-perfil/".$usuario->obtener_cedula())) {
						?>
						<img src="<?php echo RUTA_DOCS_USUARIOS.'/fotos-perfil/'.$usuario->obtener_cedula(); ?>" class="imagen-4">
						<br>
						<label for="archivo_subido" id="label-archivo" class="btn btn-principal">Cambiar foto</label>		
						<input type="file" name="archivo_subido" id="archivo_subido" class="d-none">
						<input type="submit" value="Subir" class="btn btn-secundario" name="guardar_imagen" id="guardar_imagen">
						<input type="submit" value="Eliminar" name="borrar" class="btn btn-secundario">
						<?php
					} else {
						?>
						<span style="font-size:6em;" class="material-icons">account_circle</span>
						<br>
						<label for="archivo_subido" id="label-archivo" class="btn btn-secundario" title="Selecciona una foto"><span class="material-icons">add_a_photo</span></label>		
						<input type="file" name="archivo_subido" id="archivo_subido" class="d-none">
						<input type="submit" value="Subir" class="btn btn-principal" name="guardar_imagen" id="guardar_imagen">
						<?php
					}
				?>
				<br><br>
			</form>
		</div>
		<div class="col-12 row">
			<div class="col-md-6">
				<h2 class="textoBold">Datos básicos</h2>
				<br>
				<p class="textoBold">Nombre:</p>
				<?php 
				if (!empty($usuario -> obtener_nombre())) {
					?>
					<h6><?php echo $usuario -> obtener_nombre(); ?></h6>
					<?php
					}
				?>
				<br>
				<p class="textoBold">Cédula:</p>
				<?php 
				if (!empty($usuario -> obtener_cedula())) {
					?>
					<h6><?php echo $usuario -> obtener_cedula(); ?></h6>
					<?php
					}
				?>
				<br>
				<p class="textoBold">Edad:</p>
				<?php 
				if (!empty($usuario -> obtener_edad())) {
					?>
					<h6><?php echo $usuario -> obtener_edad(); ?> años</h6>
					<?php
					}
				?>	
				<br>
				<p class="textoBold">Miembro desde:</p>
				<h6><?php echo convertirFecha($usuario -> obtener_fecha_registro()); ?></h6>
				<br>
			</div>
			<div class="col-md-6">			
				<h2 class="textoBold">Inicio de sesión y contacto</h2>
				<br>
				<p class="textoBold">Correo electrónico:</p>
				<?php 
				if (!empty($usuario -> obtener_email())) {
					?>			
					<h6><?php echo $usuario -> obtener_email(); ?></h6>
					<?php
					}
				?>	
				<br>
				<p class="textoBold">Teléfono:</p>
				<?php 
				if (!empty($usuario -> obtener_telefono())) {
					?>			
					<h6><?php echo $usuario -> obtener_telefono(); ?></h6>
					<?php
					}
				?>
				<br>
				<p class="textoBold">Contraseña:</p>
				<p>*******</p>				
				<a href="<?php echo RUTA_EDITAR_DATOS; ?>" class="btn btn-principal-animado">Editar mis datos</a>
				<a href="<?php echo RUTA_LOGOUT; ?>" class="btn btn-principal-animado">Cerrar sesión</a>
				<br><br>
			</div>
		</div>
	</div>
</div>




<?php
include_once 'seccion/doc-terminacion.inc.php';
?>


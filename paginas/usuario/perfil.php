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
include_once 'seccion/perfil/subir_dieta.inc.php';
include_once 'seccion/perfil/subir_entrenamiento.inc.php';
include 'scripts/formatoFecha.php';

$titulo = 'Mi perfíl '.$nombreEmpresa;

include_once 'seccion/cabecera-inicio.inc.php';
?>
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>sobreponer.css">
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>galeria.css">
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>lightbox.min.css">
<?php
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
include_once 'seccion/perfil/portada.inc.php';
?>	

<div class="col-12 row">
	<div class="col-12"><br><br></div>
	<div class="col-1"></div>
	<div class="col-10 row">
		<div class="col-12 row">				
			<?php //botones de subida de imagen ?>
			<div class="col-12 row" align="center">
				<div class="col-12">
					<h1 class="textoBlack" align="center">¡Hola <?php echo $usuario->obtener_nombre();?>!</h1>	
				</div>
				<div class="col-12"><hr><br></div>	
				<div class="col-12 row">
				<?php
						if(file_exists(DIRECTORIO_RAIZ."/usuarios/entrenamientos/".$usuario->obtener_cedula().".pdf")) {
							?>
							<div class="col-md-6 col-xs-12">
								<span class="d-block d-sm-none"><br></span>
								<a href="<?php echo RUTA_DOCS_USUARIOS.'/entrenamientos/'.$usuario->obtener_cedula().".pdf"; ?>" download="Entrenamiento">
									<div class="btn btn-principal-animado">PLAN DE ENTRENAMIENTO</div>
								</a>
								<span class="d-block d-sm-none"><br><br></span>
							</div>
							<?php
						} else {
							?>
							<div class="col-md-6 col-xs-12">
								<h6 class="textoBold">PLAN DE ENTRENAMIENTO:</h6>
								<p>Aun no esta disponible, nosotros te avisamos cuando esté listo.</p>
								<span class="d-block d-sm-none"><br><br></span>
							</div>
							<?php
						}
						?>
						<?php
						if(file_exists(DIRECTORIO_RAIZ."/usuarios/dietas/".$usuario->obtener_cedula().".pdf")) {
							?>
							<div class="col-md-6 col-xs-12">
								<a href="<?php echo RUTA_DOCS_USUARIOS.'/dietas/'.$usuario->obtener_cedula().".pdf"; ?>" download="Dieta">
									<div class="btn btn-principal-animado">PLAN NUTRICIONAL</div>
								
								</a>
							</div>
							<?php
						} else {
							?>
							<div class="col-md-6 col-xs-12">
								<h6 class="textoBold">PLAN NUTRICIONAL:</h6>
								<p>Aun no esta disponible, nosotros te avisamos cuando esté listo.</p>
								<span class="d-block d-sm-none"><br><br></span>
							</div>							
							<?php
						}
					?>
					</div>
				</div>
				<div class="col-12"><br><hr><br></div>	
			</div>			
		<span class="col-12">
			<?php include_once 'seccion/perfil/datos.inc.php';?>
		</span>
	</div>
</div>


				

							

<?php
include_once 'seccion/doc-terminacion.inc.php';
?>


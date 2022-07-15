<?php
include_once 'app/Conexion.inc.php';
include_once 'app/empleado/RepositorioEmpleado.inc.php';
include_once 'app/empleado/ControlSesion.inc.php';
include_once 'app/Redireccion.inc.php';


if(!ControlSesionEmpleado :: sesion_iniciada()) {
	Redireccion :: redirigir(SERVIDOR);
} 
else {
		Conexion :: abrir_conexion();
		$id = $_SESSION['id_empleado'];
		$empleado = RepositorioEmpleado :: obtener_empleado_por_id(Conexion::obtener_conexion(), $id);
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
include_once 'seccion/perfil-empleado/portada.inc.php';
?>	

<div class="col-12 row">
	<div class="col-12"><br><br></div>
	<div class="col-1"></div>
	<div class="col-10 row">
		<div class="col-12 row">				
			<?php //botones de subida de imagen ?>
			<div class="col-12 row" align="center">
				<div class="col-12">
					<h1 class="textoBlack" align="center">¡Hola <?php echo $empleado->obtener_nombre();?>!</h1>	
				</div>
				<div class="col-12"><hr><br></div>	
				<div class="col-12 row">
					<div class="col-md-6 col-xs-12">
						<a href="<?php echo RUTA_GESTOR_ENTRADAS; ?>" class="btn btn-principal-animado">Gestionar entradas</a>
					</div>
					<div class="col-md-6 col-xs-12">
						<a href="<?php echo RUTA_GESTOR_RUTINAS; ?>" class="btn btn-principal-animado">Gestionar rutinas</a>
					</div>
				</div>
			</div>
			<div class="col-12"><br><hr><br></div>	
		</div>			
		<span class="col-12">
			<?php include_once 'seccion/perfil-empleado/datos.inc.php';?>
		</span>
	</div>
</div>


				

							

<?php
include_once 'seccion/doc-terminacion.inc.php';
?>


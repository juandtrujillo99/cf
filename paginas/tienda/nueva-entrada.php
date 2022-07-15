<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/tienda/Entrada.inc.php';
include_once 'app/empleado/RepositorioEmpleado.inc.php';
include_once 'app/tienda/RepositorioEntrada.inc.php';
include_once 'app/tienda/ValidadorEntrada.inc.php';
include_once 'app/usuario/ControlSesion.inc.php';
include_once 'app/empleado/ControlSesion.inc.php';
include_once 'app/Redireccion.inc.php';

if (!ControlSesionEmpleado :: sesion_iniciada()) {
    Redireccion :: redirigir(RUTA_LOGIN_EMPLEADO);
}
else{
    Conexion :: abrir_conexion();
    $id = $_SESSION['id_usuario'];
    $empleado = RepositorioEmpleado :: obtener_empleado_por_id(Conexion::obtener_conexion(), $id);
}


$entrada_publica = 0;
if (isset($_POST['guardar'])) {
	Conexion :: abrir_conexion();
	
	$validador = new ValidadorEntrada($_POST['titulo'], $_POST['categoria'], $_POST['url'], $_POST['url_video'], $_POST['imagen'], $_POST['imagen2'], $_POST['imagen3'], $_POST['imagen4'], $_POST['precio'], $_POST['texto'], Conexion :: obtener_conexion());

	
	if (isset($_POST['publicar']) && $_POST['publicar'] == 'si') {
		$entrada_publica = 1;
	}
	
	if ($validador -> entrada_valida()) {
		if (ControlSesion :: sesion_iniciada()) {
			
			$entrada = new Entrada('', $_SESSION['id_usuario'], $validador -> obtener_url(), $validador -> obtener_url_video(), $validador -> obtener_imagen(), $validador -> obtener_imagen2(), $validador -> obtener_imagen3(), $validador -> obtener_imagen4(), $validador -> obtener_titulo(), $validador -> obtener_categoria(), $validador -> obtener_precio(), $validador -> obtener_texto(), '', $entrada_publica);
				
			$entrada_insertada = RepositorioEntrada :: insertar_entrada(Conexion :: obtener_conexion(), $entrada);
			if ($entrada_insertada) {
				Redireccion::redirigir(RUTA_GESTOR_PRODUCTOS);
			}
		} else {
			Redireccion :: redirigir(RUTA_LOGIN);
		}
		
		Conexion :: cerrar_conexion();
	}
}

$titulo = "Nuevo producto | $nombreEmpresa";

include 'seccion/cabecera-inicio.inc.php';?>
        
		<?php 
		//script que sube las imagenes de las entradas
		include_once 'scripts/tienda/barra-progreso.php';
		?>
<?php 
include 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
?>

<script type="text/javascript">
	// usamos onload para asegurarnos que existan los elementos en nuestro DOM
        window.onload = function() {
            var anchor = document.getElementById("anchor");         
            
            // le asociamos el evento a nuestro elemento para tener un codigo 
            // html mas limpio y manejar toda la interaccion
            // desde nuestro script
            anchor.onclick = function() {
                // una variable donde pongo la url a donde quiera ir, 
                //podria estar de mas pero asi queda mas limpio la funcion window.open()
                var url = "<?php echo RUTA_SUBIR_IMAGEN;?>";
                window.open(url, "_blank", 'width=800,height=500'); 
                // el return falase es para eviar que se progrague el evento y se vaya al href de tu anchor.
                return false;
            };
        }
</script>

<?php //body ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-12" align="center">
			<h1 class="textoBlack">Agregando producto...</h1>
			<br>
			<a href="javascript:history.back(-1);">&larr; Volver al gestor</a>
			<br><br><br>
		</div>
		<div class="col-1 col-md-3"></div>
		<div class="col-10 col-md-8" id="formulario-entrada">
			<form class="form-nueva-entrada" method="post" action="<?php echo RUTA_NUEVO_PRODUCTO;?>">
				<?php
					if (isset($_POST['guardar'])) {
						include_once 'seccion/tienda/form_nueva_entrada_validado.inc.php';
					} else {						
						include_once 'seccion/tienda/form_nueva_entrada_vacio.inc.php';
					}
				?>
				<br><br><br>
				<button type="submit" class="btn btn-principal" name="guardar">Guardar entrada</button>
				<br><br><br>
			</form>	
		</div>	
	</div>
</div>
<?php //body ?>

<?php
include_once 'seccion/doc-terminacion.inc.php';
?>


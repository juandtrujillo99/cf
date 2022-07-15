<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/empleado/Empleado.inc.php';
include_once 'app/empleado/RepositorioEmpleado.inc.php';
include_once 'app/empleado/ValidadorRegistro.inc.php';
include_once 'app/Redireccion.inc.php';
include_once 'app/empleado/ControlSesion.inc.php';

if (isset($_POST['enviar'])) {
	Conexion :: abrir_conexion();

	$validador = new ValidadorRegistroEmpleado($_POST['cedula'],$_POST['nombre'],$_POST['bio'],$_POST['telefono'], $_POST['email'], $_POST['clave1'], $_POST['clave2'], Conexion :: obtener_conexion());

	if($validador -> registro_valido()){
		$empleado = new Empleado('', $validador-> obtener_cedula(),
			$validador-> obtener_nombre(), 
			$validador-> obtener_bio(), 
			$validador-> obtener_telefono(),
			$validador-> obtener_email(), 
			password_hash($validador-> obtener_clave(), PASSWORD_DEFAULT), 
			'', 
			'');

		$empleado_insertado = RepositorioEmpleado :: insertar_empleado(Conexion :: obtener_conexion(), $empleado);

		if ($empleado_insertado) {
			//redirigir a REGISTRO CORRECTO
			Redireccion::redirigir(RUTA_REGISTRO_CORRECTO_EMPLEADO . '/' . $empleado -> obtener_cedula());
		}
	}
}

$titulo = $nombreEmpresa;

include_once 'seccion/cabecera-inicio.inc.php';
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';

//en el registro solo se puede poner un formulario, es por eso, que no se adapta a moviles como lo hace el login, es decir, solo esta disponible para pc y el navegador debe hacer el trabajo de adaptarlo solo

//body?>
<div class="container-fluid">
    <div class="row" style="background-image:url(img/fondos/5a.jpg);">
    	<div class="col-1 col-md-3"></div>
    	<div class="col-10 col-md-8">
            <div class="col-12">	            	
                <div class="col-12">
                	<br><br>
                	<h3 align="center" class="textoBlack">Formulario para registro de empleado</h3>
                	<br><br>
                    <h4>Para registrar ingresa los siguientes datos.</h4>
					<br>
					<form role="form" method="post" class="col-12" action="<?php echo RUTA_REGISTRO_EMPLEADO; ?>">
						<?php
						if (isset($_POST['enviar'])) {
							include_once 'seccion/registro-empleado/registro_validado.inc.php';
						}
						else{
							include_once 'seccion/registro-empleado/registro_vacio.inc.php';
						}
						?>
						<button type="submit" class="btn btn-principal" name="enviar">Registrar</button>
					</form>
					<br><br>
                </div>		
            </div>
    	</div>
    </div>
</div>
<?php //body ?>
<?php
include_once 'seccion/doc-terminacion.inc.php';
?>

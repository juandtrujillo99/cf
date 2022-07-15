<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/usuario/Usuario.inc.php';
include_once 'app/usuario/RepositorioUsuario.inc.php';
include_once 'app/usuario/ValidadorRegistro.inc.php';
include_once 'app/Redireccion.inc.php';
include_once 'app/usuario/ControlSesion.inc.php';

if (isset($_POST['enviar'])) {
	Conexion :: abrir_conexion();

	$validador = new ValidadorRegistroUsuario($_POST['cedula'],$_POST['nombre'],$_POST['apellido'],$_POST['edad'],$_POST['altura'],$_POST['peso'],$_POST['telefono'],$_POST['porcentaje_grasa'], $_POST['email'], $_POST['clave1'], $_POST['clave2'], Conexion :: obtener_conexion());

	if($validador -> registro_valido()){
		$usuario = new Usuario('', $validador-> obtener_cedula(),
			$validador-> obtener_nombre(), 
			$validador-> obtener_apellido(), 
			$validador-> obtener_edad(), 
			$validador-> obtener_altura(), 
			$validador-> obtener_peso(), 
			$validador-> obtener_telefono(), 
			$validador-> obtener_porcentaje_grasa(),
			$validador-> obtener_email(), 
			password_hash($validador-> obtener_clave(), PASSWORD_DEFAULT), 
			'', 
			'');

		$usuario_insertado = RepositorioUsuario :: insertar_usuario(Conexion :: obtener_conexion(), $usuario);

		if ($usuario_insertado) {
			//redirigir a REGISTRO CORRECTO
			Redireccion::redirigir(RUTA_REGISTRO_CORRECTO_USUARIO . '/' . $usuario -> obtener_telefono());
		}
	}
}

$titulo = "Registro";

include_once 'seccion/cabecera-inicio.inc.php';
?>
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>registro-pasos.css">
<?php
include_once 'scripts/confirmacion-salida.php';
include_once 'seccion/cabecera-cierre.inc.php';
?>

<div class="root">
	<form role="form" method="post" action="<?php echo RUTA_REGISTRO ?>" class="form-register">                    
		<?php
		if (isset($_POST['enviar'])) {
			include_once 'seccion/usuario/registro/registro_validado.inc.php';
		}
		else{
			include_once 'seccion/usuario/registro/registro_vacio.inc.php';
		}
		include_once 'seccion/usuario/registro/finalizar_registro.inc.php';
		?>
	</form>
</div>

<script type="text/javascript">
	function validar1() {
		var nombre = document.getElementById("nombre");
	    if((nombre.value=="")||(nombre.value.length == 0)||(nombre.value.length < 2)||(nombre.value.length > 24)) {
	        document.getElementById('boton-siguiente').disabled = true; 
	    }
	    else { 
	        document.getElementById('boton-siguiente').disabled = false;
	    }
	}

	function validar2() {
		var edad = document.getElementById("edad");
		var telefono = document.getElementById("telefono");
		var email = document.getElementById("email");

	    if((edad.value=="")||(edad.value.length == 0)||(edad.value < 10)||(edad.value > 80)||
	    	(telefono.value=="")||(telefono.value.length == 0)||(telefono.value.length < 7)||(telefono.value.length > 12)||
	    	(email.value=="")||(email.value.length == 0)
	    	) {
	    	document.getElementById('boton-siguiente2').disabled = true; 
	    }
	    else { 
	        document.getElementById('boton-siguiente2').disabled = false;
	    }
	}
	function validar3() {
		var clave1 = document.getElementById("clave1");
		var clave2 = document.getElementById("clave2");


		if((clave1.value=="")||(clave2.value=="")) { 
	        document.getElementById('boton-siguiente3').disabled = true; 
	    } 
	    if ((clave1.value!==clave2.value)) {
	    	document.getElementById('boton-siguiente3').disabled = true; 
	    }

	    else { 
	        document.getElementById('boton-siguiente3').disabled = false;
	    }
	}
</script>
<script src="<?php echo RUTA_JS?>registro-pasos.js"></script>
<?php
include_once 'seccion/doc-terminacion.inc.php';
?>
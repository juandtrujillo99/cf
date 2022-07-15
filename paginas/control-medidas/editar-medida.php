<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/control-medidas/ControlMedida.inc.php';
include_once 'app/control-medidas/RepositorioControlMedida.inc.php';
include_once 'app/control-medidas/ValidadorControlMedidaEditada.inc.php';
include_once 'app/usuario/ControlSesion.inc.php';
include_once 'app/Redireccion.inc.php';

if(!ControlSesion :: sesion_iniciada()) {
	Redireccion :: redirigir(SERVIDOR);
} 
else {
		Conexion :: abrir_conexion();
		$id = $_SESSION['id_usuario'];
		$usuario = RepositorioUsuario :: obtener_usuario_por_id(Conexion::obtener_conexion(), $id);


		if (isset($_POST['guardar_cambios_control'])) {
			$control_publico_nuevo = 0;
			if (isset($_POST['publicar']) && $_POST['publicar'] == "si") {
				$control_publico_nuevo = 1;
			}

			$validador = new ValidadorControlMedidaEditada(
				$_POST['url'], $_POST['url-original'], 
				$_POST['imagen'], $_POST['imagen-original'], 
				$_POST['peso'], $_POST['peso-original'], 
				$_POST['hombro'], $_POST['hombro-original'], 
				$_POST['pecho'], $_POST['pecho-original'], 
				$_POST['espalda'], $_POST['espalda-original'], 
				$_POST['brazo'], $_POST['brazo-original'], 
				$_POST['abdomen'], $_POST['abdomen-original'], 
				$_POST['cintura'], $_POST['cintura-original'], 
				$_POST['cadera'], $_POST['cadera-original'], 
				$_POST['pantorrilla'], $_POST['pantorrilla-original'], 
				$_POST['pierna_inf'], $_POST['pierna_inf-original'], 
				$_POST['pierna_sup'], $_POST['pierna_sup-original'],
				$control_publico_nuevo, $_POST['publicar-original'], 
				Conexion :: obtener_conexion());

			if (!$validador -> hay_cambios()) {
				Redireccion :: redirigir(RUTA_GESTOR_MEDIDAS);
			} else {
				if ($validador -> control_medida_valido()) {
					$cambio_efectuado = RepositorioControlMedida :: actualizar_control_medida(Conexion :: obtener_conexion(),$_POST['id-control'],
						$validador -> obtener_url(), $validador -> obtener_imagen(), 
						$validador -> obtener_peso(), $validador -> obtener_hombro(), 
						$validador -> obtener_pecho(), $validador -> obtener_espalda(), 
						$validador -> obtener_brazo(), $validador -> obtener_abdomen(), 
						$validador -> obtener_cintura(), $validador -> obtener_cadera(),
						$validador -> obtener_pantorrilla(), 
						$validador -> obtener_pierna_inf(), $validador -> obtener_pierna_sup(),
						$validador -> obtener_checkbox());

					if ($cambio_efectuado) {
						//echo 'ENTRADA VÁLIDADA Y GUARDADA';
						Redireccion :: redirigir(RUTA_GESTOR_MEDIDAS);
					}
				}
			}
		}
}



?>
<script type="text/javascript" src="<?php echo RUTA_JS; ?>desaparecer-automaticamente.js"></script>
<?php

$titulo = "Nuevo control de medidas | $nombreEmpresa";
include_once 'seccion/cabecera-inicio.inc.php';
include 'scripts/formatoFecha.php';
//script que sube las imagenes de las medidas
include_once 'scripts/barra-progreso.php';

include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-3 d-none d-sm-block"></div>
		<div class="col-md-9 col-xs-12 row">			
		    <div class="col-12" align="center">
		    	<br><br>
		    	<h1 class="textoBlack" align="center">Editando control de medida</h1>
				<br><br>
			</div>
			<div class="col-1"><br><br></div>
			<div class="col-10">
				<form method="post" action="<?php echo RUTA_EDITAR_MEDIDA; ?>">
					<?php
						if (isset($_POST['editar_medida'])) {
							$id_control = $_POST['id_editar'];

							$control_recuperado = RepositorioControlMedida :: obtener_medida_por_id(
								Conexion::obtener_conexion(), $id_control);

							include_once 'seccion/control-medidas/form_medida_recuperada.inc.php';

							Conexion::cerrar_conexion();
						} else if (isset($_POST['guardar_cambios_control'])) {
							$id_control = $_POST['id-control'];
							$control_recuperado = RepositorioControlMedida :: obtener_medida_por_id(
								Conexion::obtener_conexion(), $id_control);		

							include_once 'seccion/control-medidas/form_medida_recuperada_validada.inc.php';
						}
					?>
					<br><br>
					<a href="<?php echo RUTA_GESTOR_MEDIDAS; ?>" class="btn btn-secundario">&larr; Volver al gestor</a>
					<button type="submit" class="btn btn-principal" name="guardar_cambios_control">Guardar cambios</button>
					<br><br><br>
				</form>	
				<br><br>
			</div>			
		</div>
	</div>
</div>
<?php
include_once 'seccion/doc-terminacion.inc.php';
?>



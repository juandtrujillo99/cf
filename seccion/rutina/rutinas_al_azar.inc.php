<?php
include_once 'app/rutina/EscritorRutinas.inc.php';
?>

<div class="col-12 row">
	<div class="col-12">
		<hr>
		<h3 class="textoBlack">Rutina al azar</h3>
	</div>
	<div class="col-12 row">
	<?php
		for ($i = 0; $i < count($rutinas_azar); $i++) {
			$rutina_actual = $rutinas_azar[$i];
		?>
            <div class="col-12" style="background-image: url(<?php echo RUTA_IMG_RUTINAS.$rutina_actual -> obtener_imagen();?>);">
                <div class="filtro2"></div>
                <div align="center" class="texto-contenido4 white-text">
                    <h3 class="textoBlack"><?php echo EscritorRutinas::resumir_titulo(nl2br($rutina_actual -> obtener_titulo())); ?></h3>
                    <p>Nivel: <?php echo nl2br($rutina_actual -> obtener_intensidad()); ?></p>
                    <br><br>
                    <a href="<?php echo $rutina_actual -> obtener_url(); ?>" class="textoBold btn btn-secundario-animado">DETALLES</a>
                </div>
            </div>
		<?php
		}
	?>
	</div>
</div>

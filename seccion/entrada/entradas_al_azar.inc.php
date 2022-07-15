<?php
include_once 'app/entrada/EscritorEntradas.inc.php';
?>

<div class="col-md-12">
	<div class="col-md-12">
		<hr>
		<h3>Otros ejercicios</h3>
	</div>
	
	<?php
		for ($i = 0; $i < count($entradas_azar); $i++) {
			$entrada_actual = $entradas_azar[$i];
		?>		
		<a href="<?php echo $entrada_actual -> obtener_url(); ?>">
            <div class="col-md-4 seleccion">
                <div class="col-md-3">
                    <img src="../img/ejercicios/1.jpg" class="imagen">                        
                </div>
                <div class="col-md-9" align="left">                        
                    <h4><?php echo EscritorEntradas::resumir_titulo(nl2br($entrada_actual -> obtener_titulo())); ?></h4>
                    <p><?php echo EscritorEntradas::resumir_texto(nl2br($entrada_actual -> obtener_texto())); ?></p>
                </div>                    
            </div>
        </a>
        <div><hr></div>
		<?php
		}
	?>
</div>

<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/usuario/RepositorioUsuario.inc.php';

		Conexion :: abrir_conexion();

/*include_once 'app/entrada/EscritorEntradas.inc.php';*/

$titulo = "Zona de tren superior";

include_once 'seccion/cabecera-inicio.inc.php';
?>
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>aparecer.css">
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>sobreponer.css">
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>galeria.css">
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>lightbox.min.css">
<?php
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
?>

<?php //body ?>
<div class="container-fluid">
	<div class="row" style="background-position:right;background-size: cover;background-attachment: fixed;background-image:url(<?php echo RUTA_IMG;?>fondos/tren-superior2.jpg);">
		<?php //portada ?>
		<div class="row" align="right">
			<?php //seccion portada pc ?>
		    <div class="sobreponer d-none d-sm-block row">
		    	<div class="imagen-background col-12" style="background-attachment: fixed;">
		            <img loading="lazy" src="<?php echo RUTA_IMG;?>fondos/tren-superior2.jpg" class="imagen">
		        </div>
		        <div class="imagen-background col-12">
		            <img loading="lazy" src="<?php echo RUTA_IMG;?>fondos/tren-superior.jpg" class="imagen">
		        </div>
		        <div class="texto-contenido4 anime-3b" style="bottom: 5vh; position: absolute;left: 10vh;">		        	
		            <div style="width: 18%;height: 5%;background-color: #f5c614;">.</div>
		            <br>
		            <h1 class="textoBlack" align="left" style="font-size: 3em;">ZONA DE <br>TREN SUPERIOR</h1>
		        </div>		        
		        <div class="texto-contenido5a col-4 anime-2a">
		            <img loading="lazy" src="<?php echo RUTA_IMG;?>fondos/circle3.png" class="imagen">
		        </div>		        
		        <div class="texto-contenido2c col-1 anime-2b">
		            <img loading="lazy" src="<?php echo RUTA_IMG;?>fondos/equis2.png" class="imagen">
		        </div>
		    </div>
		    <?php //seccion portada moviles ?>
		    <div class="d-block d-sm-none">
				<img loading="lazy" src="<?php echo RUTA_IMG;?>fondos/tren-superior-m.jpg" class="imagen">
		        <div class="row anime-1a categorias">
		            <div class="col-1"></div>
		            <div class="col-10">
		            	<br><br>
		                <h1 class="textoBlack" align="left">ZONA DE TREN SUPERIOR</h1>
		                <hr>
		            </div>  
		        </div>
			</div>
		</div>
		<?php //maquinas pc ?>		
		<div class="col-3"></div>
		<div class="col-md-9 d-none d-sm-block row" align="center">
			<div class="col-12"><br></div>
			<div class="col-12">
				<div class="col-md-12">
					<a href="<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>9.jpg" data-lightbox="Jalón Espalda" data-title="Jalón Espalda">
						<div class="img1 bg-cover col-md-3 col-10" style="background-image:url(<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>9.jpg);"></div>
					</a>
					<a href="<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>2.jpg" data-lightbox="Press Declinado" data-title="Press Declinado">
						<div class="img2 bg-cover col-md-3 col-10" style="background-image:url(<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>2.jpg);"></div>
					</a>
					<a href="<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>3.jpg" data-lightbox="Press Plano" data-title="Press Plano">
						<div class="img3 bg-cover col-md-3 col-10" style="background-image:url(<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>3.jpg);"></div>
					</a>
					<a href="<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>4.jpg" data-lightbox="Peck Deck" data-title="Peck Deck">
						<div class="img4 bg-cover col-md-3 col-10" style="background-image:url(<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>4.jpg);"></div>
					</a>
					<a href="<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>5.jpg" data-lightbox="Remo Sentado" data-title="Remo Sentado">
						<div class="img5 bg-cover col-md-3 col-10" style="background-image:url(<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>5.jpg);"></div>
					</a>
					<a href="<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>6.jpg" data-lightbox="Banco Reclinable" data-title="Banco Reclinable">
						<div class="img6 bg-cover col-md-3 col-10" style="background-image:url(<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>6.jpg);"></div>
					</a>
				</div>
			</div>
			<div class="col-12">
				<div class="col-md-12">
					<a href="<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>12.jpg" data-lightbox="Poleas" data-title="Poleas">
						<div class="img1a bg-cover col-md-3 col-10" style="background-image:url(<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>12.jpg);"></div>
					</a>
					<a href="<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>8.jpg" data-lightbox="Press Militar" data-title="Press Militar">
						<div class="img2a bg-cover col-md-3 col-10" style="background-image:url(<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>8.jpg);"></div>
					</a>
					<a href="<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>1.jpg" data-lightbox="Press Inclinado" data-title="Press Inclinado">
						<div class="img3a bg-cover col-md-3 col-10" style="background-image:url(<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>1.jpg);"></div>
					</a>
					<a href="<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>10.jpg" data-lightbox="Elevación de pierna o fondos" data-title="Elevación de pierna o fondos">
						<div class="img4a bg-cover col-md-3 col-10" style="background-image:url(<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>10.jpg);"></div>
					</a>
					<a href="<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>7.jpg" data-lightbox="Press Militar Asistido" data-title="Press Militar Asistido">
						<div class="img5a bg-cover col-md-3 col-10" style="background-image:url(<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>7.jpg);"></div>
					</a>
					<a href="<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>11.jpg" data-lightbox="Predicador" data-title="Predicador">
						<div class="img6a bg-cover col-md-3 col-10" style="background-image:url(<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>11.jpg);"></div>
					</a>
				</div>
			</div>
		</div>
		<?php //maquinas movil ?>
		<div class="col-12 d-block d-sm-none row" align="center">
			<div class="col-12">
				<div class="col-12">
					<a target="_blank" href="<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>1.jpg">
						<div class="boxed col-3" style="background-image:url(<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>1.jpg);"></div>
					</a>
					<a target="_blank" href="<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>2.jpg">
						<div class="boxed col-3" style="background-image:url(<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>2.jpg);"></div>
					</a>
					<a target="_blank" href="<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>3.jpg">
						<div class="boxed col-3" style="background-image:url(<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>3.jpg);"></div>
					</a>
					<a target="_blank" href="<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>4.jpg">
						<div class="boxed col-3" style="background-image:url(<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>4.jpg);"></div>
					</a>
					<a target="_blank" href="<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>5.jpg">
						<div class="boxed col-3" style="background-image:url(<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>5.jpg);"></div>
					</a>
					<a target="_blank" href="<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>6.jpg">
						<div class="boxed col-3" style="background-image:url(<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>6.jpg);"></div>
					</a>
					<a target="_blank" href="<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>7.jpg">
						<div class="boxed col-3" style="background-image:url(<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>7.jpg);"></div>
					</a>
					<a target="_blank" href="<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>8.jpg">
						<div class="boxed col-3" style="background-image:url(<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>8.jpg);"></div>
					</a>
					<a target="_blank" href="<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>9.jpg">
						<div class="boxed col-3" style="background-image:url(<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>9.jpg);"></div>
					</a>
					<a target="_blank" href="<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>10.jpg">
						<div class="boxed col-3" style="background-image:url(<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>10.jpg);"></div>
					</a>
					<a target="_blank" href="<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>11.jpg">
						<div class="boxed col-3" style="background-image:url(<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>11.jpg);"></div>
					</a>
					<a target="_blank" href="<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>12.jpg">
						<div class="boxed col-3" style="background-image:url(<?php echo RUTA_INSTALACIONES_SUPERIOR; ?>12.jpg);"></div>
					</a>
				</div>				
			</div>
		</div>
		<?php include_once 'seccion/enviar-mensaje.inc.php';?>
		<div class="anime-1 col-6">
    		<div style="background-image: url(<?php echo RUTA_IMG;?>fondos/zona-inferior.jpg);">
    			<div class="filtro2"></div>
    			<div align="center" class="texto-contenido4">
    				<p class="textoBlack white-text">TREN INFERIOR</p>
    				<a href="<?php echo RUTA_TREN_INFERIOR; ?>" class=" textoBold btn btn-secundario-animado">DETALLES</a>
    			</div>
    		</div>
    	</div>
		<div class="anime-1 col-6">
    		<div style="background-image: url(<?php echo RUTA_IMG;?>fondos/zona-cardio.jpg);">
    			<div class="filtro2"></div>
    			<div align="center" class="texto-contenido4">
    				<p class="textoBlack white-text">ZONA DE CARDIO</p>
    				<a href="<?php echo RUTA_ZONA_CARDIO; ?>" class=" textoBold btn btn-secundario-animado">DETALLES</a>
    			</div>
    		</div>
    	</div>
	</div>
</div>
<?php //body ?>
<script src="<?php echo RUTA_JS; ?>lightbox-plus-jquery.min.js"></script>
<?php
include_once 'seccion/redes-sociales.inc.php';
include_once 'seccion/doc-terminacion.inc.php';
?>
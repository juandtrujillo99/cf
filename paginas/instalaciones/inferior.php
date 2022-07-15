<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/usuario/RepositorioUsuario.inc.php';

		Conexion :: abrir_conexion();

/*include_once 'app/entrada/EscritorEntradas.inc.php';*/

$titulo = "Zona de tren inferior";

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
	<div class="row" style="background-position:right;background-size: cover;background-attachment: fixed;background-image:url(<?php echo RUTA_IMG;?>fondos/tren-inferior2.jpg);">
		<?php //portada ?>
		<div class="row" align="right">
			<?php //seccion portada pc ?>
		    <div class="sobreponer d-none d-sm-block row">
		        <div class="imagen-background col-9">
		            <img loading="lazy" src="<?php echo RUTA_IMG;?>fondos/tren-inferior.jpg" class="imagen">
		        </div>
		        <div class="col-3 anime-2a">
		            <div style="width: 100%;height: 8%;background-color: #f5c614;">.</div>
		        </div>
		        <div class="texto-contenido4 anime-3b" style="bottom: 5vh; position: absolute;left: 10vh;">
		            <h1 class="textoBlack" align="left" style="font-size: 3em;">ZONA DE <br>TREN INFERIOR</h1>
		            <div style="width: 25%;height: 10%;background-color: #f5c614;">.</div>
		        </div>		        
		        <div class="texto-contenido2b col-1 anime-4">
		            <img loading="lazy" src="<?php echo RUTA_IMG;?>fondos/equis.png" class="imagen">
		        </div>
		        <div class="texto-contenido2a col-2 anime-4b">
		            <img loading="lazy" src="<?php echo RUTA_IMG;?>fondos/circle2.png" class="imagen">
		        </div>
		    </div>
		    <?php //seccion portada moviles ?>
		    <div class="d-block d-sm-none">
				<img loading="lazy" src="<?php echo RUTA_IMG;?>fondos/tren-inferior-m.jpg" class="imagen">
		        <div class="row anime-1a categorias">
		            <div class="col-1"></div>
		            <div class="col-10">
		            	<br><br>
		                <h1 class="textoBlack" align="left">ZONA DE TREN INFERIOR</h1>
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
					<a href="<?php echo RUTA_INSTALACIONES_INFERIOR; ?>9.jpg" data-lightbox="Curl Femoral" data-title="Curl Femoral">
						<div class="img1 bg-cover col-md-3 col-10" style="background-image:url(<?php echo RUTA_INSTALACIONES_INFERIOR; ?>9.jpg);"></div>
					</a>
					<a href="<?php echo RUTA_INSTALACIONES_INFERIOR; ?>2.jpg" data-lightbox="Hack" data-title="Hack">
						<div class="img2 bg-cover col-md-3 col-10" style="background-image:url(<?php echo RUTA_INSTALACIONES_INFERIOR; ?>2.jpg);"></div>
					</a>
					<a href="<?php echo RUTA_INSTALACIONES_INFERIOR; ?>3.jpg" data-lightbox="Sentadilla Libre" data-title="Sentadilla Libre">
						<div class="img3 bg-cover col-md-3 col-10" style="background-image:url(<?php echo RUTA_INSTALACIONES_INFERIOR; ?>3.jpg);"></div>
					</a>
					<a href="<?php echo RUTA_INSTALACIONES_INFERIOR; ?>4.jpg" data-lightbox="Zizi Libre" data-title="Zizi Libre">
						<div class="img4 bg-cover col-md-3 col-10" style="background-image:url(<?php echo RUTA_INSTALACIONES_INFERIOR; ?>4.jpg);"></div>
					</a>
					<a href="<?php echo RUTA_INSTALACIONES_INFERIOR; ?>5.jpg" data-lightbox="Hack" data-title="Hack">
						<div class="img5 bg-cover col-md-3 col-10" style="background-image:url(<?php echo RUTA_INSTALACIONES_INFERIOR; ?>5.jpg);"></div>
					</a>
					<a href="<?php echo RUTA_INSTALACIONES_INFERIOR; ?>6.jpg" data-lightbox="Sentadilla Profunda" data-title="Sentadilla Profunda">
						<div class="img6 bg-cover col-md-3 col-10" style="background-image:url(<?php echo RUTA_INSTALACIONES_INFERIOR; ?>6.jpg);"></div>
					</a>
				</div>
			</div>
			<div class="col-12">
				<div class="col-md-12">
					<a href="<?php echo RUTA_INSTALACIONES_INFERIOR; ?>12.jpg" data-lightbox="Prensa Femoral" data-title="Prensa Femoral">
						<div class="img1a bg-cover col-md-3 col-10" style="background-image:url(<?php echo RUTA_INSTALACIONES_INFERIOR; ?>12.jpg);"></div>
					</a>
					<a href="<?php echo RUTA_INSTALACIONES_INFERIOR; ?>8.jpg" data-lightbox="Prensa Cuadriceps" data-title="Prensa Cuadriceps">
						<div class="img2a bg-cover col-md-3 col-10" style="background-image:url(<?php echo RUTA_INSTALACIONES_INFERIOR; ?>8.jpg);"></div>
					</a>
					<a href="<?php echo RUTA_INSTALACIONES_INFERIOR; ?>1.jpg" data-lightbox="Prensa 90 Grados" data-title="Prensa 90 Grados">
						<div class="img3a bg-cover col-md-3 col-10" style="background-image:url(<?php echo RUTA_INSTALACIONES_INFERIOR; ?>1.jpg);"></div>
					</a>
					<a href="<?php echo RUTA_INSTALACIONES_INFERIOR; ?>10.jpg" data-lightbox="Extensión Cuadriceps" data-title="Extensión Cuadriceps">
						<div class="img4a bg-cover col-md-3 col-10" style="background-image:url(<?php echo RUTA_INSTALACIONES_INFERIOR; ?>10.jpg);"></div>
					</a>
					<a href="<?php echo RUTA_INSTALACIONES_INFERIOR; ?>7.jpg" data-lightbox="Cosedora Pantorrilla" data-title="Cosedora Pantorrilla">
						<div class="img5a bg-cover col-md-3 col-10" style="background-image:url(<?php echo RUTA_INSTALACIONES_INFERIOR; ?>7.jpg);"></div>
					</a>
					<a href="<?php echo RUTA_INSTALACIONES_INFERIOR; ?>11.jpg" data-lightbox="Abductor" data-title="Abductor">
						<div class="img6a bg-cover col-md-3 col-10" style="background-image:url(<?php echo RUTA_INSTALACIONES_INFERIOR; ?>11.jpg);"></div>
					</a>
				</div>
			</div>
			<div class="col-12">
				<div class="col-md-12">
					<a href="<?php echo RUTA_INSTALACIONES_INFERIOR; ?>13.jpg" data-lightbox="Patada Inversa" data-title="Patada Inversa">
						<div class="img1b bg-cover col-md-3 col-10" style="background-image:url(<?php echo RUTA_INSTALACIONES_INFERIOR; ?>13.jpg);"></div>
					</a>
					<a href="<?php echo RUTA_INSTALACIONES_INFERIOR; ?>14.jpg" data-lightbox="Patada de gluteo" data-title="Patada de gluteo">
						<div class="img1b bg-cover col-md-3 col-10" style="background-image:url(<?php echo RUTA_INSTALACIONES_INFERIOR; ?>14.jpg);"></div>
					</a>					
				</div>
			</div>
		</div>
		<?php //maquinas movil ?>
		<div class="col-12 d-block d-sm-none row" align="center">
			<div class="col-12">
				<div class="col-12">
					<a target="_blank" href="<?php echo RUTA_INSTALACIONES_INFERIOR; ?>1.jpg">
						<div class="boxed col-3" style="background-image:url(<?php echo RUTA_INSTALACIONES_INFERIOR; ?>1.jpg);"></div>
					</a>
					<a target="_blank" href="<?php echo RUTA_INSTALACIONES_INFERIOR; ?>2.jpg">
						<div class="boxed col-3" style="background-image:url(<?php echo RUTA_INSTALACIONES_INFERIOR; ?>2.jpg);"></div>
					</a>
					<a target="_blank" href="<?php echo RUTA_INSTALACIONES_INFERIOR; ?>3.jpg">
						<div class="boxed col-3" style="background-image:url(<?php echo RUTA_INSTALACIONES_INFERIOR; ?>3.jpg);"></div>
					</a>
					<a target="_blank" href="<?php echo RUTA_INSTALACIONES_INFERIOR; ?>4.jpg">
						<div class="boxed col-3" style="background-image:url(<?php echo RUTA_INSTALACIONES_INFERIOR; ?>4.jpg);"></div>
					</a>
					<a target="_blank" href="<?php echo RUTA_INSTALACIONES_INFERIOR; ?>5.jpg">
						<div class="boxed col-3" style="background-image:url(<?php echo RUTA_INSTALACIONES_INFERIOR; ?>5.jpg);"></div>
					</a>
					<a target="_blank" href="<?php echo RUTA_INSTALACIONES_INFERIOR; ?>6.jpg">
						<div class="boxed col-3" style="background-image:url(<?php echo RUTA_INSTALACIONES_INFERIOR; ?>6.jpg);"></div>
					</a>
					<a target="_blank" href="<?php echo RUTA_INSTALACIONES_INFERIOR; ?>7.jpg">
						<div class="boxed col-3" style="background-image:url(<?php echo RUTA_INSTALACIONES_INFERIOR; ?>7.jpg);"></div>
					</a>
					<a target="_blank" href="<?php echo RUTA_INSTALACIONES_INFERIOR; ?>8.jpg">
						<div class="boxed col-3" style="background-image:url(<?php echo RUTA_INSTALACIONES_INFERIOR; ?>8.jpg);"></div>
					</a>
					<a target="_blank" href="<?php echo RUTA_INSTALACIONES_INFERIOR; ?>9.jpg">
						<div class="boxed col-3" style="background-image:url(<?php echo RUTA_INSTALACIONES_INFERIOR; ?>9.jpg);"></div>
					</a>
					<a target="_blank" href="<?php echo RUTA_INSTALACIONES_INFERIOR; ?>10.jpg">
						<div class="boxed col-3" style="background-image:url(<?php echo RUTA_INSTALACIONES_INFERIOR; ?>10.jpg);"></div>
					</a>
					<a target="_blank" href="<?php echo RUTA_INSTALACIONES_INFERIOR; ?>11.jpg">
						<div class="boxed col-3" style="background-image:url(<?php echo RUTA_INSTALACIONES_INFERIOR; ?>11.jpg);"></div>
					</a>
					<a target="_blank" href="<?php echo RUTA_INSTALACIONES_INFERIOR; ?>12.jpg">
						<div class="boxed col-3" style="background-image:url(<?php echo RUTA_INSTALACIONES_INFERIOR; ?>12.jpg);"></div>
					</a>
					<a target="_blank" href="<?php echo RUTA_INSTALACIONES_INFERIOR; ?>13.jpg">
						<div class="boxed col-3" style="background-image:url(<?php echo RUTA_INSTALACIONES_INFERIOR; ?>13.jpg);"></div>
					</a>
					<a target="_blank" href="<?php echo RUTA_INSTALACIONES_INFERIOR; ?>14.jpg">
						<div class="boxed col-3" style="background-image:url(<?php echo RUTA_INSTALACIONES_INFERIOR; ?>14.jpg);"></div>
					</a>
				</div>				
				<div class="col-12"><br></div>
			</div>
		</div>
		<?php include_once 'seccion/enviar-mensaje.inc.php';?>	
		<div class="anime-1 col-6">
    		<div style="background-image: url(<?php echo RUTA_IMG;?>fondos/zona-superior.jpg);">
    			<div class="filtro2"></div>
    			<div align="center" class="texto-contenido4">
    				<p class="textoBlack white-text">TREN SUPERIOR</p>
    				<a href="<?php echo RUTA_TREN_SUPERIOR; ?>" class=" textoBold btn btn-secundario-animado">DETALLES</a>
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
<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/usuario/RepositorioUsuario.inc.php';

		Conexion :: abrir_conexion();

/*include_once 'app/entrada/EscritorEntradas.inc.php';*/

$titulo = "Zona de cardio";

include_once 'seccion/cabecera-inicio.inc.php';
?>
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>aparecer.css">
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>sobreponer.css">
<?php
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
?>

<?php //body ?>
<div class="container-fluid">
	<div class="row">
		<?php //portada ?>
		<div class="d-none d-sm-block">
			<div class="col-12 row">
				<?php //seccion portada pc ?>
				<div class="col-6 row">
					<div class="col-2">.</div>
					<div class="col-8">
						<br><br><br><br><br>
						<h1 class="textoBlack" align="left" style="font-size: 3em;">ZONA DE <br>CARDIO</h1>
						<div style="width: 15%;height: 5%;background-color: #f5c614;">.</div>
			            <br><br>
			            <h3 class="textoBold">El cardio y la pérdida de peso</h3>
			            <br>
						<p>Hacer cardio nos ayuda a quemar calorías rápidamente y acelera nuestro metabolismo. Además, si acompañamos nuestra rutina de ejercicio con una buena alimentación nuestra pérdida de peso será sostenida y muy difícilmente recuperaremos las libras que ya perdimos.</p>					
					</div>				
				</div>
				<div class="col-6 sobreponer">
					<div class="imagen-background col-12">
			            <img loading="lazy" src="<?php echo RUTA_IMG;?>fondos/portada-zona-cardio.jpg" class="imagen">
			        </div> 
			        <div class="texto-contenido5a col-7 anime-2a">
			            <img loading="lazy" src="<?php echo RUTA_IMG;?>fondos/circle3.png" class="imagen">
			        </div>	
			        <div class="texto-contenido2c col-2 anime-2b" style="top:10em;">
			            <img loading="lazy" src="<?php echo RUTA_IMG;?>fondos/equis2.png" class="imagen">
			        </div>
			        <div style="width: 100%;height: 1em;background-color: #f5c614;bottom: 0; position: absolute;"></div>
				</div>		    
			</div>
		</div>
		<?php //seccion portada moviles ?>
	    <div class="d-block d-sm-none">
			<img loading="lazy" src="<?php echo RUTA_IMG;?>fondos/zona-cardio-m.jpg" class="imagen">
	        <div class="row anime-1a categorias">
	            <div class="col-1"></div>
	            <div class="col-10">
	            	<br><br>
	                <h1 class="textoBlack" align="left">ZONA DE CARDIO</h1>
	                <hr>
	            </div>  
	        </div>
		</div>
		<?php //maquinas pc ?>	
		<div class="col-12 anime-3a d-none d-sm-block row" style="background-position:right;background-size: cover;background-attachment: fixed;background-image:url(<?php echo RUTA_IMG;?>fondos/zona-cardio2.jpg);">
			<div class="col-10" align="center">
				<br><br><br>
				<h1 class="textoBlack">COMIENZA DESPACIO</h1>
				<br><br>
			</div>
			<div class="col-12 row">
				<div class="col-3"></div>
				<a class="col-2" target="_blank" href="<?php echo RUTA_INSTALACIONES_CARDIO; ?>1.jpg">
					<div class="boxed col-12" style="background-image:url(<?php echo RUTA_INSTALACIONES_CARDIO; ?>1.jpg);height: 30vh;"></div>
				</a>
				<div class="col-1"></div>
				<a class="col-2" target="_blank" href="<?php echo RUTA_INSTALACIONES_CARDIO; ?>2.jpg">
					<div class="boxed col-12" style="background-image:url(<?php echo RUTA_INSTALACIONES_CARDIO; ?>2.jpg);height: 30vh;"></div>
				</a>
				<div class="col-1"></div>
				<a class="col-2" target="_blank" href="<?php echo RUTA_INSTALACIONES_CARDIO; ?>3.jpg">
					<div class="boxed col-12" style="background-image:url(<?php echo RUTA_INSTALACIONES_CARDIO; ?>3.jpg);height: 30vh;"></div>
				</a>
			</div>
			<div class="col-12 row">
				<div class="col-3"></div>
				<div class="col-2">					
					<div class="col-12" align="center">
						<br><br>
						<h3 class="textoBold">Bicicletas</h3>
						<br>
						<p>
							Ofrecen un gran entrenamiento cardiovascular que es generalmente suave y liso, pero también puede ser muy exigente, especialmente cuando la resistencia de pedaleo se fija a un nivel muy alto.
						</p>
					</div>
				</div>
				<div class="col-1"></div>
				<div class="col-2">
					<div class="col-12" align="center">
						<br><br>
						<h3 class="textoBold">Caminadoras</h3>
						<br>
						<p>
							Son una excelente alternativa para ejercitarse. Por su facilidad de práctica, cuidado del cuerpo y resultados, son el aliado perfecto para estar en forma, tonificar el cuerpo, trabajar las piernas, los glúteos y el abdomen.
						</p>
					</div>
				</div>
				<div class="col-1"></div>
				<div class="col-2">
					<div class="col-12" align="center">
						<br><br>
						<h3 class="textoBold">Elípticas</h3>
						<br>
						<p>
							Estas máquinas causan menos impacto en las articulaciones y permiten realizar trabajos aeróbicos que fortalecerán musculos de las piernas como los cuádriceps, los isquiotibiales y los glúteos.
						</p>
					</div>
				</div>
				<div class="col-12 row">
					<div class="col-12"><br><br></div>
					<div class="col-3"></div>
					<a class="col-4" target="_blank" href="<?php echo RUTA_INSTALACIONES_CARDIO; ?>4.jpg">
						<div class="boxed col-12" style="background-image:url(<?php echo RUTA_INSTALACIONES_CARDIO; ?>4.jpg);height: 50vh;"></div>
					</a>
					<div class="col-4" style="padding-left: 2em;">
						<br>
						<h2 class="textoBold">Entrena todo tu abdomen en un solo espacio</h2>
						<p>Los abdominales son un grupo muscular que se encuentra en la zona media del cuerpo y condiciona gran parte de nuestros movimientos. Trabajar esta zona afecta indirectamente al resto del cuerpo y mejora, por ejemplo, nuestra postura corporal, ayuda a prevenir lesiones, dolores y molestias.</p>
					</div>
				</div>
				<?php include_once 'seccion/enviar-mensaje.inc.php';?>			
			</div>
		</div>
		<?php //maquinas movil ?>
		<div class="col-12 d-block d-sm-none row" align="center">
			<div class="col-12">
				<div class="col-12">
					<a class="modal-trigger"  href="#plan1">
						<div class="boxed col-3" style="background-image:url(<?php echo RUTA_INSTALACIONES_CARDIO; ?>1.jpg);"></div>
					</a>
					<a class="modal-trigger"  href="#plan2">
						<div class="boxed col-3" style="background-image:url(<?php echo RUTA_INSTALACIONES_CARDIO; ?>2.jpg);"></div>
					</a>
					<a class="modal-trigger"  href="#plan3">
						<div class="boxed col-3" style="background-image:url(<?php echo RUTA_INSTALACIONES_CARDIO; ?>3.jpg);"></div>
					</a>
				</div>		
			</div>
			<div class="col-12">
				<div class="col-12">
					<a class="modal-trigger"  href="#plan4">
						<div class="boxed col-9" style="background-image:url(<?php echo RUTA_INSTALACIONES_CARDIO; ?>4.jpg);"></div>
					</a>
				</div>				
			</div>
			<div class="col-12">
				<div class="col-12"><br></div>
				<div class="col-4"></div>
				<a href="<?php echo $whatsappEmpresa;?>" target="_blank" class="col-4 btn btn-principal">Enviar mensaje</a>	
				<div class="col-12"><br></div>
			</div>
		</div>
		
		<div class="anime-1 col-6">
    		<div style="background-image: url(<?php echo RUTA_IMG;?>fondos/zona-superior.jpg);">
    			<div class="filtro2"></div>
    			<div align="center" class="texto-contenido4">
    				<p class="textoBlack white-text">ZONA DE TREN SUPERIOR</p>
    				<a href="<?php echo RUTA_TREN_SUPERIOR; ?>" class=" textoBold btn btn-secundario-animado">DETALLES</a>
    			</div>
    		</div>
    	</div>
    	<div class="anime-1 col-6">
    		<div style="background-image: url(<?php echo RUTA_IMG;?>fondos/zona-inferior.jpg);">
    			<div class="filtro2"></div>
    			<div align="center" class="texto-contenido4">
    				<p class="textoBlack white-text">ZONA DE TREN INFERIOR</p>
    				<a href="<?php echo RUTA_TREN_INFERIOR; ?>" class=" textoBold btn btn-secundario-animado">DETALLES</a>
    			</div>
    		</div>
    	</div>
	</div>
</div>
<?php //body ?>

<!-- Modal Structure -->
<div id="plan1" class="modal">
	<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat" style="position: absolute;right: 5vh;">Cerrar</a>
    <div>
		<h4 class="textoBold">Bicicletas</h4>		
		<div class="boxed col-12" style="background-image:url(<?php echo RUTA_INSTALACIONES_CARDIO; ?>1.jpg);"></div>
		<p>
			Ofrecen un gran entrenamiento cardiovascular que es generalmente suave y liso, pero también puede ser muy exigente, especialmente cuando la resistencia de pedaleo se fija a un nivel muy alto.
		</p>
		<br>
		<a href="<?php echo $whatsappEmpresa;?>" target="_blank" class="btn btn-principal">Enviar mensaje</a>
		<?php include 'seccion/redes-sociales.inc.php';?>	
    </div>
</div>
<div id="plan2" class="modal">
	<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat" style="position: absolute;right: 5vh;">Cerrar</a>
    <div>
		<h4 class="textoBold">Caminadoras</h4>		
		<div class="boxed col-12" style="background-image:url(<?php echo RUTA_INSTALACIONES_CARDIO; ?>2.jpg);"></div>
		<p>
			Son una excelente alternativa para ejercitarse. Por su facilidad de práctica, cuidado del cuerpo y resultados, son el aliado perfecto para estar en forma, tonificar el cuerpo, trabajar las piernas, los glúteos y el abdomen.
		</p>
		<br>
		<a href="<?php echo $whatsappEmpresa;?>" target="_blank" class="btn btn-principal">Enviar mensaje</a>
		<?php include 'seccion/redes-sociales.inc.php';?>	
    </div>
</div>
<div id="plan3" class="modal">
	<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat" style="position: absolute;right: 5vh;">Cerrar</a>
    <div>
		<h4 class="textoBold">Elípticas</h4>		
		<div class="boxed col-12" style="background-image:url(<?php echo RUTA_INSTALACIONES_CARDIO; ?>3.jpg);"></div>
		<p>
			Estas máquinas causan menos impacto en las articulaciones y permiten realizar trabajos aeróbicos que fortalecerán musculos de las piernas como los cuádriceps, los isquiotibiales y los glúteos.
		</p>
		<br>
		<a href="<?php echo $whatsappEmpresa;?>" target="_blank" class="btn btn-principal">Enviar mensaje</a>
		<?php include 'seccion/redes-sociales.inc.php';?>	
    </div>
</div>

<div id="plan4" class="modal">
	<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat" style="position: absolute;right: 5vh;">Cerrar</a>
    <div>
		<h4 class="textoBold">Entrena todo tu abdomen en un solo espacio</h4>		
		<div class="boxed col-12" style="background-image:url(<?php echo RUTA_INSTALACIONES_CARDIO; ?>4.jpg);"></div>
		<p>
			Los abdominales son un grupo muscular que se encuentra en la zona media del cuerpo y condiciona gran parte de nuestros movimientos. Trabajar esta zona afecta indirectamente al resto del cuerpo y mejora, por ejemplo, nuestra postura corporal, ayuda a prevenir lesiones, dolores y molestias.
		</p>
		<br>
		<a href="<?php echo $whatsappEmpresa;?>" target="_blank" class="btn btn-principal">Enviar mensaje</a>
		<?php include 'seccion/redes-sociales.inc.php';?>	
    </div>
</div>

<script src="<?php echo RUTA_JS; ?>lightbox-plus-jquery.min.js"></script>
<?php
include_once 'seccion/redes-sociales.inc.php';
include_once 'seccion/doc-terminacion.inc.php';
?>
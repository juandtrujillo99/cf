<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';

$titulo = "Protocolos de bioseguridad";

include_once 'seccion/cabecera-inicio.inc.php';
?>
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>sobreponer.css">
<?php
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
include_once 'seccion/bioseguridad/portada.inc.php';
include_once 'seccion/bioseguridad/cuestionario-covid.inc.php';
?>

<?php //body ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-12 d-block d-sm-none">
			<img loading="lazy" src="<?php echo RUTA_IMG;?>fondos/protocolos-m.jpg" class="imagen">
		</div>
		<?php //cuestionario covid movil ?>
	    <div class="d-block d-sm-none">
	        <div class="row">       
	            <div class="col-12"><br><br></div>
	            <div class="col-1"></div>
	            <div class="col-10">
	                <h4>
	                    Hola Champion, por disposición legal necesitamos que respondas este cuestionario para validar tu ingreso, recuerda que también debes tener tu pasaporte digital renovado, gracias por pertenecer a nuestra familia.
	                </h4>
	                <br>
	                <a href="http://bit.ly/CuestionarioRiesgoCOVID-19" target="_blank" class="textoBold btn btn-principal-animado">abrir cuestionario</a>
	                <br><br>
	            </div>
	            <div class="col-12"><br><hr><br></div>
	        </div>
	    </div>
		<div id="protocolos" class="row">
			<div class="row">
				<div class="col-1"></div>
				<div class="col-10">
					<div class="col-12">
						<br><br>
						<h3 class="textoBlack d-block d-sm-none" align="center">PROTOCOLOS DE BIOSEGURIDAD</h3>
						<br>
					</div>
					<div class="col-12 row">
						<div class="col-sm-4">
							<div class="col-12">
					        	<div class="anime-1 col-12">
					        		<div align="center">
					        			<img src="<?php echo RUTA_IMG;?>iconos/agenda.png" class="imagen-2">
					        			<div class="texto-contenido5">
					        				<p class="textoBook">La cantidad de personas será limitada para evitar aglomeraciones. Por eso, el horario y día de entrenamiento deben ser agendados previamente.</p>
					        			</div>
					        		</div>
					        	</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="col-12">
					        	<div class="anime-1 col-12">
					        		<div align="center">
					        			<img src="<?php echo RUTA_IMG;?>iconos/calzado.png" class="imagen-2">
					        			<div class="texto-contenido5">
					        				<p class="textoBook">Higieniza tu calzado en el tapete especial que se encuentra ubicado en la entrada.</p>
					        			</div>
					        		</div>
					        	</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="col-12">
					        	<div class="anime-1 col-12">
					        		<div align="center">
					        			<img src="<?php echo RUTA_IMG;?>iconos/temperatura.png" class="imagen-2">
					        			<div class="texto-contenido5">
					        				<p class="textoBook">Al ingresar se hará control de temperatura por medio de termometro digital; se debe tener en cuenta que si tiene una temperatura mayor a 37.8 no estará autorizado para ingresar al gimnasio.</p>
					        			</div>
					        		</div>
					        	</div>
							</div>
						</div>
					</div>
					<div class="col-12 row">
						<div class="col-sm-4">
							<div class="col-12">
					        	<div class="anime-1 col-12">
					        		<div align="center">
					        			<img src="<?php echo RUTA_IMG;?>iconos/aseo.png" class="imagen-2">
					        			<div class="texto-contenido5">
					        				<p class="textoBook">El aseo general y desinfección de las máquinas e implementos será realizado 3 veces al día.</p>
					        			</div>
					        		</div>
					        	</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="col-12">
					        	<div class="anime-1 col-12">
					        		<div align="center">
					        			<img src="<?php echo RUTA_IMG;?>iconos/distanciamiento.png" class="imagen-2">
					        			<div class="texto-contenido5">
					        				<p class="textoBook">En Champions Fit respetamos el distanciamiento social permitido que es mínimo de 2 metros.</p>
					        			</div>
					        		</div>
					        	</div>
							</div>
						</div>				
						<div class="col-sm-4">
							<div class="col-12">
					        	<div class="anime-1 col-12">
					        		<div align="center">
					        			<img src="<?php echo RUTA_IMG;?>iconos/hidratacion.png" class="imagen-2">
					        			<div class="texto-contenido5">
					        				<p class="textoBook">Por tu seguridad y la nuestra, se desactivaron los bebederos y duchas; por favor trae tu propia hidratación.</p>
					        			</div>
					        		</div>
					        	</div>
							</div>
						</div>
					</div>
					<div class="col-12 row">
						<div class="col-sm-4">
							<div class="col-12">
					        	<div class="anime-1 col-12">
					        		<div align="center">
					        			<img src="<?php echo RUTA_IMG;?>iconos/manos.png" class="imagen-2">
					        			<div class="texto-contenido5">
					        				<p class="textoBook">Limpia bien tus manos con agua y jabón, o alcohol en gel al 70%. Por favor al toser o estornudar cubre tu nariz y boca con los brazos o un pañuelo desechable. Evita el contacto físico y no compartas tus objetos personales en la hora de entreno.</p>
					        			</div>
					        		</div>
					        	</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="col-12">
					        	<div class="anime-1 col-12">
					        		<div align="center">
					        			<img src="<?php echo RUTA_IMG;?>iconos/toalla.png" class="imagen-2">
					        			<div class="texto-contenido5">
					        				<p class="textoBook">El uso de toalla y el desinfectante es obligatorio.</p>
					        			</div>
					        		</div>
					        	</div>
							</div>
						</div>				
						<div class="col-sm-4">
							<div class="col-12">
					        	<div class="anime-1 col-12">
					        		<div align="center">
					        			<img src="<?php echo RUTA_IMG;?>iconos/tapabocas.png" class="imagen-2">
					        			<div class="texto-contenido5">
					        				<p class="textoBook">Por decreto gubernamental en nuestras instalaciones el uso de tapabocas es obligatorio.</p>
					        			</div>
					        		</div>
					        	</div>
							</div>
						</div>
					</div>
					<div class="col-12 row">
						<div class="col-sm-4">
							<div class="col-12">
					        	<div class="anime-1 col-12">
					        		<div align="center">
					        			<img src="<?php echo RUTA_IMG;?>iconos/dispensadores.png" class="imagen-2">
					        			<div class="texto-contenido5">
					        				<p class="textoBook">Ubicamos dispensadores con gel antibacterial en varios puntos de Champions Fit para tu seguridad.</p>
					        			</div>
					        		</div>
					        	</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="col-12">
					        	<div class="anime-1 col-12">
					        		<div align="center">
					        			<img src="<?php echo RUTA_IMG;?>iconos/desinfectante.png" class="imagen-2">
					        			<div class="texto-contenido5">
					        				<p class="textoBook">Limpia antes y después las máquinas e implementos usados con los desinfectantes que tenemos disponibles en cada piso.</p>
					        			</div>
					        		</div>
					        	</div>
							</div>
						</div>				
						<div class="col-sm-4">
							<div class="col-12">
					        	<div class="anime-1 col-12">
					        		<div align="center">
					        			<img src="<?php echo RUTA_IMG;?>iconos/fuerte.png" class="imagen-2">
					        			<div class="texto-contenido5">
					        				<p class="textoBook">Nuestra principal motivación es cuidar tu salud. ¡Juntos somos más fuertes!</p>
					        			</div>
					        		</div>
					        	</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="d-none d-sm-block">
		<div class="col-12"><br><br><br></div>
		<div class="row">
			<div class="col-1"></div>
			<div class="col-6 row" style="background-color:#f5c614;">
				<div class="col-1"></div>
				<div class="col-10">
					<br><br><br><br>
					<h3 class="textoBlack" style="font-size: 2.5em;">
						SACA TU<br>
						PASAPORTE<br>
						SANITARIO DIGITAL
					</h3>
					<br><br>
					<div align="left" style="width: 8em;height: .5em;background-color: #fff;">.</div>
					<br><br>
					<h4>
						Recuerda que para poder ingresar a nuestras instalaciones debes tener vigente tu pasaporte sanitario digital.
					</h4>
					<br>
					<a href="<?php echo RUTA_PROTOCOLOS_PASAPORTE; ?>" class=" textoBold btn btn-secundario-animado">sacar pasaporte</a>
					<br><br>
				</div>
			</div>
			<div class="col-4" align="center">
				<img loading="lazy" src="<?php echo RUTA_IMG;?>fondos/psd.jpg" class="imagen">
			</div>
		</div>
	</div>
	<?php //sacar pasaporte movil ?>
	<div class="d-block d-sm-none">
		<div class="row">		
			<div class="col-12"><br><hr><br></div>
			<div class="col-1"></div>
			<div class="col-10">
				<h3 class="textoBlack">
					SACA TU<br>
					PASAPORTE<br>
					SANITARIO DIGITAL
				</h3>
				<br><br>
				<h4>
					Recuerda que para poder ingresar a nuestras instalaciones debes tener vigente tu pasaporte sanitario digital.
				</h4>
				<br>
				<a href="<?php echo RUTA_PROTOCOLOS_PASAPORTE; ?>" class=" textoBold btn btn-principal-animado">sacar pasaporte</a>
				<br><br>
			</div>
			<div class="col-12" align="center" style="background-color:#f5c614;">
				<br><br>
				<img loading="lazy" src="<?php echo RUTA_IMG;?>fondos/psd.jpg" class="imagen-2">
				<br><br><br>
			</div>
			<div class="col-12"><br><hr><br></div>
		</div>
	</div>
</div>

<?php
include_once 'seccion/redes-sociales.inc.php';
 //body ?>
<br><br><br>
<?php
include_once 'seccion/doc-terminacion.inc.php';
?>
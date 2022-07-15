<div id="acercade" class="col-12 row">
	<div class="col-6 row">
		<div class="col-2"></div>
		<div class="col-8 d-none d-sm-block">
			<br><br>
			<h2 align="left" class="textoBlack">ACERCA DE <br>CHAMPIONS FIT</h2>
			<p>Trabajamos con el propósito de mejorar la salud física y mental de las personas, para elevar sus defensas, liberarlos del estrés y que se sientan más fuertes y felices.</p>
			<br><br>
			<h5 class="textoBlack">Dirección:</h5>
			<a class="black-text" href="<?php echo $ubicacionEmpresa;?>" target="_blank">
				<p>
					<?php echo $direccionEmpresa1;?><br>
					Barrio: <?php echo $direccionEmpresa2;?>
				</p>
			</a>
			<br><br>
			<h5 class="textoBlack">Teléfono:</h5>
			<a href="<?php echo $whatsappEmpresa;?>" target="_blank">
				<p class="black-text" style="display: inline-block;"><?php echo $telefonoEmpresa;?></p>
			</a>
			<br><br><br>
			<h5 class="textoBlack">Horario de atención:</h5>
			<p>
				<b>Lunes a Viernes</b><br>
				5am - 9pm<br><br>
				<b>Sábados</b><br>
				9am - 2pm
			</p>		
		</div>
		<div class="d-none d-sm-block" style="width: 100%;height: 1em;background-color: #f5c614;bottom: 0; position: absolute;"></div>
	</div>
	<div class="col-6 sobreponer d-none d-sm-block">
		<div class="imagen-background col-12">
            <img loading="lazy" src="<?php echo RUTA_IMG;?>fondos/informacion.jpg" class="imagen">
        </div> 
        <div class="texto-contenidob" align="right">
            <p class="textoBlack white-text" style="font-size: 4em;line-height: 1.2em;">Información <br>de contacto</p>
            <br>
            <h4 class="textoBlack white-text">¿Cómo comunicarse con nosotros?</h4>
        </div>
	</div>
</div>

<?php //moviles?>
<div id="acercade-m" class="col-12 d-block d-sm-none row" style="background-position:right;background-size: cover;background-attachment: fixed;background-image:url(<?php echo RUTA_IMG;?>fondos/acercade-m.jpg);">
	<div class=" anime-1 row">		
		<div class="col-1">.</div>
		<div class="row col-10">
			<div align="left" class="col-12 row">
				<div class="col-12 white-text">
					<br><br><br>
					<h2 align="left" class="textoBlack">INFORMACIÓN</h2>
					<br>
					<p class="textoBold">Dirección:</p>
				</div>
				<div class="col-12 white-text">
    				<a class=" white-text" href="<?php echo $ubicacionEmpresa;?>" target="_blank">
	    				<h3 class="textoBlack"><?php echo $direccionEmpresa1;?></h3>
	    				<p>Barrio: <?php echo $direccionEmpresa2;?></p>
	    			</a>
    				<br><br>
				</div>     				
				<div class="col-12 white-text">
					<p class="textoBold">Teléfono:</p>
					<a href="<?php echo $whatsappEmpresa;?>" target="_blank">
    					<h3 class="textoBlack white-text" style="display: inline-block;"><?php echo $telefonoEmpresa;?></h3>
    				</a>
    				<br><br><br>
    			</div>			
    			<div class="col-12 white-text">
					<p class="textoBold">Horario de atención:</p>
				</div>
    			<div class="col-12 row white-text">
					<div class="col-6">
	    				<p>Lunes a Viernes</p>
	    				<h4 class="textoBlack">5am - 9pm</h4>
	    				<br>
    				</div>
    				<div class="col-6">
	    				<p>Sábados</p>
	    				<h4 class="textoBlack">9am - 2pm</h4>
	    				<br><br>
	    			</div>
    			</div>
    			<div class="col-12 white-text">
					<p class="textoBold">Somos Champions</p>
					<p>
						Ven y entrena en nuestras instalaciones,
						3 pisos equipados con todo lo que necesitas para
						llevar tu entrenamiento a otro nivel.
						<br><br>
					</p>
				</div>
				<div class="col-12">
					<a href="<?php echo RUTA_MEMBRESIA; ?>" class="textoBold white-text btn btn-secundario">Ver planes</a>
					<br>
				</div>
				<div class="col-12 white-text"><br></div>
    			<div class="col-12" align="center">
    				<div class="social">
    					<p class="textoBold white-text">Social</p>
						<a href="<?php echo $facebookEmpresa;?>" target="_blank"><i class="fab white-text fa-facebook-square"></i></a>
						<a href="<?php echo $instagramEmpresa;?>" target="_blank"><i class="fab white-text fa-instagram"></i></a>
						<a href="<?php echo $whatsappEmpresa;?>" target="_blank"><i class="fab white-text fa-whatsapp"></i></a>
					</div>
				</div>
				<div class="col-12 white-text"><br><br></div>
			</div>
		</div>
	</div>
</div>




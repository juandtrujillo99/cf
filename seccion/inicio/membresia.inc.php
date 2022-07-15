<div id="acercade" class="section col-12 row d-none d-sm-block">
	<div class="imagen-background anime-3"><?php //barra amarilla del lado izquierdo?>
        <div class="paralelograma" style="background:#f5c614;width: 15%;"></div>	            
    </div>
    <div class="imagen-background" align="right">
        <img loading="lazy" src="<?php echo RUTA_IMG;?>fondos/bg1a.png" class="imagen anime-4a">
    </div>
    <div class="texto-contenido3">
        <a class="white-text" href="<?php echo $ubicacionEmpresa;?>" target="_blank"><h3 class="textoBlack"><?php echo $direccionEmpresa1;?></h3></a>
        <p class="textoBook"><?php echo $direccionEmpresa2;?></p>
    </div>
    <div class="black-text texto-contenido2 anime-1">
    	<div class="col-12 row">
    		<div class="col-5"></div>
    		<div class="col-7">
    			<div class="col-11">
        			<div class="col-12">
        				<br><br>
	        			<h1 class="textoBlack">MEMBRESIA CHAMPIONS FIT</h1>
	        			<hr>
	        		</div>	        		
		       		<div class="black-text col-12 row">
	    				<p class="textoBold col-12">Horario de atención:<br><br></p>
		       			<div class="col-12">
		    				<p>Lunes a Viernes</p>
		    				<h3 class="textoBlack">5am - 9pm</h3>
		    			</div>
		    			<div class="col-12">
		    				<p>Sábados</p>
		    				<h3 class="textoBlack">9am - 1pm</h3>	
		    			</div> 				
			        </div>      
        			<div class="col-12">
        				<br>
	            		<p class="black-text col-10">
	            			Te ayudamos a fijar tus metas y objetivos.
	            			<br>
	            			Lleva tu entrenamiento al máximo con nosotros. Champions Fit es el gimnasio hecho a tu medida.
	            			<br><br>
	            		</p>
			        </div>
		            <a href="<?php echo RUTA_MEMBRESIA; ?>" class="textoBold btn btn-principal">INSCRIBIRSE</a>
	            </div>
    		</div>
    	</div>
    </div>
</div>


<?php //moviles?>
<div id="acercade-m" class="row d-block d-sm-none">
	<div class="col-12 row">
		<div class="anime-1 row">
    		<div class="section row" style="background-image: url(<?php echo RUTA_IMG;?>fondos/acercade-m.jpg); background-size: cover;">
    			<div class="filtro2"></div>
    			<div align="center" class="col-12 row texto-contenido2">
    				<div class="col-12">
    					<br><br>
						<h1 align="center" class="textoBlack">ACERCA DE</h1>
						<br><br>
						<p class="textoBold white-text">Horario de atención:</p>
    				</div>
    				<div class="col-12 row">
    					<div class="col-6">
		    				<p class="white-text">Lunes a Viernes</p>
		    				<h3 class="textoBlack white-text">5am - 9pm</h3>
		    				<br>
	    				</div>
	    				<div class="col-6">
		    				<p class="white-text">Sábados</p>
		    				<h3 class="textoBlack white-text">9am - 1pm</h3>
		    				<br>
		    			</div>
	    			</div>
	    			<div class="col-12">
    					<p class="textoBold white-text">Dirección:</p>
    				</div>
	    			<div class="col-12">
	    				<h3 class="textoBlack white-text"><?php echo $direccionEmpresa1;?></h3>
	    				<p class="white-text">Barrio: <?php echo $direccionEmpresa2;?></p>
	    				<br>
    				</div>
    				<div class="col-12">
						<p class="textoBold white-text">Teléfono</p>
	    				<h3 class="textoBlack white-text" style="display: inline-block;"><?php echo $telefonoEmpresa;?></h3>
	    				<br><br>
	    			</div>
	    			<div class="col-12">
	    				<div class="social">
	    					<p class="textoBold white-text">Social</p>
							<a href="<?php echo $facebookEmpresa;?>" target="_blank"><i class="white-text fab fa-facebook-square"></i></a>
							<a href="<?php echo $instagramEmpresa;?>" target="_blank"><i class="white-text fab fa-instagram"></i></a>
							<a href="<?php echo $whatsappEmpresa;?>" target="_blank"><i class="white-text fab fa-whatsapp"></i></a>
						</div>
					</div>
    			</div>
    		</div>
    	</div>
	</div>
</div>






<?php /*



<div id="membresia" class="section col-sm-12">
	<div class="hidden-xs">
		<div class="imagen-background anime-3"><?php //barra amarilla del lado izquierdo?>
	        <div class="paralelograma" style="background:#f5c614;width: 15%;"></div>	            
	    </div>
		<div class="imagen-background" align="right">
	        <img loading="lazy" src="<?php echo RUTA_IMG;?>fondos/bg1a.png" class="imagen anime-4a">
	    </div>
	    <div class="texto-contenido2 anime-1">
	    	<div class="col-sm-12">
	    		<div class="col-sm-3"></div>
	    		<div class="col-sm-4">
	    			<div class="col-sm-8">
	        			<div class="col-sm-12">
		        			<h1 class="textoBlack">MEMBRESIA CHAMPIONS FIT</h1>
		        			<hr>
		        		</div>
	        			<div class="col-sm-12">
				            <h2 class="textoBold">¡LOGRA LA META DE VERTE Y SENTIRTE BIEN!</h2>
				            <br>
				        </div>				        
	        			<div class="col-sm-12">
		            		<p class="col-sm-10">
		            			Te ayudamos a fijar tus metas y objetivos.
		            			<br>
		            		</p>	            		
				        </div>    
	        			<div class="col-sm-12">
		            		<p class="col-sm-10">
		            			Te creamos una rutina de entrenamiento hecha a tu medida.
		            			<br><br><br>
		            		</p>
				        </div>
			            <a href="<?php echo RUTA_MEMBRESIA; ?>" class="textoBold boton-ver-mas">INSCRIBIRSE</a>
		            </div>
	    		</div>
	    	</div>
	    </div>
	    <div class="texto-contenido3 anime-2">
	        <p class="textoBold">Mensualidad desde</p>
	    	<h1 class="textoBlack">$50.000</h1>
	    </div>
    </div>
    <?php //seccion promocion membresia moviles ?>
	<div class="visible-xs col-xs-12">
		<div class="imagen-background-m" style="background-image: url(https://images.unsplash.com/photo-1578762838985-8dccd64b6ebf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80);">
			<div class="texto-contenido-m">
	            <h1 class="textoBold">MEMBRESIA CHAMPIONS FIT</h1>
	            <div class="precio">
	            	<hr>
	            	<p>Mensualidad desde</p>
	            	<h3 class="textoBold">$50.000</h3>
	            	<hr>
	            </div>
	            <p class="textoBook">
	            	Logra la meta de verte y sentirte bien.
	            	<br><br>
	    			Te ayudamos a fijar tus metas y objetivos.
	    			<br><br>
	    			Te creamos una rutina de entrenamiento hecha a tu medida.
	    			<br><br><br>
	    		</p>	            
	            <a href="#" class="textoBold boton-ver-mas2">DETALLES</a>
	        </div>        
	    </div>        
	</div>
</div>

*/
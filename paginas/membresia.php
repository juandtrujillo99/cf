<?php



include_once 'app/config.inc.php';

include_once 'app/Conexion.inc.php';



$titulo = 'Membresia '.$nombreEmpresa ;



include_once 'seccion/cabecera-inicio.inc.php';

?>

<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>aparecer.css">

<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>sobreponer.css">

<?php

include_once 'seccion/cabecera-cierre.inc.php';

include_once 'seccion/doc-navbar.inc.php';

?>



<?php //body ?>

<div id="membresia" class="col-12 row">
	<div class="imagen-background anime-3 d-none d-sm-block"><?php //barra negra de arriba?>
		<div style="background:#000;width: 100%;height: 50%;"></div>
	</div>

    <div class="col-2 row encima" style="right: 43vh;top: 5vh;"><?php //3 barras en diagonal?>   

        <div class="col-2 paralelograma2a d-none d-sm-block"></div>

	    <div class="col-1"></div>

	    <div class="col-2 paralelograma2a d-none d-sm-block"></div>

	    <div class="col-1"></div>

	    <div class="col-2 paralelograma2a d-none d-sm-block"></div>

    </div>

    <div class="imagen-background d-none d-sm-block" style="width: 30%;right: 15vh; top: 10vh; position: absolute;">

        <img loading="lazy" src="<?php echo RUTA_IMG;?>fondos/membresia.jpg" class="imagen anime-1">

    </div> 

    <div class="col-2 row encima d-none d-sm-block" style="right: 5vh;top: 80vh;background:rgba(245,198,20,.5);width: 10em;height:10em;">	  

    </div>

    <div>

    	<div class="col-12 row">

    		<div class="col-1"></div>

    		<div class="col-11 col-md-5">

    			<div class="col-12 row">
    				<h1 class="col-12 textoBlack" style="color: #f5c614; margin-top: 1em;">ADQUIERE LA</h1>

        			<h1 class="col-12 textoBlack" style="margin-top: -.6em;padding-left: 1.5em;color:black;text-shadow: .02em  0px 0px  white, 0px  .02em 0px  white, -.02em  0px 0px  white, 0px -.02em 0px white;">MEMBRESÍA</h1>

					<div class="col-12 d-block d-sm-none">		

						<br>  	

					    <img loading="lazy" src="<?php echo RUTA_IMG;?>fondos/membresia-m.jpg" class="imagen">

					</div>

        			<p class="col-10 col-md-9 d-none d-sm-block white-text">

        				<br>

            			¿Quieres perder esos kilos de más? ¿Ganar masa muscular? ¿Mejorar tu tonificación e hipertrofia?

            			Sea cual sea tu objetivo, conseguirás mejorar tu figura según tus metas en nuestras instalaciones.

            			<br><br><br><br>

            		</p>

            		<p class="col-10 col-md-9 d-block d-sm-none">

        				<br>

            			¿Quieres perder esos kilos de más? ¿Ganar masa muscular? ¿Mejorar tu tonificación e hipertrofia?

            			Sea cual sea tu objetivo, conseguirás mejorar tu figura según tus metas en nuestras instalaciones.

            			<br><br>

            		</p>

            	</div>	

    		</div>

    	</div>

    </div>

	<div class="black-text row">

    	<div class="col-12 row">

    		<div class="col-1"></div>

    		<div class="col-10 col-md-6">

    			<div class="col-12 row" style="text-transform:uppercase;">

    				<div class="col-12 d-block d-sm-none"><hr></div>

    				<div class="col-12 d-block d-sm-none"><br><br></div>

        			<h2 class="textoBlack col-12">NUESTROS PLANES</h2>

        			<div class="col-12"><br><br></div>

        			<div class="row">

	        			<div class="col-11 row col-md-3">

	        				<div class="col-7 col-md-12">

	        					<h5 class="textoBold">Plan Salud <br>x 30 días</h5>

	        					<p>$69.999</p>

	        					<div class="d-block d-sm-none"><br><br></div>

	        				</div>

	        				<div class="col-1 d-block d-sm-none"></div>

	        				<div class="col-4">

		        				<a class="btn btn-secundario modal-trigger" href="#plan1">Detalle</a>

		        			</div>

	            		</div>

	            		<div class="col-1"></div>

	        			<div class="col-11 row col-md-3">

	        				<div class="col-7 col-md-12">

	        					<h5 class="textoBold">Plan Amigos, Pareja, Familia</h5>

	        					<p>$59.999</p>	        				

	        					<div class="d-block d-sm-none"><br><br></div>

	        				</div>

	        				<div class="col-1 d-block d-sm-none"></div>

	        				<div class="col-4">

		        				<a class="btn btn-secundario modal-trigger" href="#plan2">Detalle</a>

		        			</div>

	            		</div>

	            		<div class="col-1"></div>

	        			<div class="col-11 row col-md-3">

	        				<div class="col-7 col-md-12">

	        					<h5 class="textoBold">Valera x 15 Entradas</h5>

	        					<p>$49.999</p>

	        				</div>

	        				<div class="col-1 d-block d-sm-none"></div>

	        				<div class="col-4">

		        				<a class="btn btn-secundario modal-trigger" href="#plan3">Detalle</a>

		        			</div>

	            		</div>

            		</div>

            		<div class="col-12"><br><br></div>

            		<div class="row">

	        			<div class="col-11 row col-md-3">

	        				<div class="col-7 col-md-12">

	        					<h5 class="textoBold">PLan Happy Hour</h5>

	        					<p>$54.999</p>

	        					<div class="d-block d-sm-none"><br><br></div>

	        				</div>

	        				<div class="col-1 d-block d-sm-none"></div>

	        				<div class="col-4">

		        				<a class="btn btn-secundario modal-trigger" href="#plan5">Detalle</a>

		        			</div>

	            		</div>

	            		<div class="col-1"></div>

	        			<div class="col-11 row col-md-3">

	        				<div class="col-7 col-md-12">

	        					<h5 class="textoBold">Plan Adulto Mayor</h5>

	        					<p>$59.999</p>	        				

	        					<div class="d-block d-sm-none"><br><br></div>

	        				</div>

	        				<div class="col-1 d-block d-sm-none"></div>

	        				<div class="col-4">

		        				<a class="btn btn-secundario modal-trigger" href="#plan6">Detalle</a>

		        			</div>

	            		</div>

	            		<div class="col-1"></div>

	        			<div class="col-11 row col-md-3">

	        				<div class="col-7 col-md-12">

	        					<h5 class="textoBold">Día de entreno</h5>

	        					<p>$10.000</p>

	        				</div>

	        				<div class="col-1 d-block d-sm-none"></div>

	        				<div class="col-4">

		        				<a class="btn btn-secundario modal-trigger" href="#plan7">Detalle</a>

		        			</div>

	            		</div>

            		</div>

            		<div class="col-12"><br><br></div>

        			<div class="row">

	        			<div class="col-11 row col-md-3">

	        				<div class="col-7 col-md-12">

	        					<h5 class="textoBold">Trimestre</h5>

	        					<p>$180.000</p>

	        					<div class="d-block d-sm-none"><br><br></div>

	        				</div>

	        				<div class="col-1 d-block d-sm-none"></div>

	        				<div class="col-4">

		        				<a class="btn btn-secundario modal-trigger" href="#plan4">Detalle</a>

		        			</div>

	            		</div>

	            		<div class="col-1"></div>

	        			<div class="col-11 row col-md-3">

	        				<div class="col-7 col-md-12">

	        					<h5 class="textoBold">Semestre</h5>

	        					<p>$300.000</p>

	        					<div class="d-block d-sm-none"><br><br></div>

	        				</div>

	        				<div class="col-1 d-block d-sm-none"></div>

	        				<div class="col-4">

		        				<a class="btn btn-secundario modal-trigger" href="#plan4">Detalle</a>

		        			</div>

	            		</div>

	            		<div class="col-1"></div>

	        			<div class="col-11 row col-md-3">

	        				<div class="col-7 col-md-12">

	        					<h5 class="textoBold">Año</h5>

	        					<p>$540.000</p>

	        					<div class="d-block d-sm-none"><br><br></div>

	        				</div>

	        				<div class="col-1 d-block d-sm-none"></div>

	        				<div class="col-4">

		        				<a class="btn btn-secundario modal-trigger" href="#plan4">Detalle</a>

		        			</div>

	            		</div>

            		</div>

        		</div>	

    		</div>

    	</div>

    </div>

</div>



<!-- Modal Structure -->

<div id="plan1" class="modal">

	<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat" style="position: absolute;right: 5vh;">Cerrar</a>

    <div>

		<h4 class="textoBold">PLAN SALUD</h4>

		<p>

			● Tu aporte al convenio con CHAMPIONS FIT de $69.999 es por el uso del espacio y máquinas para acondicionamiento personal corresponde a 30 días calendario siguientes al pago.

			<br><br>

			● Entrena sin agendamiento ni límite de ingreso.

			<br><br>

			● No hay reembolso en dinero, ni se congela el plan durante su vigencia.

			<br><br>

			● Entrena sin costos de matrícula o inscripción, ni cláusulas de permanencia.

			<br><br>

			● Por tu salud y la de los demás, si presentas algún síntoma o malestar general evitar realizar el entrenamiento.

			<br><br>

		</p>

		<a href="<?php echo $whatsappEmpresa;?>" target="_blank" class="btn btn-principal">Enviar mensaje</a>

		<?php include 'seccion/redes-sociales.inc.php';?>	

    </div>

</div>



<div id="plan2" class="modal">

	<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat" style="position: absolute;right: 5vh;">Cerrar</a>

    <div>

		<h4 class="textoBold">PLAN AMIGOS, PAREJA O FAMILIA</h4>

		<p>

			● Trae a otras personas para que entrenen contigo por $59.999 cada uno.

			<br><br>

			● El aporte al convenio con CHAMPIONS FIT es por el uso del espacio y máquinas para acondicionamiento personal corresponde a 30 días calendario siguientes al pago.

			<br><br>

			● No hay reembolso en dinero, ni se congela el plan durante su vigencia.

			<br><br>

			● Recuerda que solo dispones de un acceso diario.

			<br><br>

			● Por tu salud y la de los demás, si presentas algún síntoma o malestar general evitar realizar el entrenamiento.

			<br><br>

		</p>

		<a href="<?php echo $whatsappEmpresa;?>" target="_blank" class="btn btn-principal">Enviar mensaje</a>

		<?php include 'seccion/redes-sociales.inc.php';?>	

    </div>

</div>



<div id="plan3" class="modal">

	<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat" style="position: absolute;right: 5vh;">Cerrar</a>

    <div>

		<h4 class="textoBold">VALERA POR 15 ENTRADAS</h4>

		<p>

			● Adquiere 15 entradas para distribuirlas como quieras durante 1 mes.

			<br><br>

			● No son acumulables.

			<br><br>

			● El aporte al convenio con CHAMPIONS FIT es por el uso del espacio y máquinas para acondicionamiento personal corresponde a 30 días calendario siguientes al pago.

			<br><br>

			● No hay reembolso en dinero, ni se congela el plan durante su vigencia.

			<br><br>

			● Recuerda que tu tiempo de entrenamiento es de una hora por disposición legal.

			<br><br>

			● Por tu salud y la de los demás, si presentas algún síntoma o malestar general evitar realizar el entrenamiento.

			<br><br>

		</p>

		<a href="<?php echo $whatsappEmpresa;?>" target="_blank" class="btn btn-principal">Enviar mensaje</a>

		<?php include 'seccion/redes-sociales.inc.php';?>	

    </div>

</div>



<div id="plan4" class="modal">

	<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat" style="position: absolute;right: 5vh;">Cerrar</a>

    <div>

		<h4 class="textoBold">PROMOCIÓN</h4>

		<p>

			● Hemos aplicado un descuento especial en la membresia mensual por el pago de este plan.

			<br><br>

			● Entrena sin agendamiento ni límite de ingreso.

			<br><br>

			● El aporte al convenio con CHAMPIONS FIT es por el uso del espacio y máquinas para acondicionamiento personal.

			<br><br>

			● No hay reembolso en dinero, ni se congela el plan durante su vigencia.

			<br><br>

			● Entrena sin costos de matrícula o inscripción, ni cláusulas de permanencia.

			<br><br>

			● Por tu salud y la de los demás, si presentas algún síntoma o malestar general evitar realizar el entrenamiento.

			<br><br>

		</p>

		<a href="<?php echo $whatsappEmpresa;?>" target="_blank" class="btn btn-principal">Enviar mensaje</a>		

		<?php include 'seccion/redes-sociales.inc.php';?>

    </div>

</div>


<div id="plan5" class="modal">

	<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat" style="position: absolute;right: 5vh;">Cerrar</a>

    <div>

		<h4 class="textoBold">PLAN HAPPY HOUR</h4>

		<p>

			● Tu aporte al convenio con CHAMPIONS FIT de $54.999 es por el uso del espacio y máquinas para acondicionamiento personal corresponde a 30 días calendario siguientes al pago.

			<br><br>

			● Con este plan tienes acceso únicamente de Lunes a Viernes desde las 12pm hasta las 4pm.

			<br><br>

			● No hay reembolso en dinero, ni se congela el plan durante su vigencia.

			<br><br>

			● Entrena sin agendamiento, sin costos de matrícula o inscripción, ni cláusulas de permanencia.

			<br><br>

			● Recuerda que solo dispones de un acceso diario.

			<br><br>

			● Por tu salud y la de los demás, si presentas algún síntoma o malestar general evitar realizar el entrenamiento.

			<br><br>

		</p>

		<a href="<?php echo $whatsappEmpresa;?>" target="_blank" class="btn btn-principal">Enviar mensaje</a>		

		<?php include 'seccion/redes-sociales.inc.php';?>

    </div>

</div>


<div id="plan6" class="modal">

	<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat" style="position: absolute;right: 5vh;">Cerrar</a>

    <div>

		<h4 class="textoBold">PLAN ADULTO MAYOR</h4>

		<p>

			● Tu aporte al convenio con CHAMPIONS FIT de $54.999 es por el uso del espacio y máquinas para acondicionamiento personal corresponde a 30 días calendario siguientes al pago.

			<br><br>

			● Este plan aplica solo para personas mayores de 60 años.

			<br><br>

			● Con este plan tienes acceso desde las 5am hasta las 12 del mediodía.

			<br><br>

			● No hay reembolso en dinero, ni se congela el plan durante su vigencia.

			<br><br>

			● Entrena sin agendamiento, sin costos de matrícula o inscripción, ni cláusulas de permanencia.

			<br><br>

			● Por tu salud y la de los demás, si presentas algún síntoma o malestar general evitar realizar el entrenamiento.

			<br><br>

		</p>

		<a href="<?php echo $whatsappEmpresa;?>" target="_blank" class="btn btn-principal">Enviar mensaje</a>		

		<?php include 'seccion/redes-sociales.inc.php';?>

    </div>

</div>


<div id="plan7" class="modal">

	<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat" style="position: absolute;right: 5vh;">Cerrar</a>

    <div>

		<h4 class="textoBold">DÍA DE ENTRENO</h4>

		<p>

			● Tu aporte al convenio con CHAMPIONS FIT de $10.000 es por el uso del espacio y máquinas para acondicionamiento personal correspondinte a 1 día.

			<br><br>

			● No hay reembolso en dinero, ni se congela el plan durante su vigencia.

			<br><br>

			● Entrena sin agendamiento, sin costos de matrícula o inscripción, ni cláusulas de permanencia.

			<br><br>

			● Por tu salud y la de los demás, si presentas algún síntoma o malestar general evitar realizar el entrenamiento.

			<br><br>

		</p>

		<a href="<?php echo $whatsappEmpresa;?>" target="_blank" class="btn btn-principal">Enviar mensaje</a>		

		<?php include 'seccion/redes-sociales.inc.php';?>

    </div>

</div>



<?php

 //body ?>

<br><br><br>

<?php

include_once 'seccion/doc-terminacion.inc.php';

?>
<div class="form-register__body">
	<div class="step active" id="step-1">
		<div class="step__body">
			<h2 class="textoBlack">Únete a la comunidad <?php echo $nombreEmpresa;?></h2>
			<p>Te ayudaremos a crear una cuenta en pocos pasos.</p>
			<?php $validador -> mostrar_error_nombre();?>
			<?php $validador -> mostrar_error_cedula();?>
			<?php $validador -> mostrar_error_altura();?>	
			<?php $validador -> mostrar_error_peso();?>
			<?php $validador -> mostrar_error_porcentaje_de_grasa();?>
			<?php $validador -> mostrar_error_edad();?><br>
			<?php $validador -> mostrar_error_telefono();?><br>
			<?php $validador -> mostrar_error_email();?><br>
			<?php $validador -> mostrar_error_clave1();?><br>
			<?php $validador -> mostrar_error_clave2();?>
		</div>
		<div class="step__footer">
			<button type="button" class="step__button step__button--next btn" data-to_step="2" data-step="1">Siguiente</button>
		</div>
		<a href="<?php echo RUTA_LOGIN?>">
			<p class="textoBold center">¿Ya tienes una cuenta?</p>
		</a>
	</div>

	<div class="step" id="step-2">
		<div class="step__body">
			<p class="textoBold">
				¿Cómo te llamas?
				<?php $validador -> mostrar_error_nombre();?>
			</p>
			<input id="nombre" type="text" name="nombre" placeholder="Nombre" class="validate step__input" onkeyup="validar1()" <?php $validador -> mostrar_nombre()?>>					
			<p class="textoBold">
				Ingresa tu documento de identificación (Opcional)
				<?php $validador -> mostrar_error_cedula();?>
			</p>
			<input id="cedula" type="number" name="cedula" placeholder="Cédula o tarjeta de identidad" class="validate step__input" onkeyup="validar1()" <?php $validador -> mostrar_cedula()?>>
		</div>
		<div class="step__footer">
			<button id="boton-siguiente" type="button" class="step__button step__button--next" data-to_step="3" data-step="2">Siguiente</button>
		</div>
	</div>

	<div class="step" id="step-3">
		<div class="step__body">
			<p class="textoBold">
				¿Cuántos años tienes?
				<?php $validador -> mostrar_error_edad();?>
			</p>
			<input id="edad" type="number" name="edad" placeholder="Edad" class="step__input" onkeyup="validar2()" <?php $validador -> mostrar_edad()?>>
			<p class="textoBold">
				Ingresa tu número de celular
				<?php $validador -> mostrar_error_telefono();?>
			</p>
			<input id="telefono" type="number" name="telefono" placeholder="Teléfono" class="step__input" onkeyup="validar2()" <?php $validador -> mostrar_telefono()?>>
			<p class="textoBold">
				Ingresa tu correo electrónico
				<?php $validador -> mostrar_error_email();?>
			</p>
			<input id="email" type="email" name="email" placeholder="Email" class="step__input" onkeyup="validar2()" <?php $validador -> mostrar_email()?>>
		</div>
		<div class="step__footer">
			<button id="boton-siguiente2" disabled type="button" class="step__button step__button--next" data-to_step="4" data-step="3">Siguiente</button>
		</div>
	</div>

	<div class="step" id="step-4">
		<div class="step__body">
			<p class="textoBold">
				Elige una contraseña
				<?php $validador -> mostrar_error_clave1();?>
			</p>
			<input id="clave1"  type="password" name="clave1" placeholder="Contraseña" class="step__input" onkeyup="validar3()">
			<p class="textoBold">
				Repite contraseña
				<?php $validador -> mostrar_error_clave2();?>					
			</p>
			<input id="clave2"  type="password" name="clave2" placeholder="De nuevo contraseña" class="step__input" onkeyup="validar3()">
		</div>
		<div class="step__footer">
			<button id="boton-siguiente3" disabled type="button" class="step__button step__button--next" data-to_step="5" data-step="4">Siguiente</button>
		</div>
	</div>

	
<div class="form-register__body">
	<div class="step active" id="step-1">
		<div class="step__body">
			<div align="center"><img src="<?php echo RUTA_IMG;?>logo/1.png" class="imagen-2"><br><br></div>
			<h2 class="textoBlack">Únete a la familia Champions Fit</h2>
			<p>Te ayudaremos a crear una cuenta en pocos pasos.</p>
		</div>
		<div class="step__footer">
			<a type="button" class="step__button step__button--next btn habilitado" data-to_step="2" data-step="1">Siguiente</a>
		</div>
		<br>
		<a href="<?php echo RUTA_LOGIN?>">
			<p class="center">¿Ya tienes una cuenta?</p>
		</a>
	</div>

	<div class="step" id="step-2">
		<div class="step__body">
			<p class="textoBold">¿Cómo te llamas?</p>
			<input id="nombre" type="text" name="nombre" placeholder="Nombres" class="validate step__input" onkeyup="validar1()" required minlength="2" maxlength="25"/>
			<input id="apellido" type="text" name="apellido" placeholder="Apellidos" class="validate step__input" onkeyup="validar1()" required minlength="2" maxlength="25"/>

			<p class="textoBold">Ingresa tu documento de identificación (Opcional)</p>
			<input type="number" name="cedula" placeholder="Cédula o tarjeta de identidad" class="validate step__input cedula" onkeyup="validar1()">
		</div>
		<div class="step__footer">
			<input id="boton-siguiente" disabled type="button" value="Siguiente" class="step__button step__button--next btn" data-to_step="3" data-step="2">	
		</div>
	</div>

	<div class="step" id="step-3">
		<div class="step__body">
			<p class="textoBold">¿Cuántos años tienes?</p>
			<input id="edad" type="number" name="edad" placeholder="Edad" class="validate step__input" onkeyup="validar2()">
			<p class="textoBold">Ingresa tu número de celular</p>
			<input id="telefono" type="number" name="telefono" placeholder="Teléfono" class="validate step__input" onkeyup="validar2()">
			<p class="textoBold">Ingresa tu correo electrónico</p>
			<input id="email" type="email" name="email" placeholder="Email" class="validate step__input" onkeyup="validar2()">
		</div>
		<div class="step__footer">
			<button id="boton-siguiente2" disabled type="button" class="step__button step__button--next btn" data-to_step="4" data-step="3">Siguiente</button>
		</div>
	</div>

	<div class="step" id="step-4">
		<div class="step__body">
			<p class="textoBold">Elige una contraseña</p>
			<input id="clave1" type="password" name="clave1" placeholder="Contraseña" class="validate step__input" onkeyup="validar3()">
			<p class="textoBold">Repite contraseña</p>
			<input id="clave2" type="password" name="clave2" placeholder="De nuevo contraseña" class="validate step__input" onkeyup="validar3()">
		</div>
		<div class="step__footer">
			<button id="boton-siguiente3" disabled type="button" class="step__button step__button--next btn" data-to_step="5" data-step="4">Siguiente</button>
		</div>
	</div>
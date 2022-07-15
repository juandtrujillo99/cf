<div class="d-block d-sm-none">
	<div class="row">
		<div class="col-1"></div>
		<div class="col-10">
			<br><br>
	    	<h1 class="textoBlack" align="center">Recupera tu contraseña</h1>
	    	<br><br>
	    	<h2>Paso 1</h2>
			<p>Notifica que olvidaste tu contraseña.</p>
			<br>
			<a target="_blank" href="<?php echo $olvidePassword;?>" class="btn btn-principal">Notificar</a>
			<br><br><br>
			<h2>Paso 2</h2>
			<p>Escribe el correo electrónico con el que te registraste para enviarte la contraseña.</p>
			<form role="form" method="post" action="<?php echo RUTA_GENERAR_URL_SECRETA; ?>">
				<input type="email" name="email" id="email" placeholder="Correo" required autofocus>
				<br><br>
				<button type="submit" name="enviar_email" class="btn btn-principal-animado">Enviar</button>
			</form>		
	    </div>
    </div>
</div>
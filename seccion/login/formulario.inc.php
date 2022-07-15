<div class="texto-contenido5b">
    <div class="row" style="background-image:url(img/fondos/5a.jpg);">
    	<div class="col-md-1 col-1"></div>
    	<div class="col-md-4 d-none d-sm-block" align="center">
    		<br>
        	<img src="<?php echo RUTA_IMG;?>logo/1.png" class="imagen-2">
        	<h2 class="textoBlack">Gimnasio de campeones</h2>
        	<br>
        	<?php include 'seccion/redes-sociales.inc.php';?>
    	</div>
    	<div class="col-md-1 d-none d-sm-block"></div>
    	<div class="col-md-4 col-10">
            <div class="col-12">           	
                <div class="col-12">
                    <h3 class="d-none d-sm-block">Ingresa los siguientes datos</h3>
                    <div class="d-block d-sm-none" align="center">
                    	<img src="<?php echo RUTA_IMG;?>logo/1.png" class="imagen-2">
                    </div>
					<br>
					<form role="form" method="post" action="<?php echo RUTA_LOGIN; ?>">
						<input type="number" name="telefono" id="telefono" placeholder="Teléfono"
						<?php
						if(isset($_POST['login']) && isset($_POST['telefono']) && !empty($_POST['telefono'])){
							echo 'value="' . $_POST['telefono'] . '"';
						}
						?> required autofocus >
						<br>
						<input type="password" name="clave" id="clave" placeholder="Contraseña" required>
						<br><br>
						<?php
						if(isset($_POST['login'])){
							$validador -> mostrar_error();
						}
						?>
						<div align="center">
							<button type="submit" class="col-10 btn btn-principal" name="login">Iniciar sesión</button>
						</div>
					</form>
                </div>
                <div class="row" align="center">
					<div class="col-12"><br></div>		
					<a class="col-12" href="<?php echo RUTA_RECUPERAR_CLAVE; ?>">¿Olvidaste tu contraseña?</a>
					<div class="col-12"><br><hr><br></div>
					<div class="col-3 d-none d-sm-block"></div>
					<a class="col-md-6 col-12 btn btn-principal-animado" href="<?php echo RUTA_REGISTRO; ?>">Crear cuenta</a>
					<div class="col-12"><br><br></div>
				</div>										
            </div>
            <div class="d-block d-sm-none" align="center">
            	<?php include 'seccion/redes-sociales.inc.php';?>
            </div>            
    	</div>
    </div>
</div>
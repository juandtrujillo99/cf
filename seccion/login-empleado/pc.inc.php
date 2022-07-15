<div class="d-none d-sm-block">
    <div class="row" style="background-image:url(img/fondos/5a.jpg);">
    	<div class="col-4"></div>
    	<div class="col-6">
            <div class="col-12">	            	
                <div class="col-12">
                	<br><br>
                	<h1 align="center" class="textoBlack">Iniciar sesión como colaborador</h1>
                	<br><br>
                    <h3>Ingresa los siguientes datos.</h3>
					<br>
					<form role="form" method="post" action="<?php echo RUTA_LOGIN_EMPLEADO; ?>">
						<input type="email" name="email" id="email" placeholder="Correo"
						<?php
						if(isset($_POST['login']) && isset($_POST['email']) && !empty($_POST['email'])){
							echo 'value="' . $_POST['email'] . '"';
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
							<button type="submit" class="btn btn-principal-animado" name="login">Entrar</button>
						</div>
					</form>
                </div>
                <div class="row" align="center">
					<div class="col-12"><br><br></div>
					<a class="col-12" href="<?php echo RUTA_RECUPERAR_CLAVE_EMPLEADO; ?>">¿Olvidaste tu contraseña?</a>
					<div class="col-12"><br></div>
				</div>
				<?php include 'seccion/redes-sociales.inc.php';?>						
            </div>
    	</div>
    </div>
</div>
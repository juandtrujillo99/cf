<?php
if(ControlSesion :: sesion_iniciada() && ControlSesionEmpleado :: sesion_iniciada()) {//con inicio de sesion de usuario y empleado
	//barra de navegación lateral ?>
	<ul id="slide-out" class="side-nav">
		<li>
			<div class="user-view">
				<div class="background" style="background-color: white;">
				</div>
				<a href="<?php echo SERVIDOR;?>"><img loading="lazy" width="100%" src="<?php echo RUTA_IMG;?>logo/1.png"></a>
				<br><br>
			</div>
		</li>
		<li class="enlaces">
			<div class="container-fluid" align="center">
				<div class="row">
					<a href="<?php echo RUTA_GESTOR;?>" class="col-12">
						<div><i class="material-icons">dashboard</i><br>Panel de control</div>
					</a>
				</div>
				<div class="row">
					<a href="<?php echo RUTA_PERFIL;?>" class="col-6">
						<div><i class="material-icons">account_circle</i><br>Perfil de usuario</div>
					</a>
					<a href="<?php echo RUTA_TIENDA;?>" class="col-6">
						<div><i class="material-icons">storefront</i><br>Tienda</div>
					</a>
				</div>		
			</div>
		</li>
		<li><div class="divider"></div></li>	
		<li>		
			<a href="<?php echo RUTA_PERFIL_EMPLEADO;?>">
				<div class="row mas-enlaces">
					<div class="col-1"><i class="material-icons">verified_user</i></div>
					<div class="col-1"></div>
					<p class="col-10">Perfil de colaborador</p>
				</div>
			</a>
		</li>
		<li>		
			<a href="<?php echo RUTA_LOGOUT;?>">
				<div class="row mas-enlaces">
					<div class="col-1">
						<i class="material-icons">exit_to_app</i>
					</div>
					<div class="col-1"></div>
					<p class="col-10">Cerrar sesión</p>
				</div>
			</a>
		</li>
		<li><div class="divider"></div></li>
		<li>
			<div align="center" class="social">
				<p>Social</p>
				<a href="<?php echo $facebookEmpresa;?>" target="_blank"><i class="fab fa-facebook-square"></i></a>
				<a href="<?php echo $instagramEmpresa;?>" target="_blank"><i class="fab fa-instagram"></i></a>
				<a href="<?php echo $whatsappEmpresa;?>" target="_blank"><i class="fab fa-whatsapp"></i></a>
			</div>
		</li>
		<li><br></li>
	</ul>
	<?php //barra de navegación lateral ?>


	<?php //boton menu?>
	<div class="menu2">
		<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
	</div>
	
<?php
}elseif(ControlSesionEmpleado :: sesion_iniciada()&&!ControlSesion :: sesion_iniciada()) {//con inicio de sesion de empleado
	//barra de navegación lateral ?>
	<ul id="slide-out" class="side-nav">
		<li>
			<div class="user-view">
				<div class="background" style="background-color: white;">
				</div>
				<a href="<?php echo SERVIDOR;?>"><img loading="lazy" width="100%" src="<?php echo RUTA_IMG;?>logo/1.png"></a>
				<br><br>
			</div>
		</li>
		<li class="enlaces">
			<div class="container-fluid" align="center">
				<div class="row">
					<a href="#inicio" class="col-6">
						<div><i class="material-icons">home</i><br>Hay</div>
					</a>
					<a href="#entrenamiento" class="col-6">
						<div><i class="material-icons">fitness_center</i><br>que</div>
					</a>
				</div>
				<div class="row">
					<a href="#clases" class="col-6">
						<div><i class="material-icons">storefront</i><br>Modificar</div>
					</a>
					<a href="<?php echo RUTA_PERFIL_EMPLEADO; ?>" class="col-6">
						<div><i class="material-icons">verified_user</i><br>Perfil</div>
					</a>
				</div>		
			</div>
		</li>
		<li><div class="divider"></div></li>
		<li>		
			<a href="<?php echo RUTA_LOGIN;?>">
				<div class="row mas-enlaces">
					<div class="col-1">
						<i class="material-icons">input</i>
					</div>
					<div class="col-1"></div>
					<p class="col-10">Iniciar sesión de usuario</p>
				</div>
			</a>
		</li>
		<li>		
			<a href="<?php echo RUTA_TIENDA;?>">
				<div class="row mas-enlaces">
					<div class="col-1">
						<i class="material-icons">storefront</i>
					</div>
					<div class="col-1"></div>
					<p class="col-10">Tienda</p>
				</div>
			</a>
		</li>
		<li><div class="divider"></div></li>
		<li>
			<div align="center" class="social">
				<p>Social</p>
				<a href="<?php echo $facebookEmpresa;?>" target="_blank"><i class="fab fa-facebook-square"></i></a>
				<a href="<?php echo $instagramEmpresa;?>" target="_blank"><i class="fab fa-instagram"></i></a>
				<a href="<?php echo $whatsappEmpresa;?>" target="_blank"><i class="fab fa-whatsapp"></i></a>
			</div>
		</li>
		<li><br></li>
	</ul>
	<?php //barra de navegación lateral ?>

	<?php //navbar superior movil?>
	<div class="container-fluid navbar-superior2 d-block d-sm-none">
		<div class="row" align="center">
			<div class="col-3"></div>			
			<div class="col-6">
				<img class="imagen" src="<?php echo RUTA_IMG."logo/2a.png";?>">
			</div>
			<div class="col-3"></div>
		</div>
		<div class="menu2">
			<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
		</div>
	</div>
	
<?php
}elseif(ControlSesion :: sesion_iniciada()&&!ControlSesionEmpleado :: sesion_iniciada()) {//con inicio de sesion de usuario
	//barra de navegación lateral ?>
	<ul id="slide-out" class="side-nav">
		<li>
			<div class="user-view">
				<div class="background" style="background-color: white;">
				</div>
				<a href="<?php echo SERVIDOR;?>"><img loading="lazy" width="100%" src="<?php echo RUTA_IMG;?>logo/1.png"></a>
				<br><br>
			</div>
		</li>
		<li class="enlaces">
			<div class="container-fluid" align="center">
				<div class="row">
					<a href="<?php echo RUTA_PERFIL;?>" class="col-6">
						<div><i class="material-icons">account_circle</i><br>Perfíl</div>
					</a>
					<a href="#entrenamiento" class="col-6">
						<div><i class="material-icons">fitness_center</i><br>Rutina</div>
					</a>
				</div>
				<div class="row">
					<a href="#clases" class="col-6">
						<div><i class="material-icons">storefront</i><br>Tienda</div>
					</a>
					<a href="#acercade" class="col-6">
						<div><i class="material-icons">restaurant_menu</i><br>Dieta</div>
					</a>
				</div>		
			</div>
		</li>
		<li><div class="divider"></div></li>
		<li>		
			<a href="<?php echo RUTA_PROTOCOLOS;?>">
				<div class="row mas-enlaces">
					<div class="col-1"><i class="material-icons">warning</i></div>
					<div class="col-1"></div>
					<p class="col-10">Protocolos de bioseguridad</p>
				</div>
			</a>
		</li>	
		<li>		
			<a href="<?php echo SERVIDOR;?>#acercade">
				<div class="row mas-enlaces">
					<div class="col-1">
						<i class="material-icons">info</i>
					</div>
					<div class="col-1"></div>
					<p class="col-10">Información</p>
				</div>
			</a>
		</li>
		<li>		
			<a href="<?php echo RUTA_LOGOUT;?>">
				<div class="row mas-enlaces">
					<div class="col-1">
						<i class="material-icons">exit_to_app</i>
					</div>
					<div class="col-1"></div>
					<p class="col-10">Cerrar sesión</p>
				</div>
			</a>
		</li>
		<li>		
			<a href="<?php echo RUTA_LOGIN_EMPLEADO;?>">
				<div class="row mas-enlaces">
					<div class="col-1">
						<i class="material-icons">share</i>
					</div>
					<div class="col-1"></div>
					<p class="col-10">Colaborar</p>
				</div>
			</a>
		</li>
		<li>		
			<a href="<?php echo RUTA_TERMINOS_CONDICIONES;?>">
				<div class="row mas-enlaces">
					<div class="col-1"><i class="material-icons">chat_bubble_outline</i></div>
					<div class="col-1"></div>
					<p class="col-10">Términos y condiciones</p>
				</div>
			</a>
		</li>
		<li><div class="divider"></div></li>
		<li>
			<div align="center" class="social">
				<p>Social</p>
				<a href="<?php echo $facebookEmpresa;?>" target="_blank"><i class="fab fa-facebook-square"></i></a>
				<a href="<?php echo $instagramEmpresa;?>" target="_blank"><i class="fab fa-instagram"></i></a>
				<a href="<?php echo $whatsappEmpresa;?>" target="_blank"><i class="fab fa-whatsapp"></i></a>
			</div>
		</li>
		<li><br></li>
	</ul>
	<?php //barra de navegación lateral ?>

	<?php //boton menu?>
	<div class="menu2">
		<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
	</div>
	
<?php
}else{//sin inicio de sesion
	//barra de navegación lateral pc ?>
	<ul id="slide-out" class="side-nav">
		<li>
			<div class="user-view">
				<div class="background" style="background-color: white;">
				</div>
				<a href="<?php echo SERVIDOR;?>"><img loading="lazy" width="100%" src="<?php echo RUTA_IMG;?>logo/1.png"></a>
				<br><br>
			</div>
		</li>
		<li class="enlaces d-none d-sm-block">
			<div class="container-fluid" align="center">
				<div class="row">
					<a href="<?php echo SERVIDOR;?>#inicio" class="col-6">
						<div><i class="material-icons">home</i><br>Inicio</div>
					</a>
					<a href="<?php echo SERVIDOR;?>#instalaciones" class="col-6">
						<div><i class="material-icons">fitness_center</i><br>Instalaciones</div>
					</a>
				</div>
				<div class="row">
					<a href="<?php echo SERVIDOR;?>#acercade" class="col-6">
						<div><i class="material-icons">info</i><br>Información</div>
					</a>
					<a target="_blank" href="<?php echo $instagramTienda;?>" class="col-6">
						<div><i class="material-icons">storefront</i><br>Tienda</div>
					</a>
				</div>		
			</div>
		</li>
		<li class="enlaces d-block d-sm-none">
			<div class="container-fluid" align="center">
				<div class="row">
					<a href="<?php echo SERVIDOR;?>" class="col-6">
						<div><i class="material-icons">home</i><br>Inicio</div>
					</a>
					<a href="<?php echo SERVIDOR;?>#instalaciones-m" class="col-6">
						<div><i class="material-icons">fitness_center</i><br>Instalaciones</div>
					</a>
				</div>
				<div class="row">
					<a href="<?php echo SERVIDOR;?>#acercade-m" class="col-6">
						<div><i class="material-icons">info</i><br>Información</div>
					</a>
					<a target="_blank" href="<?php echo $instagramTienda;?>" class="col-6">
						<div><i class="material-icons">storefront</i><br>Tienda</div>
					</a>
				</div>		
			</div>
		</li>
		<li><div class="divider"></div></li>
		<li>		
			<a href="<?php echo RUTA_PROTOCOLOS;?>">
				<div class="row mas-enlaces">
					<div class="col-1"><i class="material-icons">warning</i></div>
					<div class="col-1"></div>
					<p class="col-10">Protocolos de bioseguridad</p>
				</div>
			</a>
		</li>
		<li>		
			<a href="<?php echo RUTA_PROTOCOLOS_PASAPORTE;?>">
				<div class="row mas-enlaces">
					<div class="col-1"><i class="material-icons">qr_code</i></div>
					<div class="col-1"></div>
					<p class="col-10">Pasaporte sanitario</p>
				</div>
			</a>
		</li>
		<?php /*
		<li>		
			<a href="<?php echo RUTA_LOGIN;?>">
				<div class="row mas-enlaces">
					<div class="col-1"><i class="material-icons">input</i></div>
					<div class="col-1"></div>
					<p class="col-10">Iniciar sesión</p>
				</div>
			</a>
		</li>
		*/ ?>
		<li>		
			<a href="<?php echo RUTA_TERMINOS_CONDICIONES;?>">
				<div class="row mas-enlaces">
					<div class="col-1"><i class="material-icons">chat_bubble_outline</i></div>
					<div class="col-1"></div>
					<p class="col-10">Términos y condiciones</p>
				</div>
			</a>
		</li>
		<li><div class="divider"></div></li>
		<li>
			<div align="center" class="social">
				<p>Social</p>
				<a href="<?php echo $facebookEmpresa;?>" target="_blank"><i class="fab fa-facebook-square"></i></a>
				<a href="<?php echo $instagramEmpresa;?>" target="_blank"><i class="fab fa-instagram"></i></a>
				<a href="<?php echo $whatsappEmpresa;?>" target="_blank"><i class="fab fa-whatsapp"></i></a>
			</div>
		</li>
		<li><br></li>
	</ul>
	<?php 
	//barra de navegación lateral?>


	<?php //boton menu?>
	<div class="menu2">
		<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
	</div>
<?php
}
<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';

include_once 'app/usuario/Usuario.inc.php';
include_once 'app/empleado/Empleado.inc.php';
include_once 'app/control-medidas/ControlMedida.inc.php';
include_once 'app/rutina/Rutina.inc.php';
include_once 'app/entrada/Entrada.inc.php';
include_once 'app/entrada/Comentario.inc.php';

include_once 'app/usuario/RepositorioUsuario.inc.php';
include_once 'app/empleado/RepositorioEmpleado.inc.php';
include_once 'app/control-medidas/RepositorioControlMedida.inc.php';
include_once 'app/rutina/RepositorioRutina.inc.php';
include_once 'app/entrada/RepositorioEntrada.inc.php';
include_once 'app/entrada/RepositorioComentario.inc.php';

$componentes_url = parse_url($_SERVER['REQUEST_URI']);

$ruta = $componentes_url['path'];

$partes_ruta = explode("/", $ruta);
$partes_ruta = array_filter($partes_ruta);
$partes_ruta = array_slice($partes_ruta, 0);

$ruta_elegida = 'pagina/404.php';//siempre se redigirá a esta pagina en caso de que la url no se escriba correctamente o la redireccion se haga mal

if($partes_ruta[0] == 'cf'){
	if (count($partes_ruta) == 1) {
		$ruta_elegida = 'paginas/inicio.php';
	}
	else if (count($partes_ruta) == 2) {
		switch($partes_ruta[1]){

			//nuevas partes
			case 'subida-archivo':
                $ruta_elegida = 'scripts/tienda/barra-progreso.php';
                break;
             //subir imagen de producto
			case 'subir-imagen-producto':
			$ruta_elegida = 'paginas/tienda/subir-imagen-producto.php';
			break;
			//inicio para usuarios
			case 'tienda':
			$ruta_elegida = 'paginas/tienda/tienda.php';
			break;
			//terminos y condiciones
			case 'terminos-condiciones':
			$ruta_elegida = 'paginas/terminos-condiciones.php';
			break;
			//protocolos de bioseguridad
			case 'protocolos-bioseguridad':
			$ruta_elegida = 'paginas/protocolos/protocolos.php';
			break;
			//pasaporte sanitario digital
			case 'pasaporte-sanitario-digital':
			$ruta_elegida = 'paginas/protocolos/pasaporte-sanitario-digital.php';
			break;
			//Buscar entrada
			case 'buscar-entrada':
            $ruta_elegida = 'paginas/tienda/buscar-entrada.php';
            break;  


            //Instalaciones
			case 'tren-inferior':
            $ruta_elegida = 'paginas/instalaciones/inferior.php';
            break;
            case 'tren-superior':
            $ruta_elegida = 'paginas/instalaciones/superior.php';
            break;
            case 'zona-cardio':
            $ruta_elegida = 'paginas/instalaciones/cardio.php';
            break;    


			
			case 'panel-rutina':
			$ruta_elegida = 'paginas/rutina/gestor.php';
			$gestor_actual = '';
			break;
			case 'nueva-rutina':
			$ruta_elegida = 'paginas/rutina/nueva-rutina.php';
			break;
			case 'editar-rutina':
			$ruta_elegida = 'paginas/rutina/editar-rutina.php';
			break;
			case 'borrar-rutina':
			$ruta_elegida = 'scripts/rutina/borrar-rutina.php';
			break;


			case 'panel-entrada':
			$ruta_elegida = 'paginas/entrada/gestor.php';
			$gestor_actual = '';
			break;
			case 'nueva-entrada':
			$ruta_elegida = 'paginas/entrada/nueva-entrada.php';
			break;
			case 'editar-entrada':
			$ruta_elegida = 'paginas/entrada/editar-entrada.php';
			break;
			case 'borrar-entrada':
			$ruta_elegida = 'scripts/entrada/borrar-entrada.php';
			break;
			





			//Enlaces del menu principal				
				//clases
				case 'clases':
				$ruta_elegida = 'paginas/clases.php';
				break;
				//membresia
				case 'membresia':
				$ruta_elegida = 'paginas/membresia.php';
				break;
				//configuracion
				case 'configuracion':
				$ruta_elegida = 'paginas/configuracion.php';
				break;


			//USUARIO
				//registro de usuarios
				case 'registro':
				$ruta_elegida = 'paginas/usuario/registro/registro.php';
				break;
				//login de usuario
				case 'login':
				$ruta_elegida = 'paginas/usuario/login.php';
				break;
				case 'logout':
				$ruta_elegida = 'paginas/logout.php';
				break;
				//Perfil de usuario
				case 'perfil':
				$ruta_elegida = 'paginas/usuario/perfil.php';
				break;
				//editar datos usuario
				case 'editar-datos-usuario':
				$ruta_elegida = 'paginas/usuario/editar-datos.php';
				break;
				case 'generar-peticion-edicion-datos':
				$ruta_elegida = 'scripts/usuario/editar-datos.php';
				break;
				//Panel de control de medidas del usuario
				case 'gestor-control-medidas':
				$ruta_elegida = 'paginas/control-medidas/gestor.php';
				$gestor_actual = '';
				break;
				case 'nueva-medida':
				$ruta_elegida = 'paginas/control-medidas/nueva-medida.php';
				break;
				case 'borrar-medida':
				$ruta_elegida = 'scripts/control-medidas/borrar-medida.php';
				break;
				case 'editar-medida':
				$ruta_elegida = 'paginas/control-medidas/editar-medida.php';
				break;
				//recuperacion de contraseña para usuario
				case 'recuperar-clave':
				$ruta_elegida = 'paginas/usuario/recuperar-clave.php';
				break;
				case 'generar-url-secreta':
				$ruta_elegida = 'scripts/generar-url-secreta.php';
				break;
				//Aqui se muestran todas las rutinas creadas por el EscritosRutinas
				case 'rutinas':
				$ruta_elegida = 'paginas/rutina/rutinas.php';
				break;



			//EMPLEADO
				//registro de empleados
				case '11110010-01100101-01100111-01101001-01110011-01110100-01110010-01100001-01110010':
				$ruta_elegida = 'paginas/empleado/registro.php';
				break;
				
				//login de empleado		
				case 'login-colaborador':
				$ruta_elegida = 'paginas/empleado/login.php';
				break;

				//Perfil de empleado
				case 'perfil-colaborador':
				$ruta_elegida = 'paginas/empleado/perfil.php';
				break;

				//editar datos empleado
				case 'editar-datos-empleado':
				$ruta_elegida = 'paginas/empleado/editar-datos.php';
				break;
				case 'generar-peticion-edicion-datos-empleado':
				$ruta_elegida = 'scripts/empleado/editar-datos.php';
				break;

				//recuperacion de contraseña para empleado
				case 'recuperar-clave-colaborador':
				$ruta_elegida = 'paginas/empleado/recuperar-clave.php';
				break;
				case 'generar-url-secreta-empleado':
				$ruta_elegida = 'scripts/generar-url-secreta-empleado.php';
				break;

				

				
		}
	}


	else if (count($partes_ruta) == 3) {

		//usuario registro correcto
		if($partes_ruta[1] == 'registro-correcto-usuario'){
			$nombre = $partes_ruta[2];
			$ruta_elegida = 'paginas/usuario/registro/registro-correcto.php';
		}


		//rutas para medidas del usuario
		if ($partes_ruta[1] == 'medida') {
			$url = $partes_ruta[2];

			Conexion::abrir_conexion();
			$medida = RepositorioControlMedida :: obtener_medida_por_url(Conexion::obtener_conexion(), $url);

			if ($medida != null) {
				$autor = RepositorioUsuario::obtener_usuario_por_id(Conexion::obtener_conexion(), $medida -> obtener_autor_id());
				$medidas_azar = RepositorioControlMedida::obtener_medidas_al_azar(Conexion::obtener_conexion(), 3);


				$ruta_elegida = 'paginas/control-medidas/medida.php';
			}
		}
		//panel de control de las medidas
		if ($partes_ruta[1] == 'gestor-control-medidas') {
			switch ($partes_ruta[2]) {
				case 'medidas':
					$gestor_actual = 'medidas';
					$ruta_elegida = 'paginas/control-medidas/gestor.php';
					break;
			}
		}
		//Recuperacion de contraseña (no tocar)
		if ($partes_ruta[1] == 'recuperacion-clave') {
			$url_personal = $partes_ruta[2];
			$ruta_elegida = 'paginas/usuario/recuperacion-clave.php';
		}
		//edicion de datos del usuario
		if ($partes_ruta[1] == 'editar-datos-usuario') {
			$url_personal = $partes_ruta[2];
			$ruta_elegida = 'paginas/usuario/editar-datos.php';
		}



		//empleado registro correcto
		if($partes_ruta[1] == 'registro-correcto-empleado'){
			$nombre = $partes_ruta[2];
			$ruta_elegida = 'paginas/empleado/registro-correcto.php';
		}



		//rutas para rutinas
		if ($partes_ruta[1] == 'rutina') {
			$url = $partes_ruta[2];

			Conexion::abrir_conexion();
			$rutina = RepositorioRutina :: obtener_rutina_por_url(Conexion::obtener_conexion(), $url);

			if ($rutina != null) {
				$autor = RepositorioEmpleado::obtener_empleado_por_id(Conexion::obtener_conexion(), $rutina -> obtener_autor_id());
				$comentarios = RepositorioComentario::obtener_comentarios(Conexion::obtener_conexion(), $rutina -> obtener_id());
				$rutinas_azar = RepositorioRutina::obtener_rutinas_al_azar(Conexion::obtener_conexion(), 1);//aqui se cambia el numero de rutinas que se va a mostrar


				$ruta_elegida = 'paginas/rutina/rutina.php';
			}
		}
		//panel de control de las rutinas, favoritos y comentarios, sirve como referencia (no tocar)
		if ($partes_ruta[1] == 'panel-rutina') {
			switch ($partes_ruta[2]) {
				case 'rutinas':
					$gestor_actual = 'rutinas';
					$ruta_elegida = 'paginas/rutina/gestor.php';
					break;
				case 'comentarios':
        			$gestor_actual = 'comentarios';
        			$ruta_elegida = 'paginas/rutina/gestor.php';
        			break;
			}
		}		



		//rutas para entradas
		if ($partes_ruta[1] == 'entrada') {
			$url = $partes_ruta[2];

			Conexion::abrir_conexion();
			$entrada = RepositorioEntrada :: obtener_entrada_por_url(Conexion::obtener_conexion(), $url);

			if ($entrada != null) {
				$autor = RepositorioEmpleado::obtener_empleado_por_id(Conexion::obtener_conexion(), $entrada -> obtener_autor_id());
				$comentarios = RepositorioComentario::obtener_comentarios(Conexion::obtener_conexion(), $entrada -> obtener_id());
				$entradas_azar = RepositorioEntrada::obtener_entradas_al_azar(Conexion::obtener_conexion(), 4);//aqui se cambia el numero de entradas que se va a mostrar


				$ruta_elegida = 'paginas/entrada/entrada.php';
			}
		}
		//panel de control de las entradas, favoritos y comentarios, sirve como referencia (no tocar)
		if ($partes_ruta[1] == 'panel-entrada') {
			switch ($partes_ruta[2]) {
				case 'entradas':
					$gestor_actual = 'entradas';
					$ruta_elegida = 'paginas/entrada/gestor.php';
					break;
				case 'comentarios':
        			$gestor_actual = 'comentarios';
        			$ruta_elegida = 'paginas/entrada/gestor.php';
        			break;
			}
		}		
		if ($partes_ruta[1] == 'recuperacion-clave-colaborador') {
			$url_personal = $partes_ruta[2];
			$ruta_elegida = 'paginas/empleado/recuperacion-clave.php';
		}
		//edicion de datos del empleado
		if ($partes_ruta[1] == 'editar-datos-empleado') {
			$url_personal = $partes_ruta[2];
			$ruta_elegida = 'paginas/empleado/editar-datos.php';
		}
	}
}

include_once $ruta_elegida;
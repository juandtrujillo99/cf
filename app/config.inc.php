<?php
include_once 'info_empresa.inc.php';

//info de la base de datos
    define('NOMBRE_SERVIDOR', 'localhost'); //se deja así
    define('NOMBRE_USUARIO', 'root'); //nombre de usuario de la base de datos
    define('PASSWORD', '');
    define('NOMBRE_BD', 'cf');//Nombre de la Base de datos


//Pestañas principales (basicas o  comunes) de la web
	/*
	Aqui debes poner todas las rutas que vayas a utilizar en la pagina
	por ejemplo:
	si queres podes crear una ruta tipo...
	define("RUTA_CONTACTO", SERVIDOR."/contacto.php");
	y en vez de agregarlo a alguna etiqueta <a href="contacto.php"></a>
	podes escribir <a href="<?php echo RUTA_CONTACTO ?>"></a>
	*/
	define("SERVIDOR", "http://localhost/cf");//carpeta raiz (la que contiene todos los archivos para el funcionamiento de la página)
	define("RUTA_CLASES", SERVIDOR."/clases");
	define("RUTA_TIENDA", SERVIDOR."/tienda");
	define("RUTA_BLOG", SERVIDOR."/blog");
	define("RUTA_MEMBRESIA", SERVIDOR."/membresia");
	define("RUTA_TERMINOS_CONDICIONES", SERVIDOR."/terminos-condiciones");
	define("RUTA_PROTOCOLOS", SERVIDOR."/protocolos-bioseguridad");
	define("RUTA_PROTOCOLOS_PASAPORTE", SERVIDOR."/pasaporte-sanitario-digital");
	

//INSTALACIONES
	define("RUTA_TREN_SUPERIOR", SERVIDOR."/tren-superior");//superior
	define("RUTA_TREN_INFERIOR", SERVIDOR."/tren-inferior");//inferior
	define("RUTA_ZONA_CARDIO", SERVIDOR."/zona-cardio");//zona de cardio



//EMPLEADO
	//Registro y login empleado
	define("RUTA_REGISTRO_EMPLEADO", SERVIDOR."/11110010-01100101-01100111-01101001-01110011-01110100-01110010-01100001-01110010");//registrar nuevo empleado
	define("RUTA_REGISTRO_CORRECTO_EMPLEADO", SERVIDOR."/registro-correcto-empleado");
	define("RUTA_LOGIN_EMPLEADO", SERVIDOR."/login-colaborador");//inicio de sesion empleado
	define("RUTA_LOGOUT", SERVIDOR."/logout");

	//perfil empleado y edicion de datos
	define("RUTA_PERFIL_EMPLEADO", SERVIDOR."/perfil-colaborador");
	define("RUTA_EDITAR_DATOS_EMPLEADOS", SERVIDOR."/generar-peticion-edicion-datos-empleado");//script
	define("RUTA_EDITAR_DATOS_EMPLEADO", SERVIDOR."/editar-datos-empleado");//edicion de datos del empleado


//rutina	
	define("RUTA_RUTINAS", SERVIDOR."/rutinas");//En esta pagina se muestran todas las rutinas creadas por el EscritorRutinas
	define("RUTA_RUTINA", SERVIDOR."/rutina");
	define("RUTA_PANEL_RUTINA", SERVIDOR."/panel-rutina");
	define("RUTA_GESTOR_RUTINAS", RUTA_PANEL_RUTINA."/rutinas");
	define("RUTA_NUEVA_RUTINA", SERVIDOR."/nueva-rutina");
	define("RUTA_BORRAR_RUTINA", SERVIDOR."/borrar-rutina");
	define("RUTA_EDITAR_RUTINA", SERVIDOR."/editar-rutina");


	//entrada
	define("RUTA_ENTRADA", SERVIDOR."/entrada");
	define("RUTA_PANEL_ENTRADA", SERVIDOR."/panel-entrada");
	define("RUTA_GESTOR_ENTRADAS", RUTA_PANEL_ENTRADA."/entradas");
	define("RUTA_NUEVA_ENTRADA", SERVIDOR."/nueva-entrada");
	define("RUTA_BORRAR_ENTRADA", SERVIDOR."/borrar-entrada");
	define("RUTA_EDITAR_ENTRADA", SERVIDOR."/editar-entrada");


	//recuperacion de contraseña para EMPLEADO
	define("RUTA_RECUPERAR_CLAVE_EMPLEADO", SERVIDOR."/recuperar-clave-colaborador");
	define("RUTA_GENERAR_URL_SECRETA_EMPLEADO", SERVIDOR."/generar-url-secreta-empleado");
	define("RUTA_RECUPERACION_CLAVE_EMPLEADO", SERVIDOR."/recuperacion-clave-colaborador");//contraseña para empleado



//USUARIO
	//Registro y login de usuario
	define("RUTA_REGISTRO", SERVIDOR."/registro");//registrar nuevo usuario
	define("RUTA_REGISTRO_CORRECTO_USUARIO", SERVIDOR."/registro-correcto-usuario");
	define("RUTA_LOGIN", SERVIDOR."/login");//inicio de sesion usuario

	//perfil usuario
	define("RUTA_PERFIL", SERVIDOR."/perfil");
	define("RUTA_EDITAR_DATOS", SERVIDOR."/generar-peticion-edicion-datos");//script
	define("RUTA_EDITAR_DATOS_USUARIO", SERVIDOR."/editar-datos-usuario");//edicion de datos del usuario

	//Control de medidas del usuario
	define("RUTA_IMG_MEDIDAS", SERVIDOR."/img/control-medidas/");
	define("RUTA_MEDIDA", SERVIDOR."/medida");
	define("RUTA_GESTOR_MEDIDA", SERVIDOR."/gestor-control-medidas");
	define("RUTA_GESTOR_MEDIDAS", RUTA_GESTOR_MEDIDA."/medidas");
	define("RUTA_NUEVA_MEDIDA", SERVIDOR."/nueva-medida");
	define("RUTA_BORRAR_MEDIDA", SERVIDOR."/borrar-medida");
	define("RUTA_EDITAR_MEDIDA", SERVIDOR."/editar-medida");

	//recuperacion de contraseña para usuario
	define("RUTA_RECUPERAR_CLAVE", SERVIDOR."/recuperar-clave");
	define("RUTA_GENERAR_URL_SECRETA", SERVIDOR."/generar-url-secreta");
	define("RUTA_RECUPERACION_CLAVE", SERVIDOR."/recuperacion-clave");//contraseña para usuario



//recursos
	define("RUTA_DOCS_USUARIOS", SERVIDOR."/usuarios");
	define("RUTA_DOCS_EMPLEADOS", SERVIDOR."/empleados");
	define("RUTA_IMG", SERVIDOR."/img/");
	define("RUTA_IMG_RUTINAS", SERVIDOR."/img/rutinas/");
	define("RUTA_INSTALACIONES_INFERIOR", SERVIDOR."/img/instalaciones/inferior/");
	define("RUTA_INSTALACIONES_SUPERIOR", SERVIDOR."/img/instalaciones/superior/");
	define("RUTA_INSTALACIONES_CARDIO", SERVIDOR."/img/instalaciones/cardio/");
	define("RUTA_CSS", SERVIDOR."/css/");
	define("RUTA_JS", SERVIDOR."/js/");
	define("DIRECTORIO_RAIZ", realpath(__DIR__."/.."));
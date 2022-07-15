<?php

include_once 'app/usuario/ValidadorLogin.inc.php';
include_once 'app/usuario/ControlSesion.inc.php';
include_once 'app/Redireccion.inc.php';



ControlSesion :: cerrar_sesion();
Redireccion :: redirigir(SERVIDOR);
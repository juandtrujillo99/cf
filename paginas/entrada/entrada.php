<?php

include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/usuario/ControlSesion.inc.php';

include_once 'app/usuario/Usuario.inc.php';
include_once 'app/entrada/Entrada.inc.php';
include_once 'app/entrada/Comentario.inc.php';

include_once 'app/usuario/RepositorioUsuario.inc.php';
include_once 'app/entrada/RepositorioEntrada.inc.php';
include_once 'app/entrada/RepositorioComentario.inc.php';


if(!ControlSesion :: sesion_iniciada()) {
    Redireccion :: redirigir(SERVIDOR);
} else {
    Conexion :: abrir_conexion();
    $id = $_SESSION['id_usuario'];
    $usuario = RepositorioUsuario :: obtener_usuario_por_id(Conexion::obtener_conexion(), $id);
}



$titulo = $entrada -> obtener_titulo();

include_once 'seccion/cabecera-inicio.inc.php';
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';

//entrada.php es el archivo encargado de crear las entradas, es una plantilla
?>

<div class="container">
    <div class="col-12"><br><br></div>
    <div class="col-12" align="center">           
        <h1><?php echo $entrada -> obtener_titulo(); ?></h1>
        <br>        
        <p><?php echo $entrada -> obtener_texto(); ?></p>
    </div>
    <br><br>
    <?php
    	include_once 'seccion/entrada/entradas_al_azar.inc.php';
    ?>
</div>

<?php
include_once 'seccion/doc-terminacion.inc.php';

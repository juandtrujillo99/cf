<?php

include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/Redireccion.inc.php';
include_once 'app/usuario/ControlSesion.inc.php';

include_once 'app/usuario/Usuario.inc.php';
include_once 'app/rutina/Rutina.inc.php';
include_once 'app/rutina/EscritorRutinas.inc.php';
include_once 'app/entrada/Comentario.inc.php';

include_once 'app/usuario/RepositorioUsuario.inc.php';
include_once 'app/rutina/RepositorioRutina.inc.php';
include_once 'app/entrada/RepositorioComentario.inc.php';


//rutina.php es el archivo encargado del diseño de las paginas de rutinas, es una plantilla
$titulo = "Rutinas $nombreEmpresa";

include 'scripts/formatoFecha.php';

include_once 'seccion/cabecera-inicio.inc.php';
?>
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>aparecer.css">
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>sobreponer.css">
<?php
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="sobreponer3 d-none d-sm-block">
            <div class="texto-contenido1a">
                <h1 class="textoBlack black-text">RUTINAS</h1>
                <div style="width: 20%;height: .5em;background-color: #f5c614;">.</div>
            </div>
        </div>
    </div>
    <div class="row">
        <?php         
               echo EscritorRutinas::escribir_rutinas();
            ?>
    </div>
</div>
<?php
include_once 'seccion/doc-terminacion.inc.php';

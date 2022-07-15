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


if(!ControlSesion :: sesion_iniciada()) {
    Redireccion :: redirigir(RUTA_LOGIN);
} else {
    Conexion :: abrir_conexion();
    $id = $_SESSION['id_usuario'];
    $usuario = RepositorioUsuario :: obtener_usuario_por_id(Conexion::obtener_conexion(), $id);
}


//rutina.php es el archivo encargado del diseño de las paginas de rutinas, es una plantilla
$titulo = $rutina -> obtener_titulo();

include 'scripts/formatoFecha.php';

include_once 'seccion/cabecera-inicio.inc.php';
?>
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>cargando.css">
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>aparecer.css">
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>sobreponer.css">
<?php
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
include_once 'seccion/rutina/portada.inc.php';    
?>
<div class="col-12 row">       
    <div class="col-12 row">
        <div class="col-1 col-md-3"><br><br></div>
        <div class="col-10 col-md-6">
            <p>Nivel de intensidad: <?php echo nl2br($rutina -> obtener_intensidad()); ?></p>
            <hr>
            <iframe class="imagen" height="315" src="https://www.youtube.com/embed/<?php echo nl2br($rutina -> obtener_video()); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <br><br>
            <div class="texto-rutina">
                <?php echo nl2br($rutina -> obtener_texto()); ?>
            </div>
            <br><hr><br>
            <p>
                Por
                <a class="modal-trigger"  href="#plan1">
                    <?php echo $autor -> obtener_nombre(); ?>
                </a>
                el
                <?php echo convertirFecha($rutina -> obtener_fecha()); ?>
            </p>
            <br><hr><br>
        </div>
    </div>
</div>


<!-- Modal Structure -->
<div id="plan1" class="modal bottom-sheet">
    <a href="#!" class="modal-action modal-close waves-effect waves-red btn" style="position: absolute;top:0;right: 0;">Cerrar</a>
    <div class="col-12 row" align="center">
        <h4 class="textoBold col-12"><?php echo $autor->obtener_nombre();?></h4>
        <div class="col-md-3 col-12"></div>
        <div class="col-md-2 col-12">
            <p>
                <?php
                    if(file_exists(DIRECTORIO_RAIZ."/empleados/fotos-perfil/".$autor->obtener_cedula())) {
                        ?>
                            <img src="<?php echo RUTA_DOCS_EMPLEADOS.'/fotos-perfil/'.$autor->obtener_cedula(); ?>" class="imagen-2 circle">
                        <?php
                    } else {
                        ?>
                        <span style="font-size:6em;" class="material-icons">account_circle</span>
                        <?php
                    }
                ?>
            </p>
        </div>
        <div class="col-md-3 col-12">
            <p><?php echo $autor->obtener_bio();?></p>
            <br>
            <a href="https://wa.me/57<?php echo $autor->obtener_telefono();?>" target="_blank" class="btn btn-principal">Enviar mensaje</a>
            <?php include 'seccion/redes-sociales.inc.php';?>   
        </div>   
    </div>
</div>

<?php
include_once 'seccion/doc-terminacion.inc.php';

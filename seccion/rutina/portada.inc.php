<?php //inicio ?>
<div class="row">
    <div style="width: 100%;height: .5em;background-color: #f5c614;position: fixed;top:0;">.</div>
    <?php //seccion portada pc ?>
    <div class="sobreponer3 d-none d-sm-block">
        <div class="imagen-background2">
            <img loading="lazy" src="<?php echo RUTA_IMG;?>rutinas/<?php echo $rutina -> obtener_imagen(); ?>" class="imagen">
        </div>
        <div class="filtro3"></div>
        <div class="texto-contenido1a">
            <h1 class="textoBlack white-text"><?php echo $rutina -> obtener_titulo(); ?></h1>
            <div style="width: 20%;height: .5em;background-color: #f5c614;">.</div>
        </div>
    </div>
    <?php //seccion portada moviles ?>
    <div class="d-block d-sm-none">
        <img loading="lazy" src="<?php echo RUTA_IMG;?>rutinas/<?php echo $rutina -> obtener_imagen(); ?>" class="imagen">
        <?php include_once 'seccion/borde-redondeado.inc.php'; ?>
        <div class="row anime-1a categorias">
            <div class="col-1"></div>
            <div class="col-10">
                <h1 class="textoBlack"><?php echo $rutina -> obtener_titulo(); ?></h1>
                <br>
            </div>  
        </div>
    </div>
</div>
<?php //inicio ?>
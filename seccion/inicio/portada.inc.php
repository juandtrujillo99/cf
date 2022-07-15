<?php //inicio ?>
<div class="row" align="center">
    <?php //seccion portada pc ?>
    <div class="sobreponer d-none d-sm-block">
        <div class="imagen-background">
            <img loading="lazy" src="<?php echo RUTA_IMG;?>fondos/portada.jpg" class="imagen">
        </div>
        <div class="texto-contenido" align="right">
            <h3 class="textoBold white-text">NUNCA TE RINDAS</h3>
            <div style="width: 5%;height: .5em;background-color: #f5c614;">.</div>
        </div>
        <div class="texto-contenidoa" align="right">
            <h1 class="textoBlack white-text">¡ENTRENA CON NOSOTROS!</h1>
            <a href="<?php echo RUTA_MEMBRESIA; ?>" class="textoBold btn btn-claro">Ver planes</a>
        </div>
    </div>
    <?php //seccion portada moviles ?>
    <div class="d-block d-sm-none">
        <img loading="lazy" src="<?php echo RUTA_IMG;?>fondos/portada-m.jpg" class="imagen">
        <?php include_once 'seccion/borde-redondeado.inc.php'; ?>
        <div class="row anime-1a categorias">
            <div class="col-1"></div>
            <div class="col-10">
                <h1 class="textoBlack">¡NO PARES DE ENTRENAR!</h1>
                <p class="textoBook">
                    La determinación te permite fijar tus propias definiciones, limitaciones y valores, por eso, te invitamos a que te motives y entrenes con nosotros para que alcances tus objetivos y mucho más.
                </p>
                <br><hr>
            </div>  
        </div>
    </div>
</div>
<?php //inicio ?>
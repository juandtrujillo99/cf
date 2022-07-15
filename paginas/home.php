<?php

include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/ControlSesion.inc.php';
include_once 'app/Redireccion.inc.php';


if (!ControlSesion :: sesion_iniciada()) {
    Redireccion :: redirigir(RUTA_LOGIN);
}
else{
    Conexion :: abrir_conexion();
    $id = $_SESSION['id_usuario'];
    $usuario = RepositorioUsuario :: obtener_usuario_por_id(Conexion::obtener_conexion(), $id);
}

$titulo = 'Inicio';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="theme-color" content="#000">
        <meta name="viewport" content="width=device-width, user-scalable=no, inicial-scale=1.0, maximun-scale=1.0, Mminimun-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

        
        <?php
        
        // el titulo se convirtio en una variable, por lo tanto, cada pagina puede tener su propio titulo
        if(!isset($titulo) || empty($titulo)){
            $titulo = '';
        }
        echo "<title>$titulo</title>";
        ?>      


        <link href="img/logo/mini.png" type="imagen/x-icon" rel="ahortcut icon" />
        <link rel="stylesheet" href="<?php echo RUTA_CSS; ?>bootstrap.css">
        <link rel="stylesheet" href="<?php echo RUTA_CSS; ?>estilos.css">
        <link rel="stylesheet" href="<?php echo RUTA_CSS; ?>fuentes.css">
        <link type="text/javascript" href="<?php echo RUTA_JS; ?>jquery.js">

        <!-- Start Slider HEAD section -->
        <link rel="stylesheet" type="text/css" href="engine1/style.css" />
        <script type="text/javascript" src="engine1/jquery.js"></script>
        <!-- End Slider HEAD section -->
        
    </head>
    <body>
        <span itemscope itemtype="http://schema.org/ExerciseGym"> 
<?php
include_once 'seccion/doc-navbar.inc.php';
?>

<?php //moviles ?>
<div align="center" class="col-xs-12" id="movil">
    <div class="visible-xs visible-sm">   
        <div class="col-xs-12">
            <div id="home"><br><br>
                <a class="col-xs-12 bienvenido">
                    <h4>Post de la semana</h4>
                </a>
                <a href="<?php echo RUTA_LOGIN ?>" class="col-xs-12">
                    <img src="img/prom-anuncio/1.jpg" width="100%">
                </a>
                <a href="<?php echo RUTA_LOGIN ?>" class="col-xs-12">
                    <img src="img/prom-anuncio/3.jpg" width="100%">
                </a>
                <a href="<?php echo RUTA_LOGIN ?>" class="col-xs-12">
                    <img src="img/prom-anuncio/2.jpg" width="100%">
                </a>
                <a href="<?php echo RUTA_ENTRENAMIENTO ?>" class="col-xs-12 bienvenido2">
                    <h4>Ir a entrenar</h4>
                </a>
                <div class="col-xs-12"><br><br><br><br></div> 
                <div class="enlaces">
                    <div align="center" class="col-xs-12 social">Social<br>
                        <a href="#" target="_blank" class="col-xs-4"><i class="fab fa-facebook-square"></i></a>
                        <a href="#" target="_blank" class="col-xs-4"><i class="fab fa-instagram"></i></a>
                        <a href="#" target="_blank" class="col-xs-4"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php //moviles ?>

<?php //pc ?>
<div class="col-md-12">
    <div class="visible-md visible-lg">
        <div class="col-md-12" id="pc">            
            <div id="home" class="col-md-12">
                <div class="col-md-12">
                    <!-- Start WOWSlider.com BODY section -->
                    <div id="wowslider-container1">
                    <div class="ws_images"><ul>
                            <li><img src="data1/images/1.jpg" alt="" title="" id="wows1_0"/></li>
                            <li><img src="data1/images/2.jpg" alt="" title="" id="wows1_1"/></li>
                            <li><img src="data1/images/6.jpg" alt="" title="" id="wows1_2"/></li>
                            <li><img src="data1/images/4.jpg" alt="jquery image carousel" title="" id="wows1_3"/></li>
                            <li><img src="data1/images/5a.jpg" alt="" title="" id="wows1_4"/></li>
                        </ul></div>
                    <div class="ws_script" style="position:absolute;left:-99%"></div>
                    <div class="ws_shadow"></div>
                    </div>  
                    <script type="text/javascript" src="engine1/wowslider.js"></script>
                    <script type="text/javascript" src="engine1/script.js"></script>
                    <!-- End WOWSlider.com BODY section -->
                </div>
                <div class="col-md-12">
                    <br>
                    <div class="col-md-6" id="ventana1" style="background-image: url(img/fondos/6.jpg);">
                        <div class="col-md-12">
                            <div class="col-md-5"></div>
                             <div class="col-md-6" align="right">
                                <div style="margin-top: 12em;"></div>
                                <h1>Más sobre nosotros</h1>
                                <h2>
                                    Lorem Ipsum is simply
                                </h2>                                
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                </p>
                                <a href="<?php echo RUTA_LOGIN ?>" class="col-md-12">
                                    <div class="cuadro-boton1" align="center">Saber más</div>
                                </a>
                                <div style="margin-bottom: 5em;"></div>
                             </div>
                        </div>
                    </div>
                    <div class="col-md-6" id="ventana1" style="background-image: url(img/fondos/6b.jpg);">
                        <div class="col-md-12">
                            <div class="col-md-6" align="left">
                                <div style="margin-top: 12em;"></div>
                                <h1>Ayuda y soporte</h1>
                                <h2>
                                    Lorem Ipsum is simply
                                </h2>                                
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                </p>
                                <a href="<?php echo RUTA_LOGIN ?>" class="col-md-12">
                                    <div class="cuadro-boton1" align="center">Más información</div>
                                </a>
                                <div style="margin-bottom: 5em;"></div>
                            </div>                             
                            <div class="col-md-5"></div>
                        </div>
                    </div>
                    <div class="col-md-12"><br></div>
                </div>                
                <a href="<?php echo RUTA_ENTRENAMIENTO ?>" class="col-md-12">
                    <div class="cuadro-boton2" align="center"><h3>Ir a entrenar</h3></div>  
                </a>



                <div align="center" class="col-md-12 social">Social<br>
                    <a href="#" target="_blank" class="col-md-4"><i class="fab fa-facebook-square"></i></a>
                    <a href="#" target="_blank" class="col-md-4"><i class="fab fa-instagram"></i></a>
                    <a href="#" target="_blank" class="col-md-4"><i class="fab fa-whatsapp"></i></a>
                </div> 
            </div>
        </div>        
    </div>
</div>
<?php //pc ?>
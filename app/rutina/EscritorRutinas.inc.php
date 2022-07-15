<?php
include_once 'app/Conexion.inc.php';
include_once 'app/rutina/RepositorioRutina.inc.php';
include_once 'app/rutina/Rutina.inc.php';

class EscritorRutinas {

    public static function escribir_rutinas() {
        $rutinas = RepositorioRutina::obtener_todas_por_fecha_descendiente(Conexion::obtener_conexion());

        if (count($rutinas)) {

            foreach ($rutinas as $rutina) {

                self::escribir_rutina($rutina);
            }
        }
    }

    public static function escribir_rutina($rutina) {
        if (!isset($rutina)) {
            return;
        }
        ?>
        <div class="col-12 row">
            <div class="col-3">
                <img src="<?php echo RUTA_IMG_RUTINAS; ?>1.jpg" class="imagen">                        
            </div>
            <div class="col-9" align="center">                        
                <h4><?php echo nl2br(self::resumir_titulo($rutina -> obtener_titulo())); ?></h4>
                <p><?php echo nl2br($rutina->obtener_intensidad()); ?></p>
                <hr>
                <iframe class="imagen" height="315" src="https://www.youtube.com/embed/<?php echo nl2br($rutina->obtener_video()); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p><?php echo nl2br($rutina->obtener_texto()); ?></p>
            </div>                    
        </div>

        <?php
    }

    public static function mostrar_rutinas_busqueda($rutinas) {
        for ($i = 1; $i <= count($rutinas); $i++) {
            if($i % 3 == 0) {
                ?>
                <div class="row">
                <?php
            }

            $rutina = $rutinas[$i - 1];
            self::mostrar_rutina_busqueda($rutina);

            if($i % 3 == 0) {
                ?>
                </div>
                <?php
            }
        }
    }

    public static function mostrar_rutinas_busqueda_multiple($rutinas) {
        for ($i = 0; $i < count($rutinas); $i++) {
            ?>
            <div class="row">
            <?php

            $rutina = $rutinas[$i];
            self::mostrar_rutina_busqueda_multiple($rutina);

            ?>
            </div>
            <?php
        }
    }

    public static function mostrar_rutina_busqueda($rutina) {
        if (!isset($rutina)) {
            return;
        }
        ?>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php
                    echo $rutina -> obtener_titulo();
                    ?>
                </div>
                <div class="panel-body">
                    <p>
                        <strong>
                            <?php
                            echo $rutina->obtener_fecha();
                            ?>
                        </strong>
                        <br>
                        <strong>
                            <?php
                            echo $rutina->obtener_id();
                            ?>
                        </strong>
                    </p>
                    <div class="text-justify">
                    <?php
                    echo nl2br(self::resumir_texto($rutina->obtener_texto()));
                    ?>
                    </div>
                    <br>
                    <div class="text-center">
                        <a class="btn btn-primary" href="
                            <?php echo RUTA_RUTINA . '/' . $rutina -> obtener_url() ?>
                           " role="button">Seguir leyendo</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

    public static function mostrar_rutina_busqueda_multiple($rutina) {
        if (!isset($rutina)) {
            return;
        }
        ?>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php
                    echo $rutina -> obtener_titulo();
                    ?>
                </div>
                <div class="panel-body">
                    <p>
                        <strong>
                            <?php
                            echo $rutina->obtener_fecha();
                            ?>
                        </strong>
                        <br>
                        <strong>
                            <?php
                            echo $rutina->obtener_id();
                            ?>
                        </strong>
                    </p>
                    <div class="text-justify">
                    <?php
                    echo nl2br($rutina->obtener_intensidad());
                    ?>
                    </div>
                    <br>
                    <div class="text-center">
                        <a class="btn btn-primary" href="
                            <?php echo RUTA_RUTINA . '/' . $rutina -> obtener_url() ?>
                           " role="button">Seguir leyendo</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

    public static function resumir_titulo($titulo) {
        $longitud_maxima = 30;

        $resultado = '';

        if (strlen($titulo) >= $longitud_maxima) {

            $resultado = substr($titulo, 0, $longitud_maxima);

            $resultado .= '...';
        } else {
            $resultado = $titulo;
        }

        return $resultado;
    }

    public static function resumir_texto($texto) {
        $longitud_maxima = 80;

        $resultado = '';

        if (strlen($texto) >= $longitud_maxima) {

            $resultado = substr($texto, 0, $longitud_maxima);

            $resultado .= '...';
        } else {
            $resultado = $texto;
        }

        return $resultado;
    }

}

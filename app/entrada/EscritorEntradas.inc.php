<?php
include_once 'app/Conexion.inc.php';
include_once 'app/entrada/RepositorioEntrada.inc.php';
include_once 'app/entrada/Entrada.inc.php';

class EscritorEntradas {

    public static function escribir_entradas() {
        $entradas = RepositorioEntrada::obtener_todas_por_fecha_descendiente(Conexion::obtener_conexion());

        if (count($entradas)) {

            foreach ($entradas as $entrada) {

                self::escribir_entrada($entrada);
            }
        }
    }

    public static function escribir_entrada($entrada) {
        if (!isset($entrada)) {
            return;
        }
        ?>
        <a href="<?php echo RUTA_ENTRADA . '/' . $entrada -> obtener_url() ?>" class="col-4">
            <div class="col-12 row">
                <div class="col-3">
                    <img src="<?php echo RUTA_IMG_RUTINAS; ?>1.jpg" class="imagen">                        
                </div>
                <div class="col-9" align="center">                        
                    <h4><?php echo nl2br(self::resumir_titulo($entrada -> obtener_titulo())); ?></h4>
                    <p><?php echo nl2br(self::resumir_texto($entrada->obtener_texto())); ?></p>
                </div>                    
            </div>
        </a>

        <?php
    }

    public static function mostrar_entradas_busqueda($entradas) {
        for ($i = 1; $i <= count($entradas); $i++) {
            if($i % 3 == 0) {
                ?>
                <div class="row">
                <?php
            }

            $entrada = $entradas[$i - 1];
            self::mostrar_entrada_busqueda($entrada);

            if($i % 3 == 0) {
                ?>
                </div>
                <?php
            }
        }
    }

    public static function mostrar_entradas_busqueda_multiple($entradas) {
        for ($i = 0; $i < count($entradas); $i++) {
            ?>
            <div class="row">
            <?php

            $entrada = $entradas[$i];
            self::mostrar_entrada_busqueda_multiple($entrada);

            ?>
            </div>
            <?php
        }
    }

    public static function mostrar_entrada_busqueda($entrada) {
        if (!isset($entrada)) {
            return;
        }
        ?>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php
                    echo $entrada -> obtener_titulo();
                    ?>
                </div>
                <div class="panel-body">
                    <p>
                        <strong>
                            <?php
                            echo $entrada->obtener_fecha();
                            ?>
                        </strong>
                        <br>
                        <strong>
                            <?php
                            echo $entrada->obtener_id();
                            ?>
                        </strong>
                    </p>
                    <div class="text-justify">
                    <?php
                    echo nl2br(self::resumir_texto($entrada->obtener_texto()));
                    ?>
                    </div>
                    <br>
                    <div class="text-center">
                        <a class="btn btn-primary" href="
                            <?php echo RUTA_ENTRADA . '/' . $entrada -> obtener_url() ?>
                           " role="button">Seguir leyendo</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

    public static function mostrar_entrada_busqueda_multiple($entrada) {
        if (!isset($entrada)) {
            return;
        }
        ?>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php
                    echo $entrada -> obtener_titulo();
                    ?>
                </div>
                <div class="panel-body">
                    <p>
                        <strong>
                            <?php
                            echo $entrada->obtener_fecha();
                            ?>
                        </strong>
                        <br>
                        <strong>
                            <?php
                            echo $entrada->obtener_id();
                            ?>
                        </strong>
                    </p>
                    <div class="text-justify">
                    <?php
                    echo nl2br(self::resumir_texto($entrada->obtener_texto()));
                    ?>
                    </div>
                    <br>
                    <div class="text-center">
                        <a class="btn btn-primary" href="
                            <?php echo RUTA_ENTRADA . '/' . $entrada -> obtener_url() ?>
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

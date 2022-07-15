<?php

include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/rutina/Rutina.inc.php';

class RepositorioRutina {

    public static function insertar_rutina($conexion, $rutina) {
        $rutina_insertada = false;

        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO rutinas(autor_id, url, intensidad, video, imagen, titulo, texto, fecha, activa) VALUES(:autor_id, :url, :intensidad, :video, :imagen, :titulo, :texto, NOW(), :activa)";

                $activa = 0;

                if ($rutina -> esta_activa()) {
                    $activa = 1;
                }

                $sentencia = $conexion -> prepare($sql);

                $sentencia -> bindParam(':autor_id', $rutina -> obtener_autor_id(), PDO::PARAM_STR);
                $sentencia -> bindParam(':url', $rutina -> obtener_url(), PDO::PARAM_STR);
                $sentencia -> bindParam(':intensidad', $rutina -> obtener_intensidad(), PDO::PARAM_STR);
                $sentencia -> bindParam(':video', $rutina -> obtener_video(), PDO::PARAM_STR);
                $sentencia -> bindParam(':imagen', $rutina -> obtener_imagen(), PDO::PARAM_STR);
                $sentencia -> bindParam(':titulo', $rutina -> obtener_titulo(), PDO::PARAM_STR);
                $sentencia -> bindParam(':texto', $rutina -> obtener_texto(), PDO::PARAM_STR);
                $sentencia -> bindParam(':activa', $activa, PDO::PARAM_STR);

                $rutina_insertada = $sentencia -> execute();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }

        return $rutina_insertada;
    }

    public static function obtener_todas_por_fecha_descendiente($conexion) {
        $rutinas = [];

        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM rutinas ORDER BY fecha DESC LIMIT 5";

                $sentencia = $conexion -> prepare($sql);

                $sentencia -> execute();

                $resultado = $sentencia -> fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {

                        $rutinas[] = new Rutina(
                                $fila['id'], $fila['autor_id'], $fila['url'], $fila['intensidad'], $fila['video'], $fila['imagen'], $fila['titulo'],
                                $fila['texto'], $fila['fecha'], $fila['activa']
                        );

                    }
                }
            } catch (PDOException $ex) {
                print 'ERROR: '.$ex -> getMessage();
            }
        }

        return $rutinas;
    }

    public static function obtener_rutina_por_url($conexion, $url) {
        $rutina = null;

        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM rutinas WHERE url LIKE :url";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam(':url', $url, PDO::PARAM_STR);
                $sentencia -> execute();
                $resultado = $sentencia -> fetch();

                if (!empty($resultado)) {
                    $rutina = new Rutina(
                            $resultado['id'], $resultado['autor_id'], $resultado['url'], $resultado['intensidad'], $resultado['video'], $resultado['imagen'],
                            $resultado['titulo'], $resultado['texto'], $resultado['fecha'],
                            $resultado['activa']
                            );
                }
            } catch (PDOException $ex) {
                print 'ERROR'. $ex -> getMessage();
            }
        }

        return $rutina;
    }

    public static function obtener_rutina_por_id($conexion, $id) {
        $rutina = null;

        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM rutinas WHERE id = :id";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam(':id', $id, PDO::PARAM_STR);
                $sentencia -> execute();
                $resultado = $sentencia -> fetch();

                if (!empty($resultado)) {
                    $rutina = new Rutina(
                            $resultado['id'], $resultado['autor_id'], $resultado['url'], $resultado['intensidad'], $resultado['video'], $resultado['imagen'],
                            $resultado['titulo'], $resultado['texto'], $resultado['fecha'],
                            $resultado['activa']
                            );
                }
            } catch (PDOException $ex) {
                print 'ERROR'. $ex -> getMessage();
            }
        }

        return $rutina;
    }

    public static function obtener_rutinas_al_azar($conexion, $limite) {
        $rutinas = [];

        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM rutinas ORDER BY RAND() LIMIT $limite";

                $sentencia = $conexion -> prepare($sql);
                $sentencia -> execute();
                $resultado = $sentencia -> fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $rutinas[] = new Rutina(
                            $fila['id'], $fila['autor_id'], $fila['url'], $fila['intensidad'], $fila['video'], $fila['imagen'], $fila['titulo'], $fila['texto'], $fila['fecha'], $fila['activa']
                        );
                    }
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex -> getMessage();
            }
        }

        return $rutinas;
    }

    public static function contar_rutinas_activas_empleado($conexion, $id_empleado) {
        $total_rutinas = '0';

        if (isset($conexion)) {
            try {
                $sql = "SELECT COUNT(*) as total_rutinas FROM rutinas WHERE autor_id = :autor_id AND activa = 1";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam(':autor_id', $id_empleado, PDO::PARAM_STR);
                $sentencia -> execute();
                $resultado = $sentencia -> fetch();

                if(!empty($resultado)) {
                    $total_rutinas = $resultado['total_rutinas'];
                }
            } catch (PDOException $ex) {
                print 'ERROR'.$ex -> getMessage();
            }
        }

        return $total_rutinas;
    }

    public static function contar_rutinas_inactivas_empleado($conexion, $id_empleado) {
        $total_rutinas = '0';

        if (isset($conexion)) {
            try {
                $sql = "SELECT COUNT(*) as total_rutinas FROM rutinas WHERE autor_id = :autor_id AND activa = 0";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam(':autor_id', $id_empleado, PDO::PARAM_STR);
                $sentencia -> execute();
                $resultado = $sentencia -> fetch();

                if(!empty($resultado)) {
                    $total_rutinas = $resultado['total_rutinas'];
                }
            } catch (PDOException $ex) {
                print 'ERROR'. $ex -> getMessage();
            }
        }

        return $total_rutinas;
    }

    public static function obtener_rutinas_empleado_fecha_descendente($conexion, $id_empleado) {
        $rutinas_obtenidas = [];

        if (isset($conexion)) {
            try {
                $sql = "SELECT a.id, a.autor_id, a.url, a.intensidad, a.video, a.imagen, a.titulo, a.texto, a.fecha, a.activa, COUNT(b.id) AS 'cantidad_comentarios' ";
                $sql .= "FROM rutinas a ";
                $sql .= "LEFT JOIN comentarios b ON a.id = b.rutina_id ";
                $sql .= "WHERE a.autor_id = :autor_id ";
                $sql .= "GROUP BY a.id ";
                $sql .= "ORDER BY a.fecha DESC";

                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam(':autor_id', $id_empleado, PDO::PARAM_STR);
                $sentencia -> execute();
                $resultado = $sentencia -> fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $rutinas_obtenidas[] = array(
                            new Rutina(
                                $fila['id'], $fila['autor_id'], $fila['url'], $fila['intensidad'], $fila['video'], $fila['imagen'], $fila['titulo'], $fila['texto'], $fila['fecha'], $fila['activa']
                            ),
                            $fila['cantidad_comentarios']
                        );
                    }
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex -> getMessage();
            }
        }

        return $rutinas_obtenidas;
    }

    public static function titulo_existe($conexion, $titulo) {
        $titulo_existe = true;

        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM rutinas WHERE titulo = :titulo";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam(':titulo', $titulo, PDO::PARAM_STR);
                $sentencia -> execute();
                $resultado = $sentencia -> fetchAll();

                if (count($resultado)) {
                    $titulo_existe = true;
                } else {
                    $titulo_existe = false;
                }
            } catch(PDOException $ex) {
                print 'ERROR' . $ex -> getMessage();
            }
        }

        return $titulo_existe;
    }

    public static function imagen_existe($conexion, $imagen) {
        $imagen_existe = true;

        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM rutinas WHERE imagen = :imagen";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam(':imagen', $imagen, PDO::PARAM_STR);
                $sentencia -> execute();
                $resultado = $sentencia -> fetchAll();

                if (count($resultado)) {
                    $imagen_existe = true;
                } else {
                    $imagen_existe = false;
                }
            } catch(PDOException $ex) {
                print 'ERROR' . $ex -> getMessage();
            }
        }

        return $imagen_existe;
    }

    public static function url_existe($conexion, $url) {
        $url_existe = true;

        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM rutinas WHERE url = :url";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam(':url', $url, PDO::PARAM_STR);
                $sentencia -> execute();
                $resultado = $sentencia -> fetchAll();

                if (count($resultado)) {
                    $url_existe = true;
                } else {
                    $url_existe = false;
                }
            } catch(PDOException $ex) {
                print 'ERROR' . $ex -> getMessage();
            }
        }

        return $url_existe;
    }

    public static function eliminar_comentarios_y_rutina($conexion, $rutina_id) {
        if (isset($conexion)) {
            try {
                $conexion -> beginTransaction();

                $sql1 = "DELETE FROM comentarios WHERE rutina_id=:rutina_id";
                $sentencia1 = $conexion -> prepare($sql1);
                $sentencia1 -> bindParam(':rutina_id', $rutina_id, PDO::PARAM_STR);
                $sentencia1 -> execute();

                $sql2 = "DELETE FROM rutinas WHERE id=:rutina_id";
                $sentencia2 = $conexion -> prepare($sql2);
                $sentencia2 -> bindParam(':rutina_id', $rutina_id, PDO::PARAM_STR);
                $sentencia2 -> execute();

                $conexion -> commit();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex -> getMessage();
                $conexion -> rollBack();
            }
        }
    }

    public static function actualizar_rutina($conexion, $id, $url, $intensidad, $video, $imagen, $titulo, $texto, $activa) {
        $actualizacion_correcta = false;

        if (isset($conexion)) {
            try {
                $sql = "UPDATE rutinas SET url = :url, intensidad = :intensidad, video = :video, imagen = :imagen, titulo = :titulo, texto = :texto, activa = :activa WHERE id = :id";

                $sentencia = $conexion -> prepare($sql);

                $sentencia -> bindParam(':titulo', $titulo, PDO::PARAM_STR);
                $sentencia -> bindParam(':url', $url, PDO::PARAM_STR);
                $sentencia -> bindParam(':intensidad', $intensidad, PDO::PARAM_STR);
                $sentencia -> bindParam(':video', $video, PDO::PARAM_STR);
                $sentencia -> bindParam(':imagen', $imagen, PDO::PARAM_STR);
                $sentencia -> bindParam(':texto', $texto, PDO::PARAM_STR);
                $sentencia -> bindParam(':activa', $activa, PDO::PARAM_STR);
                $sentencia -> bindParam(':id', $id, PDO::PARAM_STR);

                $sentencia -> execute();

                $resultado = $sentencia -> rowCount();

                if (count($resultado)) {
                    $actualizacion_correcta = true;
                } else {
                    $actualizacion_correcta = false;
                }
            } catch(PDOException $ex) {
                print 'ERROR ' . $ex -> getMessage();
            }
        }

        return $actualizacion_correcta;
    }

    public static function buscar_rutinas_todos_los_campos($conexion, $termino_busqueda) {
        $rutinas = [];

        $termino_busqueda = '%' . $termino_busqueda . '%';

        if (isset($conexion)) {
            try {

                $sql = "SELECT * FROM rutinas WHERE titulo LIKE :busqueda OR texto LIKE :busqueda ORDER BY fecha DESC LIMIT 25";

                $sentencia = $conexion -> prepare($sql);

                $sentencia -> bindParam(':busqueda', $termino_busqueda, PDO::PARAM_STR);
                $sentencia -> execute();
                $resultado = $sentencia -> fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $rutinas[] = new Rutina(
                            $fila['id'], $fila['autor_id'], $fila['url'], $fila['intensidad'], $fila['video'], $fila['imagen'], $fila['titulo'], $fila['texto'], $fila['fecha'], $fila['activa']
                        );
                    }
                }

            } catch(PDOException $ex) {
                print 'ERROR ' . $ex -> getMessage();
            }
        }

        return $rutinas;
    }

    public static function buscar_rutinas_por_titulo($conexion, $termino_busqueda) {
        $rutinas = [];

        $termino_busqueda = '%' . $termino_busqueda . '%';

        if (isset($conexion)) {
            try {

                $sql = "SELECT * FROM rutinas WHERE titulo LIKE :busqueda ORDER BY fecha DESC LIMIT 25";

                $sentencia = $conexion -> prepare($sql);

                $sentencia -> bindParam(':busqueda', $termino_busqueda, PDO::PARAM_STR);
                $sentencia -> execute();
                $resultado = $sentencia -> fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $rutinas[] = new Rutina(
                            $fila['id'], $fila['autor_id'], $fila['url'], $fila['intensidad'], $fila['video'], $fila['imagen'], $fila['titulo'], $fila['texto'], $fila['fecha'], $fila['activa']
                        );
                    }
                }

            } catch(PDOException $ex) {
                print 'ERROR ' . $ex -> getMessage();
            }
        }

        return $rutinas;
    }

    public static function buscar_rutinas_por_contenido($conexion, $termino_busqueda) {
        $rutinas = [];

        $termino_busqueda = '%' . $termino_busqueda . '%';

        if (isset($conexion)) {
            try {

                $sql = "SELECT * FROM rutinas WHERE texto LIKE :busqueda ORDER BY fecha DESC LIMIT 25";

                $sentencia = $conexion -> prepare($sql);

                $sentencia -> bindParam(':busqueda', $termino_busqueda, PDO::PARAM_STR);
                $sentencia -> execute();
                $resultado = $sentencia -> fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $rutinas[] = new Rutina(
                            $fila['id'], $fila['autor_id'], $fila['url'], $fila['intensidad'], $fila['video'], $fila['imagen'], $fila['titulo'], $fila['texto'], $fila['fecha'], $fila['activa']
                        );
                    }
                }

            } catch(PDOException $ex) {
                print 'ERROR ' . $ex -> getMessage();
            }
        }

        return $rutinas;
    }

    public static function buscar_rutinas_por_autor($conexion, $termino_busqueda) {
        $rutinas = [];

        $termino_busqueda = '%' . $termino_busqueda . '%';

        if (isset($conexion)) {
            try {

                $sql = "SELECT * FROM rutinas e JOIN empleados u ON u.id = e.autor_id WHERE u.nombre LIKE :busqueda ORDER BY e.fecha DESC LIMIT 25";

                $sentencia = $conexion -> prepare($sql);

                $sentencia -> bindParam(':busqueda', $termino_busqueda, PDO::PARAM_STR);
                $sentencia -> execute();
                $resultado = $sentencia -> fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $rutinas[] = new Rutina(
                            $fila['id'], $fila['autor_id'], $fila['url'], $fila['intensidad'], $fila['video'], $fila['imagen'], $fila['titulo'], $fila['texto'], $fila['fecha'], $fila['activa']
                        );
                    }
                }

            } catch(PDOException $ex) {
                print 'ERROR ' . $ex -> getMessage();
            }
        }

        return $rutinas;
    }
}

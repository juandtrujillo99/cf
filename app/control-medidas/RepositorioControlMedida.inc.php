<?php

include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/control-medidas/ControlMedida.inc.php';

class RepositorioControlMedida {


    public static function insertar_control_medida($conexion, $control) {
        $control_medida_insertado = false;

        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO control_medidas(autor_id, url, imagen, peso, hombro, pecho, espalda, brazo, abdomen, cintura, cadera, pantorrilla, pierna_inf, pierna_sup, fecha, activa) VALUES(:autor_id, :url, :imagen, :peso, :hombro, :pecho, :espalda, :brazo, :abdomen, :cintura, :cadera, :pantorrilla, :pierna_inf, :pierna_sup,  NOW(), :activa)";

                $activa = 0;

                if ($control -> esta_activa()) {
                	$activa = 1;
                }

                $sentencia = $conexion -> prepare($sql);

                $sentencia -> bindParam(':autor_id', $control -> obtener_autor_id(), PDO::PARAM_STR);
                $sentencia -> bindParam(':url', $control -> obtener_url(), PDO::PARAM_STR);
                $sentencia -> bindParam(':imagen', $control -> obtener_imagen(), PDO::PARAM_STR);
                $sentencia -> bindParam(':peso', $control -> obtener_peso(), PDO::PARAM_STR);
                $sentencia -> bindParam(':hombro', $control -> obtener_hombro(), PDO::PARAM_STR);
                $sentencia -> bindParam(':pecho', $control -> obtener_pecho(), PDO::PARAM_STR);
                $sentencia -> bindParam(':espalda', $control -> obtener_espalda(), PDO::PARAM_STR);
                $sentencia -> bindParam(':brazo', $control -> obtener_brazo(), PDO::PARAM_STR);
                $sentencia -> bindParam(':abdomen', $control -> obtener_abdomen(), PDO::PARAM_STR);
                $sentencia -> bindParam(':cintura', $control -> obtener_cintura(), PDO::PARAM_STR);
                $sentencia -> bindParam(':cadera', $control -> obtener_cadera(), PDO::PARAM_STR);
                $sentencia -> bindParam(':pantorrilla', $control -> obtener_pantorrilla(), PDO::PARAM_STR);
                $sentencia -> bindParam(':pierna_inf', $control -> obtener_pierna_inf(), PDO::PARAM_STR);
                $sentencia -> bindParam(':pierna_sup', $control -> obtener_pierna_sup(), PDO::PARAM_STR);
                $sentencia -> bindParam(':activa', $activa, PDO::PARAM_STR);

                $control_medida_insertado = $sentencia -> execute();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }

        return $control_medida_insertado;
    }
    //editar y eliminar el control
    public static function actualizar_control_medida($conexion, $id, $url, $imagen, $peso, $hombro, $pecho, $espalda, $brazo, $abdomen, $cintura, $cadera, $pantorrilla, $pierna_inf, $pierna_sup, $activa) {
        $actualizacion_correcta = false;

        if (isset($conexion)) {
            try {
                $sql = "UPDATE control_medidas SET url = :url, 
                imagen = :imagen, peso = :peso, hombro = :hombro, pecho = :pecho, espalda = :espalda, brazo = :brazo, abdomen = :abdomen, 
                cintura = :cintura, cadera = :cadera, pantorrilla = :pantorrilla, pierna_inf = :pierna_inf, pierna_sup = :pierna_sup, 
                activa = :activa WHERE id = :id";

                $sentencia = $conexion -> prepare($sql);

                $sentencia -> bindParam(':url', $url, PDO::PARAM_STR);
                $sentencia -> bindParam(':imagen', $imagen, PDO::PARAM_STR);
                $sentencia -> bindParam(':peso', $peso, PDO::PARAM_STR);
                $sentencia -> bindParam(':hombro', $hombro, PDO::PARAM_STR);
                $sentencia -> bindParam(':pecho', $pecho, PDO::PARAM_STR);
                $sentencia -> bindParam(':espalda', $espalda, PDO::PARAM_STR);
                $sentencia -> bindParam(':brazo', $brazo, PDO::PARAM_STR);
                $sentencia -> bindParam(':abdomen', $abdomen, PDO::PARAM_STR);
                $sentencia -> bindParam(':cintura', $cintura, PDO::PARAM_STR);
                $sentencia -> bindParam(':cadera', $cadera, PDO::PARAM_STR);
                $sentencia -> bindParam(':pantorrilla', $pantorrilla, PDO::PARAM_STR);
                $sentencia -> bindParam(':pierna_inf', $pierna_inf, PDO::PARAM_STR);
                $sentencia -> bindParam(':pierna_sup', $pierna_sup, PDO::PARAM_STR);
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
    public static function eliminar_control($conexion, $control_medida_id) {
        if (isset($conexion)) {
            try {
                $conexion -> beginTransaction();
               /*
                $sql1 = "DELETE FROM comentarios WHERE control_medida_id=:control_medida_id";
                $sentencia1 = $conexion -> prepare($sql1);
                $sentencia1 -> bindParam(':control_medida_id', $control_medida_id, PDO::PARAM_STR);
                $sentencia1 -> execute();

                $sql2 = "DELETE FROM control_medidas WHERE id=:control_medida_id";
                $sentencia2 = $conexion -> prepare($sql2);
                $sentencia2 -> bindParam(':control_medida_id', $control_medida_id, PDO::PARAM_STR);
                $sentencia2 -> execute();
                
                */

                $sql = "DELETE FROM control_medidas WHERE id=:control_medida_id";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam(':control_medida_id', $control_medida_id, PDO::PARAM_STR);
                $sentencia -> execute();

                $conexion -> commit();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex -> getMessage();
                $conexion -> rollBack();
            }
        }
    }




    //funciones para obtener controles por fecha
    public static function obtener_todas_por_fecha_descendiente($conexion) {
        $controles = [];

        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM control_medidas ORDER BY fecha ASC LIMIT 1000";//aqui se modifica el numero de entradas que deben aparecer en una pagina especifica

                $sentencia = $conexion -> prepare($sql);

                $sentencia -> execute();

                $resultado = $sentencia -> fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {

                        $controles[] = new ControlMedida(
                                $fila['id'], $fila['autor_id'], $fila['url'], 
                                $fila['imagen'], $fila['peso'], $fila['hombro'], $fila['pecho'], $fila['espalda'], $fila['brazo'], $fila['abdomen'], $fila['cintura'], $fila['cadera'], $fila['pantorrilla'], $fila['pierna_inf'], $fila['pierna_sup'],    
                                $fila['fecha'], $fila['activa']
                        );

                    }
                }
            } catch (PDOException $ex) {
                print 'ERROR: '.$ex -> getMessage();
            }
        }

        return $controles;
    }
    public static function obtener_cuatro_por_fecha_descendiente($conexion) {
        $controles = [];

        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM control_medidas ORDER BY fecha DESC LIMIT 8";//aqui se modifica el numero de entradas que deben aparecer en una pagina especifica

                $sentencia = $conexion -> prepare($sql);

                $sentencia -> execute();

                $resultado = $sentencia -> fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {

                        $controles[] = new ControlMedida(
                                $fila['id'], $fila['autor_id'], $fila['url'], 
                                $fila['imagen'], $fila['peso'], $fila['hombro'], $fila['pecho'], $fila['espalda'], $fila['brazo'], $fila['abdomen'], $fila['cintura'], $fila['cadera'], $fila['pantorrilla'], $fila['pierna_inf'], $fila['pierna_sup'],    
                                $fila['fecha'], $fila['activa']
                        );

                    }
                }
            } catch (PDOException $ex) {
                print 'ERROR: '.$ex -> getMessage();
            }
        }

        return $controles;
    }



    //funciones para obtener los controles con un id y url
    public static function obtener_medida_por_url($conexion, $url) {
        $control = null;

        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM control_medidas WHERE url LIKE :url";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam(':url', $url, PDO::PARAM_STR);
                $sentencia -> execute();
                $resultado = $sentencia -> fetch();

                if (!empty($resultado)) {
                    $control = new ControlMedida(
                            $resultado['id'], $resultado['autor_id'], $resultado['url'],
                                $resultado['imagen'], $resultado['peso'], $resultado['hombro'], $resultado['pecho'], $resultado['espalda'], 
                                $resultado['brazo'], $resultado['abdomen'], $resultado['cintura'], $resultado['cadera'], $resultado['pantorrilla'], 
                                $resultado['pierna_inf'], $resultado['pierna_sup'],
                                $resultado['fecha'], $resultado['activa']
                            );
                }
            } catch (PDOException $ex) {
                print 'ERROR'. $ex -> getMessage();
            }
        }

        return $control;
    }
    public static function obtener_medida_por_id($conexion, $id) {
        $control = null;

        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM control_medidas WHERE id = :id";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam(':id', $id, PDO::PARAM_STR);
                $sentencia -> execute();
                $resultado = $sentencia -> fetch();

                if (!empty($resultado)) {
                    $control = new ControlMedida(
                            $resultado['id'], $resultado['autor_id'], $resultado['url'],
                                $resultado['imagen'], $resultado['peso'], $resultado['hombro'], $resultado['pecho'], $resultado['espalda'], 
                                $resultado['brazo'], $resultado['abdomen'], $resultado['cintura'], $resultado['cadera'], $resultado['pantorrilla'], 
                                $resultado['pierna_inf'], $resultado['pierna_sup'],
                                $resultado['fecha'], $resultado['activa']
                            );
                }
            } catch (PDOException $ex) {
                print 'ERROR'. $ex -> getMessage();
            }
        }

        return $control;
    }



    //funciones para obtener controles al azar
    public static function obtener_medidas_al_azar($conexion, $limite) {
    	$contoles = [];

    	if (isset($conexion)) {
    		try {
    			$sql = "SELECT * FROM control_medidas ORDER BY RAND() LIMIT $limite";

    			$sentencia = $conexion -> prepare($sql);
    			$sentencia -> execute();
    			$resultado = $sentencia -> fetchAll();

    			if (count($resultado)) {
    				foreach ($resultado as $fila) {
    					$contoles[] = new ControlMedida(
    						$fila['id'], $fila['autor_id'], $fila['url'], $fila['imagen'], $fila['peso'], 
                            $fila['hombro'], $fila['pecho'], $fila['espalda'], $fila['brazo'], $fila['abdomen'], 
                            $fila['cintura'], $fila['cadera'], $fila['pantorrilla'], $fila['pierna_inf'], $fila['pierna_sup'],     
                            $fila['fecha'], $fila['activa']
    					);
    				}
    			}
    		} catch (PDOException $ex) {
    			print 'ERROR' . $ex -> getMessage();
    		}
    	}

    	return $contoles;
    }



    //contador de controles activos e inactivos
    public static function contar_controles_activos_usuario($conexion, $id_usuario) {
    	$total_controles = '0';

    	if (isset($conexion)) {
            try {
                $sql = "SELECT COUNT(*) as total_controles FROM control_medidas WHERE autor_id = :autor_id AND activa = 1";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam(':autor_id', $id_usuario, PDO::PARAM_STR);
                $sentencia -> execute();
                $resultado = $sentencia -> fetch();

                if(!empty($resultado)) {
                    $total_controles = $resultado['total_controles'];
                }
            } catch (PDOException $ex) {
                print 'ERROR'.$ex -> getMessage();
            }
        }

        return $total_controles;
    }
    public static function contar_controles_inactivos_usuario($conexion, $id_usuario) {
    	$total_controles = '0';

        if (isset($conexion)) {
            try {
                $sql = "SELECT COUNT(*) as total_controles FROM control_medidas WHERE autor_id = :autor_id AND activa = 0";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam(':autor_id', $id_usuario, PDO::PARAM_STR);
                $sentencia -> execute();
                $resultado = $sentencia -> fetch();

                if(!empty($resultado)) {
                    $total_controles = $resultado['total_controles'];
                }
            } catch (PDOException $ex) {
                print 'ERROR'.$ex -> getMessage();
            }
        }

        return $total_controles;
    }



    //funciones para obtener los controles de un usuario especifico por fecha y por item
    public static function obtener_controles_usuario_fecha_descendente($conexion, $id_usuario) {
    	$medidas_obtenidas = [];

    	if (isset($conexion)) {
    		try {
    			$sql = "SELECT * FROM control_medidas WHERE autor_id = :autor_id ORDER BY fecha DESC";

    			$sentencia = $conexion -> prepare($sql);
    			$sentencia -> bindParam(':autor_id', $id_usuario, PDO::PARAM_STR);
    			$sentencia -> execute();
    			$resultado = $sentencia -> fetchAll();

    			if (count($resultado)) {
    				foreach ($resultado as $fila) {
    					$medidas_obtenidas[] = array(
    						new ControlMedida(
								$fila['id'], $fila['autor_id'], $fila['url'],
								$fila['imagen'], $fila['peso'], $fila['hombro'], $fila['pecho'], $fila['espalda'], $fila['brazo'], $fila['abdomen'],
								$fila['cintura'], $fila['cadera'], $fila['pantorrilla'], $fila['pierna_inf'], $fila['pierna_sup'],
								$fila['fecha'], $fila['activa']
							)
    					);
    				}
    			}
    		} catch (PDOException $ex) {
    			print 'ERROR' . $ex -> getMessage();
    		}
    	}

    	return $medidas_obtenidas;
    }




   /* public static function obtener_entradas_usuario_titulo_ascendente($conexion, $id_usuario) {
        $entradas_obtenidas = [];

        if (isset($conexion)) {
            try {
                $sql = "SELECT a.id, a.autor_id, a.url, 
                        a.imagen, a.peso, a.hombro, a.pecho, a.espalda, a.brazo, a.abdomen, a.cintura, a.cadera, a.pantorrilla, a.pierna_inf, a.pierna_sup,
                        a.fecha, a.activa, COUNT(b.id) AS 'cantidad_comentarios' ";
                $sql .= "FROM entradas a ";
                $sql .= "LEFT JOIN comentarios b ON a.id = b.entrada_id ";
                $sql .= "WHERE a.autor_id = :autor_id ";
                $sql .= "GROUP BY a.id ";
                $sql .= "ORDER BY a.titulo ASC";

                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam(':autor_id', $id_usuario, PDO::PARAM_STR);
                $sentencia -> execute();
                $resultado = $sentencia -> fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $entradas_obtenidas[] = array(
                            new ControlMedida(
                                $fila['id'], $fila['autor_id'], $fila['url'],
								$fila['imagen'], $fila['peso'], $fila['hombro'], $fila['pecho'], $fila['espalda'], $fila['brazo'], $fila['abdomen'],
								$fila['cintura'], $fila['cadera'], $fila['pantorrilla'], $fila['pierna_inf'], $fila['pierna_sup'],
								$fila['fecha'], $fila['activa']
                            ),
                            $fila['cantidad_comentarios']
                        );
                    }
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex -> getMessage();
            }
        }

        return $entradas_obtenidas;
    }*/


    //funcion que comprueba si el item existe en la tabla
    public static function imagen_existe($conexion, $imagen) {
    	$imagen_existe = true;

    	if (isset($conexion)) {
    		try {
    			$sql = "SELECT * FROM control_medidas WHERE imagen = :imagen";
    			$sentencia = $conexion -> prepare($sql);
    			$sentencia -> bindParam(':imagen', $titulo, PDO::PARAM_STR);
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
    //funcion que comprueba si la url ya existe en la tabla
    public static function url_existe($conexion, $url) {
    	$url_existe = true;

    	if (isset($conexion)) {
    		try {
    			$sql = "SELECT * FROM control_medidas WHERE url = :url";
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











    /*
    public static function buscar_entradas_todos_los_campos($conexion, $termino_busqueda) {
        $entradas = [];

        $termino_busqueda = '%' . $termino_busqueda . '%';

        if (isset($conexion)) {
            try {

                $sql = "SELECT * FROM entradas WHERE titulo LIKE :busqueda OR texto LIKE :busqueda ORDER BY fecha DESC LIMIT 25";

                $sentencia = $conexion -> prepare($sql);

                $sentencia -> bindParam(':busqueda', $termino_busqueda, PDO::PARAM_STR);
                $sentencia -> execute();
                $resultado = $sentencia -> fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $entradas[] = new ControlMedida(
                           $fila['id'], $fila['autor_id'], $fila['url'],
								$fila['imagen'], $fila['peso'], $fila['hombro'], $fila['pecho'], $fila['espalda'], $fila['brazo'], $fila['abdomen'],
								$fila['cintura'], $fila['cadera'], $fila['pantorrilla'], $fila['pierna_inf'], $fila['pierna_sup'],
								$fila['fecha'], $fila['activa']
                        );
                    }
                }

            } catch(PDOException $ex) {
                print 'ERROR ' . $ex -> getMessage();
            }
        }

        return $entradas;
    }

    public static function buscar_entradas_por_titulo($conexion, $termino_busqueda) {
        $entradas = [];

        $termino_busqueda = '%' . $termino_busqueda . '%';

        if (isset($conexion)) {
            try {

                $sql = "SELECT * FROM entradas WHERE titulo LIKE :busqueda ORDER BY fecha DESC LIMIT 25";

                $sentencia = $conexion -> prepare($sql);

                $sentencia -> bindParam(':busqueda', $termino_busqueda, PDO::PARAM_STR);
                $sentencia -> execute();
                $resultado = $sentencia -> fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $entradas[] = new ControlMedida(
                            $fila['id'], $fila['autor_id'], $fila['url'],
								$fila['imagen'], $fila['peso'], $fila['hombro'], $fila['pecho'], $fila['espalda'], $fila['brazo'], $fila['abdomen'],
								$fila['cintura'], $fila['cadera'], $fila['pantorrilla'], $fila['pierna_inf'], $fila['pierna_sup'],
								$fila['fecha'], $fila['activa']
                        );
                    }
                }

            } catch(PDOException $ex) {
                print 'ERROR ' . $ex -> getMessage();
            }
        }

        return $entradas;
    }

    public static function buscar_entradas_por_contenido($conexion, $termino_busqueda) {
        $entradas = [];

        $termino_busqueda = '%' . $termino_busqueda . '%';

        if (isset($conexion)) {
            try {

                $sql = "SELECT * FROM entradas WHERE texto LIKE :busqueda ORDER BY fecha DESC LIMIT 25";

                $sentencia = $conexion -> prepare($sql);

                $sentencia -> bindParam(':busqueda', $termino_busqueda, PDO::PARAM_STR);
                $sentencia -> execute();
                $resultado = $sentencia -> fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $entradas[] = new ControlMedida(
                            $fila['id'], $fila['autor_id'], $fila['url'],
								$fila['imagen'], $fila['peso'], $fila['hombro'], $fila['pecho'], $fila['espalda'], $fila['brazo'], $fila['abdomen'],
								$fila['cintura'], $fila['cadera'], $fila['pantorrilla'], $fila['pierna_inf'], $fila['pierna_sup'],
								$fila['fecha'], $fila['activa']
                        );
                    }
                }

            } catch(PDOException $ex) {
                print 'ERROR ' . $ex -> getMessage();
            }
        }

        return $entradas;
    }

    public static function buscar_entradas_por_autor($conexion, $termino_busqueda) {
        $entradas = [];

        $termino_busqueda = '%' . $termino_busqueda . '%';

        if (isset($conexion)) {
            try {

                $sql = "SELECT * FROM entradas e JOIN usuarios u ON u.id = e.autor_id WHERE u.nombre LIKE :busqueda ORDER BY e.fecha DESC LIMIT 25";

                $sentencia = $conexion -> prepare($sql);

                $sentencia -> bindParam(':busqueda', $termino_busqueda, PDO::PARAM_STR);
                $sentencia -> execute();
                $resultado = $sentencia -> fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $entradas[] = new ControlMedida(
                           $fila['id'], $fila['autor_id'], $fila['url'],
								$fila['imagen'], $fila['peso'], $fila['hombro'], $fila['pecho'], $fila['espalda'], $fila['brazo'], $fila['abdomen'],
								$fila['cintura'], $fila['cadera'], $fila['pantorrilla'], $fila['pierna_inf'], $fila['pierna_sup'],
								$fila['fecha'], $fila['activa']
                        );
                    }
                }

            } catch(PDOException $ex) {
                print 'ERROR ' . $ex -> getMessage();
            }
        }

        return $entradas;
    }*/
}

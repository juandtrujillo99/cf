<?php

class ControlMedida {
    
    private $id;
    private $autor_id;
    private $url;
    private $imagen;
    private $peso;
    private $hombro;
    private $pecho;
    private $espalda;
    private $brazo;
    private $abdomen;
    private $cintura;
    private $cadera;
    private $pantorrilla;
    private $pierna_inf;
    private $pierna_sup;
    private $fecha;
    private $activa;
    
    public function __construct($id, $autor_id, $url, $imagen, $peso, $hombro, $pecho, $espalda, $brazo, $abdomen, $cintura, $cadera, $pantorrilla, $pierna_inf, $pierna_sup, $fecha, $activa) {
        $this -> id = $id;
        $this -> autor_id = $autor_id;
        $this -> url = $url;
        $this -> imagen = $imagen;
        $this -> peso = $peso;
        $this -> hombro = $hombro;
        $this -> pecho = $pecho;
        $this -> espalda = $espalda;
        $this -> brazo = $brazo;
        $this -> abdomen = $abdomen;
        $this -> cintura = $cintura;
        $this -> cadera = $cadera;
        $this -> pantorrilla = $pantorrilla;
        $this -> pierna_inf = $pierna_inf;
        $this -> pierna_sup = $pierna_sup;
        $this -> fecha = $fecha;
        $this -> activa = $activa;
    }
     



    public function obtener_id() {
        return $this -> id;
    }    
    public function obtener_autor_id() {
        return $this -> autor_id;
    }    
    public function obtener_url() {
        return $this -> url;
    }
    public function obtener_imagen() {
        return $this -> imagen;
    }
    public function obtener_peso() {
        return $this -> peso;
    }
    public function obtener_hombro() {
        return $this -> hombro;
    }    
    public function obtener_pecho() {
        return $this -> pecho;
    }    
    public function obtener_espalda() {
        return $this -> espalda;
    }
    public function obtener_brazo() {
        return $this -> brazo;
    }
    public function obtener_abdomen() {
        return $this -> abdomen;
    }
    public function obtener_cintura()  {
        return $this -> cintura;
    }
    public function obtener_cadera() {
        return $this -> cadera;
    }
    public function obtener_pantorrilla() {
        return $this -> pantorrilla;
    }
    public function obtener_pierna_inf() {
        return $this -> pierna_inf;
    }
    public function obtener_pierna_sup() {
        return $this -> pierna_sup;
    }    
    public function obtener_fecha() {
        return $this -> fecha;
    }    
    public function esta_activa() {
        return $this -> activa;
    }



    public function cambiar_imagen($imagen) {
        $this -> imagen = $imagen;
    }
    public function cambiar_peso($peso) {
        $this -> peso = $peso;
    }
    public function cambiar_hombro($hombro) {
        $this -> hombro = $hombro;
    }    
    public function cambiar_pecho($pecho) {
        $this -> pecho = $pecho;
    }
    public function cambiar_espalda($espalda) {
        $this -> espalda = $espalda;
    }    
    public function cambiar_brazo($brazo) {
        $this -> brazo = $brazo;
    }    
    public function cambiar_abdomen($abdomen) {
        $this -> abdomen = $abdomen;
    }    
    public function cambiar_cintura($cintura) {
        $this -> cintura = $cintura;
    }    
    public function cambiar_cadera($cadera) {
        $this -> cadera = $cadera;
    }    
    public function cambiar_pantorrilla($pantorrilla) {
        $this -> pantorrilla = $pantorrilla;
    }    
    public function cambiar_pierna_inf($pierna_inf) {
        $this -> pierna_inf = $pierna_inf;
    }    
    public function cambiar_pierna_sup($pierna_sup) {
        $this -> pierna_sup = $pierna_sup;
    }    
    public function cambiar_activa($activa) {
        $this -> activa = $activa;
    }
}
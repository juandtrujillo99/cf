<?php

class Rutina {
    
    private $id;
    private $autor_id;
    private $url;
    private $imagen;
    private $intensidad;
    private $titulo;
    private $texto;
    private $fecha;
    private $activa;
    
    public function __construct($id, $autor_id, $url, $imagen, $intensidad, $video, $titulo, $texto, $fecha, $activa) {
        $this -> id = $id;
        $this -> autor_id = $autor_id;
        $this -> url = $url;
        $this -> intensidad = $intensidad;
        $this -> video = $video;
        $this -> imagen = $imagen;
        $this -> titulo = $titulo;
        $this -> texto = $texto;
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

    public function obtener_intensidad() {
        return $this -> intensidad;
    }

    public function obtener_video() {
        return $this -> video;
    }

    public function obtener_imagen() {
        return $this -> imagen;
    }
    
    public function obtener_titulo() {
        return $this -> titulo;
    }
    
    public function obtener_texto() {
        return $this -> texto;
    }
    
    public function obtener_fecha() {
        return $this -> fecha;
    }
    
    public function esta_activa() {
        return $this -> activa;
    }
    
    public function cambiar_url($url) {
        $this -> url = $url;
    }

    public function cambiar_imagen($imagen) {
        $this -> imagen = $imagen;
    }
    
    public function cambiar_titulo($titulo) {
        $this -> titulo = $titulo;
    }
    
    public function cambiar_intensidad($intensidad) {
        $this -> intensidad = $intensidad;
    }
    
    public function cambiar_video($video) {
        $this -> video = $video;
    }
    
    public function cambiar_texto($texto) {
        $this -> texto = $texto;
    }
    
    public function cambiar_activa($activa) {
        $this -> activa = $activa;
    }
}
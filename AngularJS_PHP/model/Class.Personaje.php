<?php

 require_once '../config/Class.Conexion.php';

 class Personaje {
    private $codigo;
    private $nombre;
    private $descripcion;
    const TABLA = 'personaje';
    public function getCodigo() {
       return $this->codigo;
    }
    public function getNombre() {
       return $this->nombre;
    }
    public function getDescipcion() {
       return $this->descipcion;
    }
    public function setNombre($nombre) {
       $this->nombre = $nombre;
    }
    public function setDescripcion($descripcion) {
       $this->descripcion = $descripcion;
    }
    public function __construct($nombre, $descripcion, $codigo) {
       $this->nombre = $nombre;
       $this->descripcion = $descripcion;
       $this->codigo = $codigo;
    }
     public static function findAll(){
       $conexion = new Conexion();
       $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA );
       $consulta->execute();
       $registros = $consulta->fetchAll();
       return $registros;
    }

    public function insertarPersonaje(){
      $conexion = new Conexion();
      $consulta = $conexion->prepare("INSERT INTO  " .self::TABLA . " (nombre, descripcion) VALUES(:nomb,:desc)");
      $consulta->bindParam(':nomb', $this->nombre);
      $consulta->bindParam(':desc', $this->descripcion);
      $consulta->execute();
    }
 }


?>
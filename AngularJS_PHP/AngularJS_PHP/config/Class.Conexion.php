<?php 

 class Conexion extends PDO {
    private $typeBD = 'mysql';
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $BD = "datos";
    
    public function __construct(){
        //Sobreescribo el metodo contructor de la clase PDO
        try{
            parent::__construct($this->typeBD.':host='.$this->host.';dbname='.$this->BD, $this->user, $this->pass);
        }
        catch(PDOException $e){
         echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
         exit;
        }
    }
}

?> 
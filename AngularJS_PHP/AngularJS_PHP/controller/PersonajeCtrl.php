<?php
require_once '../model/Class.Personaje.php';
$JSON = file_get_contents("php://input");
$request = json_decode($JSON,true);
$txtNomb1 = $request['txtNomb1'];
$txtDesc1 = $request['txtDesc1'];
$txtCodigo = isset($request->codi) ? $txtCodigo = $request->codi : $txtCodigo = null;
$type = $request['type'];
switch($type){
    case 'insertar':
            $sentencia = new Personaje($txtNomb1, $txtDesc1, null);
            $sentencia->insertarPersonaje();
            if($sentencia){
                $usuarioDato['result']  = 'OK';
            } else{
                $usuarioDato['result']  = 'DENIED';
            }
            echo json_encode($usuarioDato);
    break;
    default:
    break;
} 

?>
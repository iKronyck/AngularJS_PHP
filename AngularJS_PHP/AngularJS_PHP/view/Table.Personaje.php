<?php
    //include "../config/Class.Conexion.php";
    include "../model/Class.Personaje.php";
    $pers = Personaje::findAll();
    if(count($pers) > 0 ):
        foreach($pers as $item):
            $table = '<tr>';
            $table .= '<td>'.$item['codigo'].'</td>';
            $table .= '<td>'.$item['nombre'].'</td>';
            $table .= '<td>'.$item['descripcion'].'</td>';
            $table .= '</tr>';
            echo $table;
        endforeach;
    else :
        echo "<tr><td><center>No hay datoos que mostrar</center></td></tr>";
    endif;
?>


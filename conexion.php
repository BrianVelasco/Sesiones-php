<?php
function conectar(){
    $bd = mysqli_connect("localhost", "root", "", "tfc");
    if (!$bd){
        echo "<h2>Conexion Fallida</h2>";
        echo mysqli_error($bd);
        return NULL;
    }
    return $bd;
    
    
}


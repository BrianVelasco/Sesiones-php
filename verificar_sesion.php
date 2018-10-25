<?php 
    session_start(); 
    function verificar(){
    if (!isset($_SESSION['usuario'])){
        echo "<p>Sesion no inicializada</p>";
        echo "<br><a href='index.php'>Volver</a>";
        return 0;
    }
    if ($_SESSION['usuario'] == "" ){
        echo "<p>Sesion finalizada !!</p>";
        echo "<br><a href='index.php'>Volver</a>";
        return 0;
    }
    return 1;
    }
?>

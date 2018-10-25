<?php
    session_start();
    $_SESSION['usuario']="";
    session_destroy();
    echo "<h2>Informaicion</h2>";
    echo "Sesion Finalizada";
    echo "<br><a href='index.php'>Ir al Inicio</a>";

<?php
    session_start();
    $usu = $_POST["user"];
    $cla = $_POST["password"];
    
    include './conexion.php';
    $bd = conectar();
    $sql = "select * from usuarios where login='$usu' and clave = '$cla'";
    $result = mysqli_query($bd, $sql);
    $ban=0;
    while($arr = mysqli_fetch_array($result)){
        $ban=1;
        $_SESSION["usuario"]=$arr[0];
        echo "1";
    }
    if ($ban==0){
        $_SESSION["usuario"]="";
        echo "<br>Usuario no éxiste<br>" ;
    }

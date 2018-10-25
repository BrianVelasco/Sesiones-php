<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Menu TFC</title>
        <link href="css/estiloTFCmenu.css" rel="stylesheet" type="text/css"/>
        <link href="css/materialize.min.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="js/micodigomenu.js" type="text/javascript"></script>
        <script src="js/jquery-3.1.1.js" type="text/javascript"></script>
        <script src="js/materialize.min.js" type="text/javascript"></script>

    </head>
    <body>
        <ul id="menuingresar" class="dropdown-content">
            <li><a href="#!">Estudiantes</a></li>
            <li><a href="#!">Docentes</a></li>
            <li><a href="#!">Proyectos</a></li>
            <li><a href="#!">Jurados</a></li>
        </ul>
        <nav>
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo">CONTROL DE TRABAJOS FINALES</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#!">Eliminar</a></li>
                    <!-- Dropdown Trigger -->
                    <li><a class="dropdown-button" href="#!" data-activates="menuingresar">Listar<i class="material-icons right">arrow_drop_down</i></a></li>
                </ul>
            </div>
        </nav>
        <div class="section"></div>
        <?php
        include './verificar_sesion.php';
        if (verificar() == 1) {
            echo "<center><div class='row'><img src='images/usuario.png'>";
            echo "<h4>Bienvenido " . $_SESSION['usuario'] . "</h4></div></center>";
        } else {
            return NULL;
        }
        ?>
        <div class="container">
            <h4>Formularios</h4>
            <ul class="collapsible" data-collapsible="accordion">
                <li>
                    <div class="collapsible-header"><i class="material-icons">perm_identity</i>Estudiantes</div>
                    <div class="collapsible-body"><span>Aqui va el formulario de estudiantes.</span></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">supervisor_account</i>Profesores</div>
                    <div class="collapsible-body"><span>Aqui va el formulario de profesores.</span></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">library_books</i>Proyectos</div>
                    <div class="collapsible-body"><span>Aqui va el formulario de proyectos.</span></div>
                </li>
            </ul>
        </div>
    </body>
</html>

<html>

    <head>
        <meta charset="UTF-8">
        <link href="css/materialize.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/estiloTFC.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.1.1.js" type="text/javascript"></script>
        <script src="js/materialize.min.js" type="text/javascript"></script>
        <script src="js/micodigo.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="section"></div>
        <main>
            <center>
                <img class="responsive-img" style="width: 250px" src="images/iconlogi.png" alt=""/>
                <div class="section"></div>
                <h4 class="blue-grey-text">CONTROL TFC</h4>

                <div class="container">
                    <div class="z-depth-1 grey lighten-3 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
                        <h4 class="indigo-text">LOGIN</h4>
                        <form class="col s12" method="post" action="verificar.php" id="frmSesion">
                            <div class='row'>
                                <div class='col s12'>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='input-field col s12'>
                                    <input class='validate' required type='text' name='user' id='user' />
                                    <label for='user'>Ingrese Su Nombre</label>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='input-field col s12'>
                                    <input class='validate' type='password' name='password' id='password' />
                                    <label for='password'>Ingrese Su password</label>
                                </div>
                                <label style='float: right;'>
                                    
                                </label>
                            </div>

                            <br />
                            <center>
                                <div class='row'>
                                    <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect '>Login</button>
                                </div>
                            </center>
                        </form>
                    </div>
                </div>
            </center>
            <div class="center">
                <div id="divres"></div>
            </div>
            <div class="section"></div>
            <div class="section"></div>
        </main>
    </body>

</html>
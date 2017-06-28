<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Flaming Rage. Contacto con los administradores y desarrolladores de la pagina web." />
        <meta name="keywords" content="Flaming Rage, Contacto, Soporte." />
        <meta property="og:title" content="Flaming Rage - Soporte" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="http://www.flamingrage.hol.es/HTML/soporte.php" />
        <meta property="og:image" content="http://www.flamingrage.hol.es/Imagenes/alts.png" />
        <meta property="og:description" content="Contacto con los administradores y desarrolladores de la pagina web." />
        <link rel="canonical" href="http://www.flamingrage.hol.es/HTML/soporte.php">
        <link rel="shortcut icon" href="../Imagenes/iconoflamingrage.ico">
        <link rel="stylesheet" type="text/css" href="../CSS/resetstyles.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../CSS/style.css">
        <title>Soporte</title>
    </head>

    <body>
        <?php
        $nameErr = $emailErr = $consultaErr = "";
        $name = $email = $consulta = '';
        error_reporting(0);
        
        //Comprobar caracteres especiales. Redireccionar a otra web php para mandar el contenido al correo y redireccionar con header() otra vez a soporte.
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (empty($_POST["name"])) {
                $nameErr = "Nombre es necesario.";
            } else {
                $name = test_input($_POST["name"]);
            }

            if (empty($_POST["email"])) {
                $emailErr = "Email es necesario.";
            } else {
                $email = test_input($_POST["email"]);
            }

            if (empty($_POST["consulta"])) {
                $consultaErr = "Consulta es necesario.";
            } else {
                $consulta = test_input($_POST["consulta"]);
            }

            if (!empty($_POST["email"]) && !empty($_POST["email"]) && !empty($_POST["consulta"])) {
                $destino = "flamingrage.oriolarnau@gmail.com";
                $asunto = "Consulta";

                $consulta = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>" .
                        "<html xmlns='http://www.w3.org/1999/xhtml'><head><meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />" .
                        "<title>Flaming Rage</title>" .
                        "<meta name='viewport' content='width=device-width, initial-scale=1.0'/></head>" .
                        "<body>" .
                        "<table align='center' border='1' cellpadding='0' cellspacing='0' width='600'><tr><td bgcolor='#70bbd9'>Email: $_POST[email]</td></tr>" .
                        "<tr><td bgcolor='#ffffff'>Nombre: $_POST[name]</td></tr>" .
                        "<tr><td bgcolor='#ee4c50'>Comentario: $_POST[consulta]</td></tr>" .
                        "</table></body></html>";
                
                $headers = "From:" . $email . "\r\n";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

                mail($destino, $asunto, $consulta, $headers);

                echo "<span style='color: red;'>Mensaje enviado</span>";
            }
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>

        <?php include('header-nav.php'); ?>

        <main class="container">

            <section class="subcontenido">

                <header><h2 class="separador text-center">Contacto con los administradores</h2></header>

                <p>Sugerencias o dudas puede contactar con estas direcciones de los administradores.</p>
                <p><a href=mailto:flamingrage.oriolarnau@gmail.com>flamingrage.oriolarnau@gmail.com</a></p>

                <div class="row">
                    <form action="<?php echo htmlspecialchars("envio.php"); ?>" method="POST">
                        <div class="col-xs-offset-2 col-xs-8">
                            <div class="form-group">
                                <input placeholder="Nombre o Nick" name="name" type="text" class="form-control" value="<?php echo $name ?>" required/>
                            </div>
                        </div>
                        <div class="col-xs-offset-2 col-xs-8">
                            <div class="form-group">
                                <input placeholder="Correo electónico" type="email" name="email" class="form-control" required />   
                            </div>
                        </div>
                        <div class="col-xs-offset-2 col-xs-8">
                            <div class="form-group">
                                <textarea name="consulta" rows="5" placeholder="Consulta" class="form-control" required></textarea>
                            </div>
                        </div>
                        <div class="col-xs-offset-2 col-xs-8">
                            <div class="form-group">
                                <button type="submit" name="enviar" class="btn btn-primary">Enviar consulta</button>                              
                            </div>
                        </div>                                          
                    </form>
                </div>
                <header><h2 class="separador text-center">Otras formas de contacto</h2></header>

                <p>
                    <a href="https://twitter.com/OriolTebra">@OriolTebra Twitter</a> </p>
                <p><a href="https://twitter.com/nauperezguerra">@nauperezguerra Twitter</a> </p>
                <p>
                    Directamente desde la pagina de grupo de facebook: <a href="https://www.facebook.com/groups/465723736814961/">https://www.facebook.com/groups/465723736814961/</a>
                </p>

            </section>

            <footer><p><a href="https://www.facebook.com/groups/465723736814961/"><img class="img-responsive img-centrar" alt="facebook" src="../Imagenes/facebook.png"></a></p>
                <p class="text-center"><a href="HTML/soporte.php">Contacto con el soporte</a> </p></footer>

        </main><!-- marco terinado-->
        <script>
            /*
             * Open the drawer when the menu icon is clicked.
             */
            var menu = document.querySelector('#menuIcon');
            var main = document.querySelector('main');
            var drawer = document.querySelector('#drawer');

            menu.addEventListener('click', function (e) {
                drawer.classList.toggle('open');
                e.stopPropagation();
            });
            main.addEventListener('click', function () {
                drawer.classList.remove('open');
            });
        </script>

    </section>    
</body>
</html>

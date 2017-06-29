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
        <?php error_reporting(0);  session_start();?>
        <?php include('header-nav.php'); ?>

        <main class="container">

            <section class="subcontenido">

                <header><h2 class="separador text-center">Contacto con Flaming Rage</h2></header>

                <p>Se agradece el interés mostrado en esta web y en sus soluciones posibles para mejorarla.</p>
                <p>Rellene el siguiente formulario y díga su duda o que ofrece como mejora en la web.</p>

                <div class="row">
                    <form action="<?php echo htmlspecialchars("envio.php"); ?>" method="POST">
                        <div class="col-xs-offset-2 col-xs-8">
                            <div class="form-group">
                                <input placeholder="Nombre o Nick" name="name" type="text" class="form-control" required/>
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
                                <?php echo $_SESSION['succes']; ?>
                            </div>
                        </div>                                          
                    </form>
                </div>
                    <?php //<a href="https://twitter.com/OriolTebra">@OriolTebra Twitter</a> </p> 
               // <p><a href="https://twitter.com/nauperezguerra">@nauperezguerra Twitter</a> </p>?>
            </section>
        </main><!-- marco terinado-->
        <?php include('footer.php'); ?>
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
<?php session_destroy() ?>
    </section>    
</body>
</html>

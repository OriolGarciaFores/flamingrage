<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Flaming Rage. Descarga del Photoshop CS6 portable." />
        <meta property="og:title" content="Flaming Rage - Photoshop" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="http://www.flamingrage.hol.es/" />
        <meta property="og:image" content="../Imagenes/alts.png" />
        <meta property="og:description" content="Descarga del Photoshop CS6 portable." />
        <link rel="shortcut icon" href="../Imagenes/iconoflamingrage.ico">
        <link rel="stylesheet" type="text/css" href="../CSS/resetstyles.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../CSS/style.css">
        <title>Photoshop CS6</title>
    </head>

    <body>
        <?php include('header-nav.php'); ?>

        <main class="container">

            <section class="subcontenido">
                <header><h2 class="separador text-center">Descargas:</h2></header>
                <p> <a href="https://mega.nz/#!c8lRBbrQ!Wg-VQs8th7120gSVmtertN7cycmNkJkxfQStI9XxRwM"><img class="img-responsive img-centrar" alt="logoPhotoshop" src="http://naturalformacion.es/wp-content/uploads/2014/06/logo-photoshop.png" width="195" height="182"></a></p>
                <p>Aquí teneis el photoshop CS6 para quién le interese. Pesa muy poco, por lo que no estoy seguro de si le falta algun complemento o algo. Si este photoshop esta incompleto, avisadme para publicar otro.</p>
                <p>Por si algunos no sabeis que es esto de portable, cosa que dudo. Portable significa que no hace falta instalar, ejecutais y ya.</p>
                <br>
            </section>

            <footer><p><a href="https://www.facebook.com/groups/465723736814961/"><img class="img-responsive img-centrar" alt="facebook" src="../Imagenes/facebook.png"></a></p>
                <p class="text-center"><a href="soporte.php">Contacto con el soporte</a></p></footer>
        </main>
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
    </body>
</html>

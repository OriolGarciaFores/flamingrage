<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../Imagenes/iconoflamingrage.ico">
        <link rel="stylesheet" type="text/css" href="../CSS/resetstyles.css">
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
        <?php include('header-nav.php'); ?>

        <main class="container">

            <section class="subcontenido">

                <header><h2 class="separador text-center">Contacto con los administradores</h2></header>

                <p>Sugerencias o dudas puede contactar con estas direcciones de los administradores.</p>
                <p><a href=mailto:flamingrage.oriolarnau@gmail.com>flamingrage.oriolarnau@gmail.com</a></p>
                </article>
                <article class="subcontenido">


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

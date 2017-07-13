<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Flaming Rage. Descripción de la web." />
        <meta name="keywords" content="Flaming Rage, descripción web." />
        <meta property="og:title" content="Flaming Rage - Sobre la web" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="http://www.flamingrage.hol.es/HTML/info-web.php" />
        <meta property="og:image" content="http://www.flamingrage.hol.es/Imagenes/alts.png" />
        <meta property="og:description" content="Descripción de la web." />
        <link rel="canonical" href="http://www.flamingrage.hol.es/HTML/info-web.php">
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
        <title>Sobre la web</title>
    </head>

    <body>


        <?php include('header-nav.php'); ?>

        <main class="container">

            <section class="subcontenido">
                <header><h1 class="text-center">¡BIENVENIDO A FLAMING RAGE!</h1></header>
                <br>
                <br>
                <p>
                    Soy Tebrase y junto con Nau, iniciamos esta página web con el objetivo de aprender a programar y al mismo tiempo ofrecer o compartir guías y demás.
                </p>
                <p>Esta web se originó mediante un clan/familia de un videojuego, un MMORPG. Con un grupo reducido de gente se a mantenido gracias a un grupo de facebook y de allí viene el nombre del sitio web Flaming Rage.</p>
                <p>Actualmente, yo Tebrase, estoy a cargo de la totalidad del sitio web. Mi objetivo sigue siendo el mismo, mejorar la programación web y seguir ofreciendo guías.</p>
                <p>Poco a poco se irá añadiendo guías y demás. Y quien sabe como acabará.</p>
                <p>Muchísimas gracias la gente que me apoye y espero que les sirva de ayuda la web, tanto como lo es para mí. =)</p>
            </section>
        </main>
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
    </body>
</html>

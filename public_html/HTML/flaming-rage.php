<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Flaming Rage. Proyecto del desarrollo de la web Flaming rage." />
        <meta name="keywords" content="Flaming Rage, Proyecto web." />
        <meta property="og:title" content="Flaming Rage - Proyecto web" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="http://www.flamingrage.hol.es/HTML/flaming-rage.php" />
        <meta property="og:image" content="http://www.flamingrage.hol.es/Imagenes/alts.png" />
        <meta property="og:description" content="Proyecto del desarrollo de la web Flaming rage." />
        <link rel="canonical" href="http://www.flamingrage.hol.es/HTML/flaming-rage.php">
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
        <title>Proyecto Web</title>
    </head>

    <body>


        <?php include('header-nav.php'); ?>

        <main class="container">

            <section class="subcontenido">
                <header><h2 class="centrar">Proyecto Flaming Rage</h2></header>

                <article>
                    <header><h2 class="separador text-center">INTRODUCCIÓN</h2></header>
                </article>
                <article>
                    <header><h2 class="separador text-center">FUNCIONALIDADES</h2></header>
                </article>
                <article>
                    <header><h2 class="separador text-center">TECNOLOGIAS USADAS</h2></header>
                </article>
                <article>
                    <header><h2 class="separador text-center">SKETCHES</h2></header>
                </article>
                <article>
                    <header><h2 class="separador text-center">FUTUROS OBJETIVOS</h2></header>
                </article>

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

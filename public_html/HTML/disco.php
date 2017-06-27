<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Flaming Rage. Música gratis, nigthcore, anime, etc." />
        <meta name="keywords" content="Flaming Rage, disco, musica, nigthcore y musica anime." />
        <meta property="og:title" content="Flaming Rage - Disco" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="http://www.flamingrage.hol.es/HTML/disco.php" />
        <meta property="og:image" content="http://www.flamingrage.hol.es/Imagenes/alts.png" />
        <meta property="og:description" content="Música gratis, nigthcore, anime, etc." />
        <link rel="canonical" href="http://www.flamingrage.hol.es/HTML/disco.php">
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
        <title>Disco Flaming Rage</title>
    </head>

    <body>
        <?php include('header-nav.php'); ?>

        <main class="container">
            <section class="subcontenido">
                <div class="row">
                    <div class="col-md-2 col-sm-4 col-xs-2">
                        <img class="img-responsive img-centrar" src="http://i824.photobucket.com/albums/zz165/losenarubi/altavoz.gif" alt="photoAltavoz"/>
                    </div>
                    <div class="col-md-6 col-sm-4 col-xs-6">
                        <img class="img-responsive img-centrar" src="../Imagenes/The%20Rolling%20Girls%202.gif" alt="photoAltavoz"/>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-2">
                        <img class="img-responsive img-centrar" src="http://i824.photobucket.com/albums/zz165/losenarubi/altavoz.gif" alt="photoAltavoz"/>
                    </div>
                </div>

                <article class="row">
                    <header><h2 class="separador text-center">Nightcore</h2></header>

                    <div class="col-md-6 col-sm-4 col-xs-12">
                        <div class="img-thumbnail">
                            <iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/232012019&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                            <div class="caption text-center"><h3>Nightcore Rock Tomo 1</h3></div>

                        </div>
                    </div>

                    <div class="col-md-6 col-sm-4 col-xs-12">
                        <div class="img-thumbnail ">
                            <iframe  src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/232017663&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                            <div class="caption text-center">
                                <h3>Nightcore Rock Tomo 2</h3>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="row">
                    <header class="separador text-center"><h2>Openings</h2></header>


                    <div class="col-md-6 col-sm-4 col-xs-12">
                        <div class="img-thumbnail">
                            <iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/232007543&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                            <div class="caption text-center">
                                <h3>Openings Tomo 1</h3>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
            <footer><p><a href="https://www.facebook.com/groups/465723736814961/"><img class="img-responsive img-centrar" alt="facebook" src="../Imagenes/facebook.png"></a></p>
                <p class="text-center"><a href="soporte.php">Contacto con el soporte</a> </p></footer>
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

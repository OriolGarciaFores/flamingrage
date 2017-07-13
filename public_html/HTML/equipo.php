<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Flaming Rage. Descripción equipo web." />
        <meta name="keywords" content="Flaming Rage, Equipo, descripción." />
        <meta property="og:title" content="Flaming Rage - Equipo web" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="http://www.flamingrage.hol.es/HTML/equipo.php" />
        <meta property="og:image" content="http://www.flamingrage.hol.es/Imagenes/alts.png" />
        <meta property="og:description" content="Descripción del equipo web." />
        <link rel="canonical" href="http://www.flamingrage.hol.es/HTML/equipo.php">
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
        <title>Equipo web</title>
    </head>

    <body>


        <?php include('header-nav.php'); ?>

        <main class="container">

            <section class="subcontenido">
                <header><h1 class="text-center">Equipo Web</h1></header>
                <div class="row">
                    <!--IMAGENES-->
                    <div class="col-sm-6 col-xs-12">
                        <div class="thumbnail">
                            <img src="../Imagenes/perfil-tebrase.png" alt="Perfil" class="img-circle img-responsive img-centrar">
                            <div class="caption-perfil text-center">
                                <p><strong>TEBRASE</strong></p>
                                <p>LÍDER DE FLAMING RAGE. DISEÑADOR DE LA WEB.</p>
                                <P>Fundador del clan Flaming Rage, fundada el 2012 en un mmorpg, Nostale.
                                Las ganas de aprender a programar en versidad de proyectos de desarrollo de software, fue lo que originó la web de Flaming Rage como objetivo de aprender y ayudar a facilitar información o software a los demás.
                               </P>
                            </div>
                        </div>  
                    </div>
                    <div class="col-sm-6 col-xs-12">
                          <div class="thumbnail">
                            <img src="https://www.agendamedicaonline.cl/demo/images/defaultProfilePic.png" alt="Perfil" class="img-circle img-responsive img-centrar">
                            <div class="caption-perfil text-center">
                                <p><strong>NAU</strong></p>
                                <p>MIEMBRO DE FLAMING RAGE. COLABORADOR DEL DISEÑO WEB.</p>
                                <P>Colaborador y miembro de Flaming Rage y antiguo jugador de Nostale. Las mismas ganas de aprender a programar en diseño web, le hizo venir y colaborar en los inicios de este sitio web.</P>
                            </div>
                        </div>  
                    </div>
                </div>
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
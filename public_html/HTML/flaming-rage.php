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
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- INDICADORES las redondas -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                        </ol>
                        <!-- END INDICADORES -->
                        <!-- LISTA IMAGENES -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="../Imagenes/slider-antiguaweb.jpg" alt="Los Angeles" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="../Imagenes/slider-antiguaweb2.JPG" alt="Chicago" style="width:100%;">
                            </div>
                        </div>
                        <!-- END LISTA IMAGENES -->
                        <!-- CONTROLES SLIDER -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                        <!-- END CONTROLES SLIDER -->
                    </div>
                    <br>

                    <p>Este proyecto se trata de la web Flaming Rage. Este proyecto lo inicié con el fin de aprender a programar webs por mi cuenta. En las imágenes anteriores se puede contemplar los cambios que se han realizado durante los años de esta web.
                        En un inicio, todo empezó con HTML4 y CSS simples. No usé ningún framework, se empezó simplemente con un Bloc de notas y a programar.</p>
                    <p>Con el paso del tiempo se ha ido mejorando hasta llegar ahora. Actualmente si uso un framework simple, llamado Bootstrap, con el que la web el estado actual esta rediseñada con ello.</p>
                    <p>La web está destinada para aquellos usuarios que necesitan ayuda en algunos programas informáticos y ofrecer facilidad de obtenerlos y aprender a usarlos.</p>
                </article>
                <article>
                    <header><h2 class="separador text-center">FUNCIONALIDADES</h2></header>
                    <p>
                    <li>Web responsiva para ordenador, tablets y móviles.</li>
                    <li>Música.</li>
                    <li>Guías y descargas.</li>
                    </p>
                </article>
                <article>
                    <header><h2 class="separador text-center">TECNOLOGÍAS USADAS</h2></header>
                    <p>
                    <li>En los inicios Bloc de notas: Un simple documento de texto básico que viene con el sistema operativo y acepta multitud de extensiones.</li>
                    <li>Seguidamente Dreamweaver: es una aplicación que sirve para programar y diseñar webs de una forma fácil.</li>
                    <li>Finalmente acabe usando NetBeans: Un IDE, es decir, un software virtualizador que permite programar en muchos lenguajes.</li>
                    <li>Photoshop: Un editor de imágenes, con el que adapto o redimensiono las imágenes para la web.</li>
                    </p>
                </article>
                <article>
                    <header><h2 class="separador text-center">FUTUROS OBJETIVOS</h2></header>
                    <p>
                    <li>Mejorar el menú off-canvas.</li>
                    <li>Mejorar el footer en versión móvil.</li>
                    </p>
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

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Flaming Rage. Guía para instalar y usar un mando de ps3 en el pc." />
        <meta property="og:title" content="Flaming Rage - Guía mando para PC" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="http://www.flamingrage.hol.es/HTML/guia-mando-pc.php" />
        <meta property="og:image" content="http://www.flamingrage.hol.es/Imagenes/alts.png" />
        <meta property="og:description" content="Guía para instalar y usar un mando de ps3 en el pc." />
        <link rel="canonical" href="http://www.flamingrage.hol.es/HTML/guia-mando-pc.php">
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
        <title>Guía mando a pc</title>
    </head>
    <body>
        <?php include('header-nav.php'); ?>

        <main class="container">
            <section class="subcontenido">

                <header><h2>Guía mando ps3 en pc</h2></header>
                <article class="row">
                    <header><h2 class="separador text-center">Descargas:</h2></header>

                    <a href="http://forums.pcsx2.net/Thread-XInput-Wrapper-for-DS3-and-Play-com-USB-Dual-DS2-Controller?highlight=vibration" target="blank">SCP SERVER</a>
                </article>
                <article class="row">
                    <header><h2 class="separador text-center">Guía de instalación</h2></header>
                    <p>Este programa es bastante sencillo de instala. Primeramente hay que descargar la aplicación, el enlace anterior os llevara a un foro donde dispone del enlace a la última versión de la aplicación.</p>
                    <p>Seguido de esto, hay que descomprimir el .rar y finalmente obtendremos una carpeta con un montón de ficheros y carpetas. Para empezar la instalación hay que acceder a las siguientes carpetas y ejecutar la aplicación:
                        <br> <span style="color:red;"> ScpServer --> bin --> ScpDriver</span> 
                    </p>
                    <img class="img-responsive img-centrar" src="../Imagenes/scp-server-driver.JPG">

                    <p>Seguidamente, se os abrirá una ventana de instalación. <span style="color: red;">Hay que tener el mando conectado con usb al pc. </span>Hay que remarcar la casilla <kbd>Force install</kbd> y luego ya install.</p>
                    <img src="../Imagenes/scp-server-install.JPG" class="img-responsive img-centrar">
                    <p>Finalmente solo hace falta ejecutar ScpServer y se os abrirá una ventana con el mando conectado y funcionando. Hay unas opciones debajo, left, right, etc. Con las que puedes probar si el mando vibra y así confirmar que funciona correctamente.</p>
                    <img class="img-responsive img-centrar" src="../Imagenes/scp-server.JPG">
                    <img class="img-responsive img-centrar" src="../Imagenes/scp-server-activo.JPG">
                </article>
                <article class="row">
                    <header><h2 class="separador text-center">Arreglo de un bug</h2></header>
                    <p>Puede darse el caso de que abras el scpServer y no muestre nada activo.
                        <br>
                        A veces directamente es un bug visual y abriendo un juego funciona correctamente.</p>
                    <p>En el caso de que realmente no detecta el mando, puede ser porque la aplicación ejecuta un proceso nada más iniciar el ordenador y como es lógico no tienes ningún mando conectado siempre.</p>
                    <p>Para ello hay que acceder al administrador de tareas. Desde la barra de abajo de la pantalla de windows 10, con el botón derecho podéis acceder al administrador de tareas.</p>
                    <img class="img-responsive img-centrar" src="../Imagenes/administrador-tareas.JPG">
                    <p>Luego buscar entre toda la lista de procesos, ScpServer, seleccionarlo y finalizar la tarea.</p>
                    <img class="img-responsive img-centrar" src="../Imagenes/scp-server-error.JPG">
                    <p>Finalmente volvéis abrir el ScpServer de nuevo con el mando conectado y debería funcionar correctamente.</p>
                    <p>Ale, pues espero que sea de utilidad. =)</p>
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

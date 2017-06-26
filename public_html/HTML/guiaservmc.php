<!doctype html>
<html>
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
        <title>Guía Server Minecraft</title>
    </head>

    <body>
        <?php include('header-nav.php'); ?>
        <main class="container">
            <section class="subcontenido">
                <header><h2 class="separador text-center">Como crear un servidor Minecraft</h2></header>

                <p>A estas alturas dudo que muchos de vosotros no sepáis crear un servidor de Minecraft, pero por si las moscas, yo os pongo una pequeña guía y además os dejare el Hamachi antiguo de toda la vida para que podáis descargar, ya que es difícil encontrarlo, porque salió una nueva versión. Esta nueva versión necesitas registro y es bastante más complejo a la hora de crear un servidor e unirte.</p>
                <p>Vayamos al grano y lo primero es lo primero.</p>
                <p> 1r. Descargarse la última versión disponible del servidor de Minecraft en la página oficial. <a href="https://minecraft.net/download">https://minecraft.net/download</a></p>
                <p>Os recomiendo descargar la versión minecraft_server.jar ya que dispone de la compatibilidad de 64 bits.</p>

                <p> 2n.Nos disponemos a crear una carpeta donde colocaremos nuestro server.jar y lo ejecutaremos. Después de ejecutarlo, lo cerráis y abrís con el bloc de notas el server.properties.</p>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <img class="img-responsive img-centrar" src="../Imagenes/fotoguiamc.JPG" alt="imagen">
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <img class="img-responsive img-centrar" src="../Imagenes/fotoguiamc1.JPG" alt="imagen">
                    </div>
                </div>
                <p>Lo poco que tenéis que editar es <b>server-ip</b> que es donde colocareis vuestra ipv4 de Hamachi. <b>Online-mode</b> si esta en true solo tienen acceso los Premium y si esta en false para todo el mundo. Y poco más, no veo necesario profundar cada opción para que sirve, ya que con un poco de traducción del ingles ya se sabe de lógica. Para poder obtener la ipv4 del Hamachi será necesario crear una red de Hamachi y para ello necesitaremos instalar le Hamachi que os dejare aquí el link:</p>
                <p class="icono"><a href="https://mega.co.nz/#!UVNjzb4Q!HevyhAzBeuC10gD9uQ89zE6UutUNNdmC5TRXjYrTuGo"><img class="img-responsive img-centrar" src="http://3.bp.blogspot.com/-7bvurZ_VmIs/Vdj9dmWgEoI/AAAAAAAAAOY/gQavZNsNu48/s1600/hamachi-logo.png" alt="image" width="92" height="97" /></a></p>
                <p>Se instala y lo inicias no tiene mucha complicación. Creas una red con un nombre y una contraseña, <b>ojo! que solo pueden unirse 4 personas por grupo</b>, pero puedes estar tranquilo ya que creas otro de nuevo se unen los demás compañeros y como todos están unidos en tu red aunque en diferentes grupos se pueden unir al servidor igualmente. Solo necesitaran tus amigos tu IPv4 y pegarla a multijugador conexión directa al Minecraft. Pero antes...</p>
                <p><img class="img-responsive img-centrar" alt="imagen" src="../Imagenes/fotoguiamc2.JPG"></p>
                <p> Seguidamente con la guía, después de insertar tu IPv4 en el bloc de notas y guardado la edición. Procedes a ejecutar de nuevo el server.jar y se iniciara el servidor y todo estará listo.</p>
                <p><b>A jugar!</b></p>

            </section>

            <footer><p><a href="https://www.facebook.com/groups/465723736814961/"><img class="img-responsive img-centrar" alt="facebook" src="../Imagenes/facebook.png"></a></p>
                <p class="text-center"> <a href="soporte.php">Contacto con el soporte</a></p></footer>
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

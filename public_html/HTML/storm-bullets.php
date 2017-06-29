<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Flaming Rage. Proyecto de un videojuego desarrollado en Java." />
        <meta name="keywords" content="Flaming Rage, Proyecto, Storm Bullets, videojuego en Java, juego 2d." />
        <meta property="og:title" content="Flaming Rage - Storm Bullets" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="http://www.flamingrage.hol.es/HTML/storm-bullets.php" />
        <meta property="og:image" content="http://www.flamingrage.hol.es/Imagenes/alts.png" />
        <meta property="og:description" content="Proyecto de un videojuego desarrollado en Java." />
        <link rel="canonical" href="http://www.flamingrage.hol.es/HTML/storm-bullets.php">
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
        <title>Storm Bullets</title>
    </head>
    <body>
        <?php include('header-nav.php'); ?>

        <main class="container">
            <section class="subcontenido">
                <img class="img-responsive img-centrar" src="../Imagenes/logo-storm-bullets.png">
                <article>
                    <header><h2 class="separador text-center">DESCARGA ULTIMA VERSIÓN</h2></header>
                    <a href="https://mega.nz/#!BU8gTazB!OtFmwxb4an5FsiO96DLJMJadR7o1fDAki-s0rY6kykI" target="blank">Storm Bullets v1.0.1</a>
                </article>
                <article>
                    <header><h2 class="separador text-center">INTRODUCCIÓN</h2></header>
                    <p>Este proyecto de trata de un videojuego en 2D programado en Java, en que la gran parte
                        del proyecto se programa el motor grafico, sin uso de Frameworks u otras aplicaciones
                        externas.</p>
                    <p>Estilos: 
                    <li>Rogue-like</li>
                    <li>Shooter</li>
                    <li>Acción-RPG</li>
                    </p>
                    <p>El juego trata de una mazmorra compuesta de pisos debajo tierra, en el que encontraras multitud de enemigos que hay que derrotar con nuestro personaje. Pero ojo,
                        hay enemigos de todo tipo, rápidos, lentos, potentes, duros, etc. Para derrotar estos enemigos dispones de armas de fuego que a medida que avanzas podrás encontrar en la mazmorra, si es que tienes suerte.</p>
                    <p>Objetivos:
                    <li>Sobrevivir, solo dispones de 1 posibilidad. Si mueres, vuelves a empezar.</li>
                    <li>Llegar al último piso.</li>
                    <li>Conseguir la máxima puntuación posible.</li></p>
                    <p>Suerte, y que te diviertas! =)</p>
                </article>
                <article>
                    <header><h2 class="separador text-center">FUNCIONALIDADES</h2></header>
                    <p>
                    <li>Motor graphico personalizado.</li>
                    <li>Juego a pantalla completa.</li>
                    <li>Ranking.</li>
                    <li>Enemigos basicos.</li>
                    <li>Bosses.</li>
                    <li>Items aleatorios.</li>
                    <li>Armas de fuego.</li>
                    </p>
                </article>
                <article>
                    <header><h2 class="separador text-center">TECNOLOGIAS USADAS</h2></header>
                    <p>
                    <li>NetBeans: Un IDE, es decir, un software virtualizador que permite programar en java, entre otros lenguajes de programación.</li>
                    <li>Photoshop: Un editor de imagen, con el que se ha diseñado todas las imágenes del juego.</li>
                    <li>Tiled: Se trata de un software libre, para crear/editar mapas.</li>
                    </p>
                </article>
                <article>
                    <header><h2 class="separador text-center">DIAGRAMA DE FLUJO</h2></header>
                    <p>
                        Basicamente podemos ver las diferentes situaciones que podriamos encontrar y las acciones que se podrian hacer.
                    </p>
                    <img class="img-responsive img-centrar" src="../Imagenes/diagrama-flujo.JPG">
                </article>
                <article>
                    <header><h2 class="separador text-center">FUTUROS OBJETIVOS</h2></header>
                    <p>
                    <li>Mejora de la Inteligencia Artificial.</li>
                    <li>Mejora de las animaciones.</li>
                    <li>Variedad de mapas y aleatorios.</li>
                    <li>Más enemigos.</li>
                    <li>Más objetos.</li>
                    </p>
                </article>
                <article>
                    <header><h2 class="separador text-center">GUÍA DE USUARIO</h2></header>

                    <h2>Menú principal</h2>
                    <img class="img-responsive img-centrar" src="../Imagenes/storm-bullets-menu.JPG">
                    <p>
                        Al ejecutar la aplicación, la primera pantalla se nos mostrara un menú al que nos
                        podemos mover por las siguientes opciones con el teclado, pulsado W para subir o bien S
                        para bajar.
                        Para acceder a la opción seleccionada pulsamos ENTER.
                    </p>
                    <p>
                        Opciones:

                    <li class="list-number"><b class="letra-verde">Jugar:</b> Empezaría el juego accediendo antes una ventana para nombrar el jugador.</li>
                    <li class="list-number"><b class="letra-verde">Ranking:</b> Permite ver una lista de las 5 mejores partidas que se han hecho, en
                        base las puntuaciones conseguidas.</li>
                    <li class="list-number"><b class="letra-verde">Opciones:</b> Permite configurar las diferentes opciones, en este caso el volumen
                        para subir y bajar los sonidos o música.</li>
                    <li class="list-number"><b class="letra-verde">Salir:</b> Permite cerrar la aplicación.</li>
                    </p>

                    <img class="img-responsive img-centrar" src="../Imagenes//storm-bullets-ingame.JPG">
                    <p>
                        Aquí se ve claramente la pantalla de juego donde tenemos diferentes elementos.
                    <ol start="1">
                        <li class="list-number">Una interfaz de usuario en el que contenemos una pequeña guía de los
                            controles.
                        <li>E: para recoger los objetos.</li>
                        <li>ESC: para acceder a un menú y pausar la partida.</li>
                        <li>WASD: las teclas de movimientos.</li>
                        <li>ESPACIO: para disparar el arma hacia los enemigos.</li>
                        <li>También tenemos el inventario, con el arma y objetos.</li>
                        <li>La vida del personaje y puntuaciones.</li>
                        </li>
                    </ol>
                    <ol start="2">
                        <li class="list-number"><b class="letra-verde">Un botiquín:</b> Se trata de un objeto que nos permite recogerlo y curarnos una
                            cierta cantidad de vida.</li>
                        <li class="list-number">Aquí se verían el personaje principal y los enemigos a los que hay que derrotar.</li>
                        <li class="list-number">Esto sería una de las diferentes puertas a las que puedes acceder otras salas
                            para así, poder avanzar en el juego.</li>
                    </ol>
                    </p>

                    <p>También nos podemos fijar en unos candados. Eso significa que todas las
                        puertas de la sala están cerradas. Con lo que no se abrirán hasta que los
                        enemigos hayan sido derrotados.</p>
                </article>
                <article>
                    <h2>Cofre</h2>
                    <img class="img-responsive img-centrar" src="../Imagenes/storm-bullets-cofre.png">
                    <p>En algunas salas nos podemos encontrar con cofres en los que nos pueden dar
                        aleatoriamente algún arma o algun consumible.</p>
                </article>
                <article>
                    <h2>Puertas</h2>
                    <img class="img-responsive img-centrar" src="../Imagenes/storm-bullets-doors.JPG">
                    <p>Otra de las situaciones que nos podemos encontrar es, con las distintas
                        puertas.</p>
                    <p>
                        Hay 3 tipos:
                    <li>Las normales: que podemos acceder a la siguiente sala sin necesidad de nada.</li>
                    <li>Las con candado: que requiere de 1 llave plateada.</li>
                    <li>Las con una calavera: que requiere una llave dorada y esta puerta en particular
                        nos llevaría a un enemigo final.</li>
                    </p>
                </article>
                <article>
                    <h2>Sala boss</h2>
                    <img class="img-responsive img-centrar" src="../Imagenes/storm-bullets-boss.JPG">
                    <p>Esta ventana podemos ver la sala de un boss. En lo que se puede ver la barra de vida del
                        boss y hay que vigilar en sus diferentes ataques que pueda tener, como por ejemplo la
                        bola de fuego.</p>
                    <p>Hasta aquí el tutorial y mi proyecto! =)</p>
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

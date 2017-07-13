<footer>
    <button onclick="topFunction()" id="myBtn"  title="Go to top">Top</button>
    <div class="container">
        <div class="row">
            <h5 class="col-xs-4"><strong>QUIÉNES SOMOS</strong></h5>
            <h5 class="col-xs-4"><strong>SITIOS DE INTERES</strong></h5>
            <h5 class="col-xs-4"><strong>CONTACTAR</strong></h5>
        </div>
        <div class="row">
            <p class="col-xs-4"><a href="info-web.php">Sobre la web</a></p>
            <p class="col-xs-4"><a href="https://elchapuzasinformatico.com/" target="blank">Chapuzas informatico</a></p>
            <p class="col-xs-4"><a href="soporte.php">Centro de soporte</a></p>
        </div>
        <div class="row">
            <p class="col-xs-4"><a href="equipo.php">Equipo</a></p>
            <p class="col-xs-4"><a href="http://www.3djuegos.com/novedades/noticias/juegos/0f0f0f0/fecha/" target="blank">3D Juegos</a></p>
        </div>
        <div class="row">
            <p class="col-xs-4"><a href='https://drive.google.com/file/d/0B5KROJmqTZaiVUVxMTU0ekRMUkE/edit?usp=sharing' target="_blank">Normativa</a></p>
            <p class="col-xs-4"><a href='http://animeflv.net/' target="_blank">Anime FLV</a></p>
        </div>
        <hr style="border-color: green;">
        <div class="row">
            <div class="col-xs-offset-3 col-xs-offset-footer">
                <p class="col-xs-2"><a href="https://www.facebook.com/groups/465723736814961/" target="blank"><img class="img-responsive" alt="facebook" src="../Imagenes/facebook.png"></a></p>
                <p class="col-xs-2"><a href="https://twitter.com/OriolTebra" target="blank">
                        <img class="img-responsive" alt="facebook" src="http://www.upmc.fr/skins/UPMC/resources/img/logo32-twitter.png">
                        <span class="hidden-xs">Tebrase</span>
                        <span class="hidden-lg hidden-md hidden-sm">T</span>
                    </a></p>
                <p class="col-xs-2"><a href="https://twitter.com/nauperezguerra" target="blank">
                        <img class="img-responsive" alt="facebook" src="http://www.upmc.fr/skins/UPMC/resources/img/logo32-twitter.png">
                        <span class="hidden-xs">Nau</span>
                        <span class="hidden-lg hidden-md hidden-sm">N</span>
                    </a></p>
                <p class="col-xs-2"><a href="https://www.youtube.com/channel/UCRWkZxpUnC7IXYfEnET0gpw" target="blank"><img class="img-responsive" alt="facebook" src="https://www.youtube.com/yts/img/favicon_32-vfl8NGn4k.png"></a></p>
            </div>
        </div>     


    </div>
    <!-- Aduio de Navidad
     <audio controls autoplay>
    
    <source src="Musica/musica-minions-navidad.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
  </audio>-->
    <script>
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }

// When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</footer>
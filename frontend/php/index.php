<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/styles.css"/>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-9ZfPnbegQSumzaE7mks2IYgHoayLtuto3AS6ieArECeaR8nCfliJVuLh/GaQ1gyM" crossorigin="anonymous">
        <meta name="viewport">
    </head>
    <body>
        <?php include("./includes/header.php") ?>
        <section id="accueil">
            <div class="title-container">
                <h1 class="main-title">La commission régionale centre photo vidéo</h1>
                <i class="fas fa-long-arrow-alt-down"></i>
            </div>
            <video autoplay muted loop>
                <source src="../assets/videos/video-accueil.mp4" type="video/mp4">
            </video> 
        </section>
        <main>
            <div class="section-une">
                <h2 class="section-title">Découvrez un autre monde</h2>
                <p>Le monde sous marin, avec plus de 220 000 espèces répertoriées , vous offre un panel 
                    d’images infini. De l’ ambiance marine à la macro, les sujets photographiques sont 
                    nombreux.
                </p>
                <p>Nous vous invitons à le découvrir à travers la pratique de la photo et de la vidéo sous-
                    marine.
                </p>
                    <div class="citation">
                        <p>“ Vers la cinquantaine, ma passion pour la plongée s’est révélée. En 2002,
                            après un baptême de plongée en Egypte en 2004, j’ai compris que cette activité 
                            allait rythmer ma vie.“
                        </p>
                        <p>Denise Ruhlmann, Formatrice photo</p>
                    </div>
                <img src="../assets/img/home/tortue.png">
            </div>
            <section class="section-deux">
                <div>
                    <h2 class="section-title">La CRCPV</h2>
                    <p>La Commission Photo Vidéo de la Région Centre à pour objectif de faire découvrir et 
                        de développer la photo et la vidéo sous marine dans la région Centre-Val de Loire .
                    </p>
                    <p>Ce site est là pour vous informer ou partager sur la pratique subaquatique dans
                        notre région. 
                    </p>
                    <p>Vous êtes débutant ou pratiquant ? Venez vous former  avec nous, ou approfondir votre 
                        sens artistique à travers un enseignement convivial  et une equipe chaleureuse.
                    </p>
                    <a href="" class="btn">Découvrir</a>
                </div>
                <div>
                    <img class="show-on-scroll" id="raies" src="../assets/img/home/raies.jpg">
                    <img class="show-on-scroll" id="plongeur" src="../assets/img/home/plongeur.jpg">
                </div>
            </section>
            <section class="section-trois">
                <img src="../assets/img/home/crevette.gif">
                <div>
                    <h2 class="section-title">Nos formations</h2>
                    <p>La CRCPV propose les formations de niveau 1 et 2 en photo et niveau 1 en vidéo.
                    </p>
                    <p>Les formations sont organisées soit sur plusieurs jours tout au long de l’année, 
                        soit lors d’un séjour en mer de 5 jours.
                    </p>
                    <a class="btn" href="">Nos formations en détails</a>
                </div>
            </section>
        </main>
        <?php include("./includes/footer.php") ?>
    </body>
</html>

<script type="text/javascript">
    //ANIMATION ON SCROLL
    var scroll = window.requestAnimationFrame ||
    function(callback){ window.setTimeout(callback, 1000/60)};
    var elementsToShow = document.querySelectorAll('.show-on-scroll');

    function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
            (rect.top <= 0
                && rect.bottom >= 0)
            ||
            (rect.bottom >= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.top <= (window.innerHeight || document.documentElement.clientHeight))
            ||
            (rect.top >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight))
        );
    }

    function loop() {

        elementsToShow.forEach(function (element) {
            if (isElementInViewport(element)) {
                element.classList.add('is-visible');
            } else {
                element.classList.remove('is-visible');
            }
        });

        scroll(loop);
    }

    loop();

</script>





<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title></title>

        <link rel='stylesheet' href='./styles/default.css'>
        <link rel='stylesheet' href='./styles/index.css'>
    </head>
    <body onload="init()">
        <nav class='topNavBar'>
            <p class='nameWebsite js-scrollTo' href="body"><span class="name"></span></p>
            <ul class='listNavItems'>
                <li class='navItem js-scrollTo' href="#details">Détails</li>
                <li class='navItem js-scrollTo' href="#reservationandcontact">Reservation</li>
                <li class='navItem js-scrollTo' href="#advices">Avis</li>
            </ul>
        </nav>
        <header>
            <h1 class="heroTitle"><span class="name"></span>, votre <span class="highlight">rêve</span> dans notre villa en <span class="highlight">corse</span></h1>
            <button class="cta js-scrollTo" href="#details">Découvir</button>
        </header>
        <div class="blueCircle bc1">
            <div class="whiteCircle"></div>
        </div>
        <div class="blueCircle bc2">
            <div class="whiteCircle"></div>
        </div>
        <div class="blueCircle bc3">
            <div class="whiteCircle"></div>
        </div>
        <div class="wrapperImg">
            <div class="blueCircle bc4">
                <div class="whiteCircle"></div>
            </div>
            <img src="" alt="Image selected">
            <div class="cross">
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <div class="blueCircle bc5">
                <div class="whiteCircle"></div>
            </div>
        </div>
        <main>
            <div id="details">
                <div class="row">
                    <div class="detail">
                        <div class="left">
                            <img src="./res/hero0.jpeg" alt="villa and beach" class="img">
                        </div>
                        <div class="right">
                            <h3 class="titleDetail">Situation</h3>
                            <p class="paragraphDetail">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi dignissimos vel odio, dolores nam voluptatem. Soluta magni accusantium ratione itaque, dignissimos placeat, aperiam aspernatur deleniti eius, dolore laborum doloribus. Repellendus!</p>
                        </div>
                    </div>
                </div>
                <div class="row reverse">
                    <div class="detail">
                        <div class="left">
                            <img src="./res/hero4.jpeg" alt="villa and beach" class="img">
                        </div>
                        <div class="right">
                            <h3 class="titleDetail">Pièces</h3>
                            <p class="paragraphDetail">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi dignissimos vel odio, dolores nam voluptatem. Soluta magni accusantium ratione itaque, dignissimos placeat, aperiam aspernatur deleniti eius, dolore laborum doloribus. Repellendus!</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="detail">
                        <div class="left">
                            <img src="./res/hero10.jpeg" alt="villa and beach" class="img">
                        </div>
                        <div class="right">
                            <h3 class="titleDetail">Chambres</h3>
                            <p class="paragraphDetail">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi dignissimos vel odio, dolores nam voluptatem. Soluta magni accusantium ratione itaque, dignissimos placeat, aperiam aspernatur deleniti eius, dolore laborum doloribus. Repellendus!</p>
                        </div>
                    </div>
                </div>
                <div class="row reverse">
                    <div class="detail">
                        <div class="left">
                            <img src="./res/hero1.jpeg" alt="villa and beach" class="img">
                        </div>
                        <div class="right">
                            <h3 class="titleDetail">Plages</h3>
                            <p class="paragraphDetail">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi dignissimos vel odio, dolores nam voluptatem. Soluta magni accusantium ratione itaque, dignissimos placeat, aperiam aspernatur deleniti eius, dolore laborum doloribus. Repellendus!</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="detail">
                        <div class="left">
                            <img src="./res/hero6.jpeg" alt="villa and beach" class="img">
                        </div>
                        <div class="right">
                            <h3 class="titleDetail">Évenements</h3>
                            <p class="paragraphDetail">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi dignissimos vel odio, dolores nam voluptatem. Soluta magni accusantium ratione itaque, dignissimos placeat, aperiam aspernatur deleniti eius, dolore laborum doloribus. Repellendus!</p>
                        </div>
                    </div>
                </div>
                <div class="row reverse">
                    <div class="detail">
                        <div class="left">
                            <img src="./res/hero11.jpeg" alt="villa and beach" class="img">
                        </div>
                        <div class="right">
                            <h3 class="titleDetail">Équipements</h3>
                            <p class="paragraphDetail">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi dignissimos vel odio, dolores nam voluptatem. Soluta magni accusantium ratione itaque, dignissimos placeat, aperiam aspernatur deleniti eius, dolore laborum doloribus. Repellendus!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="reservationandcontact">
                <fieldset class="contact">
                    <legend>Contactez nous</legend>
                    <form method="post">
                        <div class="top">
                            <input name="firstName" type="text" placeholder="Nom" class="contact name" required>
                            <input name="lastName" type="text" placeholder="Prénom" class="contact name" required>
                        </div>
                        <div class="bottom">
                            <input name="email" type="email" placeholder="john@exemple.com" class="contact email" required>
                            <input type="tel" name="phone" pattern="[0-9]{10}" placeholder="Numero de téléphone" class="contact numero" required>
                        </div>
                        <textarea name="message" type="text" placeholder="Votre message" class="contact message" required></textarea>
                        <button class="ctaContact">Envoyer</button>
                    </form>
                </fieldset>
            </div>
            <div id="advices">

            </div>
        </main>
        <footer>
            
        </footer>
        <script src="./js/data.js"></script>
        <script src="./js/observer.js"></script>
        <script src="./js/main.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.js-scrollTo').on('click', function() { // Au clic sur un élément
                    var page = $(this).attr('href'); // Page cible
                    var speed = 750; // Durée de l'animation (en ms)
                    $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
                    return false;
                });
            });
        </script>
    </body>
<html>
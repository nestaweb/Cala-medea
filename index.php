<?php 
    $pdo = new PDO('sqlite:./backend/data.db');
    $statement = $pdo->query("SELECT firstName,lastName,content FROM ADVICES");
    if ($statement === FALSE){
        die('Erreur SQL');
    }

    $advices = $statement->fetchAll();

?>
<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title></title>

        <link rel='stylesheet' href='./styles/default.css'>
        <link rel='stylesheet' href='./styles/index.css'>
        <link rel='stylesheet' href='./styles/responsive.css'>
    </head>
    <body onload="init()">
        <?php require_once('./components/navBar.php'); ?>
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
                    <form method="post" action="./backend/mail.php">
                        <div class="top">
                            <input name="firstName" type="text" placeholder="Nom" class="contact name" autocomplete="off" required>
                            <input name="lastName" type="text" placeholder="Prénom" class="contact name" autocomplete="off" required>
                        </div>
                        <div class="bottom">
                            <input name="email" type="email" placeholder="john@exemple.com" class="contact email" autocomplete="off" required>
                            <input type="tel" name="phone" pattern="[0-9]{10}" placeholder="Numero de téléphone" class="contact numero" autocomplete="off" required>
                        </div>
                        <textarea name="message" type="text" placeholder="Votre message" class="contact message" autocomplete="off" required></textarea>
                        <button class="ctaContact" type="submit">Envoyer</button>
                    </form>
                </fieldset>
            </div>
            <div id="advices">
                <div class="titleSection">
                    <div class="transitionBar"></div>
                    <h1 class="titleSection">Vos avis</h1>
                    <div class="transitionBar"></div>
                </div>
                <?php foreach ($advices as $advice) {?>
                    <div class="advice">
                        <p class="name"><?php echo $advice[1] ?> <?php echo $advice[0] ?></p>
                        <p class="content"><?php echo $advice[2] ?></p>
                    </div>
                <?php } ?>
            </div>
        </main>
        <?php require_once('./components/footer.php'); ?>
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
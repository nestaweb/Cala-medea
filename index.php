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
            <p class='nameWebsite'><span class="name"></span></p>
            <ul class='listNavItems'>
                <li class='navItem'>Détails</li>
                <li class='navItem'>Reservation</li>
                <li class='navItem'>Avis</li>
            </ul>
        </nav>
        <header>
            <h1 class="heroTitle"><span class="name"></span>, votre <span class="highlight">rêve</span> dans notre villa en <span class="highlight">corse</span></h1>
            <button class="cta">Découvir</button>
        </header>
        <main>
            <div class="details">
                <div class="row">
                    <div class="detail">
                        <div class="left">
                            <img src="./res/hero0.jpeg" alt="villa and beach">
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
                            <img src="./res/hero4.jpeg" alt="villa and beach">
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
                            <img src="./res/hero10.jpeg" alt="villa and beach">
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
                            <img src="./res/hero1.jpeg" alt="villa and beach">
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
                            <img src="./res/hero6.jpeg" alt="villa and beach">
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
                            <img src="./res/hero11.jpeg" alt="villa and beach">
                        </div>
                        <div class="right">
                            <h3 class="titleDetail">Équipements</h3>
                            <p class="paragraphDetail">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi dignissimos vel odio, dolores nam voluptatem. Soluta magni accusantium ratione itaque, dignissimos placeat, aperiam aspernatur deleniti eius, dolore laborum doloribus. Repellendus!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="reservationandcontact">
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
                <fieldset class="reservation">
                    <legend>Reservez</legend>
                    <form method="post">
                        <div class="headInfos">
                            <input name="firstName" type="text" placeholder="Nom" class="reservation name" required>
                            <input name="lastName" type="text" placeholder="Prénom" class="reservation name" required>
                            <input name="email" type="email" placeholder="john@exemple.com" class="reservation email" required>
                            <input type="tel" name="phone" pattern="[0-9]{10}" placeholder="Numero de téléphone" class="reservation numero" required>
                        </div>
                        <div class="date">
                            <div class="selectDate">
                                <label for="startDate">Date d'arrivé : </label>
                                <input type="date" name="startDate" class="reservation date" required>
                            </div>
                            <div class="selectDate">
                                <label for="startDate">Date de départ : </label>
                                <input type="date" name="endDate" class="reservation date" required>
                            </div>
                        </div>
                        <button class="ctaReservation">Valider</button>
                    </form>
                </fieldset>
            </div>
        </main>
        <footer>
            
        </footer>
        <script src="./js/data.js"></script>
        <script src="./js/main.js"></script>
    </body>
<html>